<?php

namespace App\Http\Controllers;
use App\models\FutureModel;
use App\models\ContactModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FutureController extends Controller
{
 
    public function re()
    {
    return view('future');
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
      return redirect(route('future'))->with('successMessage','Data save Successfully');
    }
}
}