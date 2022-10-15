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
            return view('frontend.pages.portfolio');
        }catch (\Exception $e) {
            return $e;
        }
    }

    public function gallery()
    {
        try{

            $images = [
                [
                    'title' => 'Exibit A',
                    'description' => 'This is exibit A.',
                    'image' => '/frontend/images/gallery/276164945_3049118621994152_7194855224946265464_n.webp'
                ],
                [
                    'title' => 'Exibit B',
                    'description' => 'This is exibit B.',
                    'image' => '/frontend/images/gallery/286448035_3301400856802440_369625971813735220_n.webp'
                ],
                [
                    'title' => 'Exibit C',
                    'description' => 'This is exibit C.',
                    'image' => '/frontend/images/gallery/298708395_148428664468550_8856686652295674246_n.webp'
                ],
                [
                    'title' => 'Exibit D',
                    'description' => 'This is exibit D.',
                    'image' => '/frontend/images/gallery/283342071_1077056643210763_4403122949807049620_n.webp'
                ],
                [
                    'title' => 'Exibit E',
                    'description' => 'This is exibit E.',
                    'image' => '/frontend/images/gallery/286598810_432052385087651_2089228343352798770_n.webp'
                ],
                [
                    'title' => 'Exibit G',
                    'description' => 'This is exibit F.',
                    'image' => '/frontend/images/gallery/67300808_220278155559267_7087882245824098004_n.jpg'
                ],
                [
                    'title' => 'Exibit H',
                    'description' => 'This is exibit F.',
                    'image' => '/frontend/images/gallery/186835509_524567188914769_1310584177447578006_n.jpg'
                ],
                [
                    'title' => 'Exibit I',
                    'description' => 'This is exibit F.',
                    'image' => '/frontend/images/gallery/276970690_513005110399339_7341566646825032539_n.webp'
                ],
                [
                    'title' => 'Exibit J',
                    'description' => 'This is exibit F.',
                    'image' => '/frontend/images/gallery/132282648_2434328956863744_8296611515899516894_n.jpg'
                ],
                [
                    'title' => 'Exibit K',
                    'description' => 'This is exibit F.',
                    'image' => '/frontend/images/gallery/84860266_529037411077287_6007855754051901907_n.jpg'
                ],
                [
                    'title' => 'Exibit L',
                    'description' => 'This is exibit F.',
                    'image' => '/frontend/images/gallery/83265763_1514661332025977_4656826763259994299_n.jpg'
                ],
                [
                    'title' => 'Exibit M',
                    'description' => 'This is exibit F.',
                    'image' => '/frontend/images/gallery/139654337_425623292220363_7862338857103162334_n.jpg'
                ],
                [
                    'title' => 'Exibit N',
                    'description' => 'This is exibit F.',
                    'image' => '/frontend/images/gallery/whahha.jpeg'
                ],
                [
                    'title' => 'Exibit O',
                    'description' => 'This is exibit F.',
                    'image' => '/frontend/images/gallery/saint.jpeg'
                ],
                [
                    'title' => 'Exibit O',
                    'description' => 'This is exibit F.',
                    'image' => '/frontend/images/gallery/IMG_0005.JPG'
                ],
                [
                    'title' => 'Exibit N',
                    'description' => 'This is exibit F.',
                    'image' => '/frontend/images/gallery/IMG_0007.JPG'
                ],
            ];

            return view('frontend.pages.gallery_two',compact('images'));
        }catch (\Exception $e) {
            return $e->getMessage();
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
