<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
	public function register(Request $request){
		$this->validate($request, [
       			'login'		=> 'required|unique:users|max:255',
			'email'		=> 'required|email',
			'name'		=> 'required|max:255',
			'password'	=> 'required',
			'equipe'	=> 'required|max:255',
			//'organisation'	=> 'required|max:255'
		]);
		$user = new User();
		$user->login = $request->input('login');
		$user->name = $request->input('name');
		$user->password = bcrypt($request->input('password'));
		$user->email = $request->input('email');
		$user->organisation = 'UTT'; // $request->input('organisation');
		$user->equipe = $request->input('equipe');
		$user->save();
		return response()->json(['status'=>'success'], 200);
	}

	public function login(Request $request){
		$this->validate($request, [
       			'login'		=> 'required|max:255',
			'password'	=> 'required',
		]);
		$login = $request->input('login');
		$password = $request->input('password');
		if (Auth::attempt(['login' => $login, 'password' => $password])) {
			return response()->json(['status'=>'success'], 200);
		} else {
			return response()->json(['status'=>'invalid'], 401);
		}
	}
}
