<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class LoginController extends Controller
{
	// public function AuthLogin(){
 //        $admin_id = Session::get('admin_id');
 //        if($admin_id){
 //            return Redirect::to('dashboard');
 //        }else{
 //            return Redirect::to('admin')->send();
 //        }
 //    }
    public function index(){
  
    	return view('user.login');
    }
    public function login_customer(){
    	$login_email = $request->login_email;
    	$login_password = $request->login_password;
    	$result=DB::table('tbl_login')->where('login_email',$login_email)->where('login_password',$login_password)->first();
    if($result){
        Session::put('login_email',$result->login_email);
         Session::put('login_id',$result->login_id);
         return Redirect::to('trang-chu');
    } else{
        Session::put('message','Sai tài khoản hoặc mật khẩu vui lòng kiểm tra lại');
        return Redirect::to('/login');
    } 
    }
}
