<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class PassportController extends Controller
{

	// register 
	public function register(Request $request){
		
		$this->validate($request, [
			'name'=> 'required|min:3',
			'email'=>'required|email|unique:users',
		     'password'=> 'required|min:6'
		 ]);

		$user = User::create([

			'name'=> $request->name,
			'email'=> $request->email,
		    'password'=>  bcrypt($request->password)
		]);

		// Creating a token without scopes...
		$accesToken = $user->createToken('AuthToken')->accessToken;

	 return response(['user'=>$user, 'access_token'=> $accesToken]);
    
	}


	// login 
	public function login(Request $request)
	{
		$login = $request->validate([
			'email'=> 'required|string',
			'password'=>'required|string'
		]);

		if(!Auth::attempt($login)){
			return response(['message'=>'invalid login credentials']);
		}

		// Creating a token without scopes...
		$accesToken = Auth::user()->createToken('AuthToken')->accessToken;

	 return response(['user'=>Auth::user(), 'access_token'=> $accesToken]);
	}

	public function details(){

		return response(['user'=> Auth::user()]);
	}
}
