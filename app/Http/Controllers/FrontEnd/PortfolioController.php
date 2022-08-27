<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

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
}
