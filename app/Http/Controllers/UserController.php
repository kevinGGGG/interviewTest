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
    	if(Auth::attempt(['account' => $request->input('account'),'password' => $request->input('password')]))
    		return redirect('info');//attemp驗證之密碼為bcrypt後之結果
    	else{
    		return redirect('/login');
        }

    }
    public function getInfo(){
    	$user = Auth::user();
        $advantages = $user->advantages->all();
        
    	return view('myinfo',['user' => $user,'advantages' => $advantages]);
    }
    public function getLogout(){
    	Auth::logout();
    	return redirect('login');
    }

}