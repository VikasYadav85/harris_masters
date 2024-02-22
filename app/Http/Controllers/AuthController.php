<?php
  
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('registration');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        

        $user = User::where([ 
            'email'  => $request->email,
            'password'  => md5($request->password)
        ])->first(); 

        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);
   
       // $credentials = $request->only('email', 'password');
       if ($user) { 
        Auth::login($user); 

        return redirect()->intended('dashboard')->withSuccess('User Signed in');
    }
        // if (Auth::attempt($credentials)) {
			     
        //     return redirect()->intended('dashboard')->withSuccess('You have Successfully loggedin');
        // }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'password' => 'The provided credentials do not match our records.',
        ])->onlyInput('email','password');

    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'qualification' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:2',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("registration")->withSuccess('Great! You have Successfully loggedin');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'qualification' => $data['qualification'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'password' => md5($data['password']),
        ]);
    
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }



//list view edit delete//
    public function dex()
    {
        $fd=User::get();
        return view('registration_list',compact('fd'));
    }  
   
function del($id)
{
  $data=User::find($id);
  $data->delete();
  return redirect('registration_list');
}
public function edit($id)
{
    $fd=User::findOrFail($id);
// dd($con);
    return view('registration',compact('fd'));
}

public function view($id)
{ 
    
    $fd=DB::table('users')
    ->select('users.*')
    ->where('users.id', '=', $id)
    ->get()->first(); 
return view('registration_view',compact('fd'));
    
}
//list//





//api  view update delete insert//
public function get_list()
{
    $ak=User::get();

    $count = count($ak);
    if($count > 0)
{  
    return array('registration'=>$ak, 'API_Status' => 1, 'Message' => "List of learn details");
} 
    else
{             
     return array('registration'=>[], 'API_Status' => 0, 'Message' => "No Record Found!");
}
}
     public function post_list(Request $request)
{
     $data=new User;  
     if($request->updated_id){
       $data =User::find($request->updated_id); 
       $data->name=$request->name;
       $data->email=$request->email;
       $data->gender=$request->gender;
       $data->qualification=$request->qualification;
       $data->phone=$request->phone;
       $data->address=$request->address;
       $data->password=$request->password;
       $data->save(); 
      if($data !=''){ 
      return array('API_Status' => 1, 'Message' => "Record has been Updated"); 
} 
         else
{ 
     return array('Result'=>[], 'API_Status' => 0, 'Message' => "Record Not updated!"); 
}  
}
     else
{
    $data->name=$request->name;
    $data->email=$request->email;
    $data->gender=$request->gender;
    $data->qualification=$request->qualification;
    $data->phone=$request->phone;
    $data->address=$request->address;
    $data->password=$request->password;
     $data->save(); 
      if($data !='')
    { 
       return array('API_Status' => 1, 'Message' => "Data Inserted."); 
    }
       else 
    { 
       return array('registration'=>[], 'API_Status' => 0, 'Message' => "Data Not inserted."); 
    } 
    }
    }
    function delex($id)
    {
       
      $data=User::find($id);
      $data->delete();
      return redirect('registration');
    }

    
//          public function edit($id)
//          {
//          $final_data=array();
//          $get_data = DB::table('users')->select
//          (
//          'users.id',
//          'users.name',
//          'users.email',
//          'users.gender',
//          'users.qualification',
//          'users.phone',
//          'users.address',
//          'users.password',
//          )
//          ->where('users.id',$id) ->get();
//          foreach($get_data as $key=> $driver_id)
//    { 
//          $final_data[$key]['id']= $driver_id->id;
//          $final_data[$key]['name']= $driver_id->name;
//          $final_data[$key]['email']= $driver_id->email;
//          $final_data[$key]['gender']= $driver_id->gender;
//          $final_data[$key]['qualification']= $driver_id->qualification;
//          $final_data[$key]['phone']= $driver_id->phone;
//          $final_data[$key]['address']= $driver_id->address;
//          $final_data[$key]['password']= $driver_id->password;
//    } 
//          if(!empty($final_data))
//    { 
//         return array('registration'=>$final_data, 'API_Status' => 1, 'Message' => "Register Edit List"); 
//    }
//        else 
//    { 
//         return array('registration'=>[], 'API_Status' => 0, 'Message' => "No Record Found!");
//    }
//    } 
 
// }
}