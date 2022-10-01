<?php

namespace App\Http\Controllers\FrontEnd;

use App\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    public function index()
    {
        try{
            return view('frontend.portfolio');
        }catch (\Exception $e) {
            return $e;
        }
    }

    public function feedback(Request $request)
    {
        try{
            $validator = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required',
                'message' => 'required',
            ]);
            if($validator->fails()) return ['status' => false, 'message' => $validator->errors()->first()];

            $feedback = [
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
                'ip' => $request->ip(),
            ];
            Feedback::create($feedback);
            return ['status'=>true, 'message' => 'Thanks for your feedback!'];
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
