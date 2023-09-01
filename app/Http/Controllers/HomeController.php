<?php

namespace App\Http\Controllers;
use \Milon\Barcode\DNS2D;
use Illuminate\Http\Request;
use App\Models\Qrcode;
use App\Models\User;
use App\Http\Requests\CreateValidation;
use Auth;

use Session;
use Hash;
class HomeController extends Controller
{
    public function home(Request $request)
    {
        if ($request->id) {

            $data=Qrcode::where('id',$request->id)->get();
        }else{
            $data=Qrcode::all();
        }

        return view('welcome',['data'=>$data]);
    }
    public function qrcode()
{
$qrcode=Qrcode::all();

 return view ('qrcodecreater',['data'=>$qrcode]);
}
public function qrcode_create(Request $request,Qrcode $qrcode)
{
    if($file = $request->hasFile('image')) {

        $file = $request->file('image') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/images' ;
        $file->move($destinationPath,$fileName);

}
$validate=$request->validate([
    'name'=>'required',
    'type'=>'required',
    'price'=>'required',
    'description'=>'required',
]);


if ($validate) {
 $x= Qrcode::create([
'name'=>$request->name,
'type'=>$request->type,
'price'=>$request->price,
'description' => $request->description,
'image'=>$fileName
  ]);
}
if ($x) {
   return back();
}

}
public function login()
{
echo Hash::make('123456');
    return view('login');
}
public function login_check(CreateValidation $request)
{
$request->validated;
if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
 return redirect('/qrcode');
}else{
    return back();
}

}
public function logout()
{
    Session::flush();
    Auth::logout();
    return redirect('/');
}
public function delete($id)
{
   $res=Qrcode::find($id);
   if ($res->delete()) {
   return back();
   }
}
public function user()  {
return view('user');
}
public function show(Qrcode $qrcode){
    return view('welcome',['qrcode'=>$qrcode]);
}
}
