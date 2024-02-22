<?php

namespace App\Http\Controllers;
use App\models\ContactModel;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function re()
    {
    return view('contact');
    }
    public function save(Request $request)
{	
    //  dd($request);
    $data=new ContactModel;		
   //  dd($data);
    {
      $data->Name=$request->Name;
      $data->Email=$request->Email;
      $data->mobile=$request->mobile;
      $data->Subject=$request->Subject;

      $data->save(); 
      return redirect(route('contact'))->with('successMessage','Data save Successfully');
    }
}
}