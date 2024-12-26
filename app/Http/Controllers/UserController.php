<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function insertData(Request $request)
    {
       
            $query=DB::table('students_info')->insert([
                'Id'=>$request->userid,
                'Name'=>$request->username,
                'Section'=>$request->usersection,
                'Email'=>$request->useremail,
                'CGPA'=>$request->usercgpa,
                'Department'=>$request->userdepartment,
            ]);
            if($query)
            {
                return redirect()->route('all');
            }
        
     
    }
    public function getData(){
       
        $query=DB::table('students_info')->paginate(10);
        return view('allUsers',['stack'=>$query]);
  
    }
    public function updatePage(string $id)
    {
        $query=DB::table('students_info')->where('Id',$id)->first();
        return view('/update',['stack2'=>$query]);
    }

    public function updateUser(Request $request,string $id1)
    {
        $query=DB::table('students_info')
        ->where('Id',$id1)
        ->update([
            'Id'=>$request->userid,
            'Name'=>$request->username,
            'Section'=>$request->usersection,
            'Email'=>$request->useremail,
            'CGPA'=>$request->usercgpa,
            'Department'=>$request->userdepartment,
        ]);
        return redirect()->route('all');
    }

    public function deleteUser(string $id)
    {
        $query=DB::table('students_info')
        ->where('Id',$id)
        ->delete();

        return redirect('all');
    }

    public function make_registration(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
            'remember-me'=>'required',
        ]
    
    );
    $query=DB::table('users')->insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'password' => Hash::make($request->password),
    ]);
    if($query)
    {
        return redirect()->route('login-page');
    }
    }

    public function make_login(Request $req)
    {
        $credentials = $req->validate([
           'email'=>'required|email', 
           'password'=>'required',
        ]);
        if(Auth::attempt($credentials))
        {
            return redirect()->route('welcome-page');
        }
        else return redirect()->route('login-page');
    }

}
