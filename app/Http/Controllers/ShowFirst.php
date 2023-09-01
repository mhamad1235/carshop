<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qrcode;
class ShowFirst extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if ($request->id) {

            $data=Qrcode::where('id',$request->id)->get();
        }else{
            $data=Qrcode::all();
        }

        return view('welcome',['data'=>$data]);
    }
}
