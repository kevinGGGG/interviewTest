<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;
class UserController extends Controller
{
    public function getLogin(){
    	return view("login");
    }
    public function postAuthenticate(Request $request){
    	if(Auth::attempt(['account' => $request->input('account'),'password' => $request->input('password')]))//驗證帳號與密碼
    		return redirect('info');//attemp驗證之密碼為bcrypt後之結果
    	else{
    		return redirect('/login');//登入失敗則跳回login畫面
        }

    }
    public function getInfo(){
    	$user = Auth::user();
        $advantages = $user->advantages->all();//user一對多至advantages
        
    	return view('myinfo',['user' => $user,'advantages' => $advantages]);
    }
    public function getLogout(){
    	Auth::logout();//登出使用者帳號
    	return redirect('login');
    }

}