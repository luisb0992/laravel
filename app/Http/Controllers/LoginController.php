<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
 			return view('dashboard');
	 	}

	 public function login(Request $request)
	 {
	 		/*----------- LOGIN MANUAL , MODIFICABLE ----------*/
    	$this->validate($request, [
    		'user' =>'required',
    		'password' => 'required',
    	]);

      if (Auth::attempt($request->only(['user','password']))){
      	//return redirect()->intended('dashboard');
      	return redirect()->route("dashboard");
      }else{
      	return redirect()->route('login')->withErrors('¡Error!, Usuario o clave incorrecta');
      }
	 }

	 public function logout()
	 {
	 		/*---- funcion de salir/logout/cerrar sesion --*/
	 		Auth::logout();
	 		return view('login');
	 }

}
