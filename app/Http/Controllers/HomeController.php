<?php

namespace App\Http\Controllers;
use App\models\ContactModel;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
         public function new()
        {
        return view('home');
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
              return redirect(route('home'))->with('successMessage','Data save Successfully');
            }
        }
//         public function asset_class_list_ajax(Request $request)
//         {
//           if ($request->ajax()) { 
// 		        $where="";	
//             if(count($request->all()) < 1)
		    	  
		
//             if($request->Name!='')
//             {
//              $where .= " AND tbl_contact.Name = '".$request->Name."'";
//             }  if($request->Email!='')
//             {
//              $where .= " AND tbl_contact.Email = '".$request->Email."'";
//             }
        
//             if($request->mobile!='')
//             {
//              $where .= " AND tbl_contact.mobile = '".$request->mobile."'";
//             }  if($request->Subject!='')
//             {
//              $where .= " AND tbl_contact.Subject = '".$request->Subject."'";
//             }

//         $get_data = DB::select("SELECT tbl_contact.* FROM tbl_contact  
//                 WHERE tbl_contact.id IS NOT NULL ".$where."  ORDER BY id DESC");
//         $array_data=array();
//         $row=array();
//         foreach($array_data as $key=>$row)
//         $array_data[$key]['Name']=$row->Name;
//         $array_data[$key]['Email']=($row->Email);
//         $array_data[$key]['mobile']=($row->mobile)  ;
//         $array_data[$key]['Subject']=$row->Subject;
//         $array_data[$key]['id']=$row->id;
//        } 
//       }
//     }
// function del($id)
// {
//   $data=ContactModel::find($id);
//   $data->delete();
//   return redirect('list');
// }
// public function edit($id)
// {
//     $fd= ContactModel::findOrFail($id);
// //dd($con);
//     return view('edit_list',compact('fd'));
// }

// public function view($id)
// { 
    
//     $fd=DB::table('tbl_contact')
//     ->select('tbl_contact.*')
//     ->where('tbl_contact.id', '=', $id)
//     ->get()->first(); 
// return view('list',compact('fd'));
    
// }

// public function get_list()
//     {
//       $ak=ContactModel::get();

//       $count = count($ak);

//       if($count > 0)
//       {  
//       return array('home'=>$ak, 'API_Status' => 1, 'Message' => "List of learn details");
//              } 
//              else
//               {             
//           return array('contact'=>[], 'API_Status' => 0, 'Message' => "No Record Found!");
//             }
//           }
//           public function post_list(Request $request)
//                       {
            
//                           $data=new ContactModel;  
//                           $data->Name = $request->Name;
//                           $data->Email= $request->Email;
//                           $data->mobile= $request->mobile;
//                           $data->Subject = $request->Subject;
                       
//                           $data->save(); 
//                          if($data !='')
//                     { 
//                     return array('API_Status' => 1, 'Message' => "Data Inserted."); 
//                     }
//                      else 
//                     { 
//                     return array('contact'=>[], 'API_Status' => 0, 'Message' => "Data Not inserted."); 
//                     } 
              }

