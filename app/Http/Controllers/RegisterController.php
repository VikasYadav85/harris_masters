<?php

namespace App\Http\Controllers;
use App\models\RegisterModel;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function re()
    {
    return view('register');
    }
    public function wel()
    {
    return view('welcome');
    }


    public function store(Request $request)
     {
       
       $data=new RegisterModel;		
       $data->first_name=$request->first_name;
       $data->last_name=$request->last_name;
       $data->email=$request->email;
       $data->password=$request->password;
       $data->repeatpassword=$request->repeatpassword;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/img/', $filename);
            $student->image = $filename;
        }

        $student->save();
        return redirect()->back()->with('message','Student Image Upload Successfully');
    }  
//     public function save(Request $request)
//     {	
   
//        $data=new RegisterModel;		
//        $data->first_name=$request->first_name;
//        $data->last_name=$request->last_name;
//        $data->email=$request->email;
//        $data->password=$request->password;
//        $data->image=$request->image;
//        $data->repeatpassword=$request->repeatpassword;

//       $data->save(); 
      
//       return redirect(route('register'))->with('successMessage','Data save Successfully');
    
// }
public function li()
{
  $fd=RegisterModel::get();
  return view('register_list',compact('fd'));
}
}












