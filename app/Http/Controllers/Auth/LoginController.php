<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

  use AuthenticatesUsers;
  protected $redirectTo = RouteServiceProvider::HOME;

  public function __construct() {
    $this->middleware('guest')->except('logout');
  }

  protected function credentials(Request $request) {
    if(is_numeric($request->get('email'))) {
      return ['phone'=>$request->get('email'),'password'=>$request->get('password')];
    }

    else if (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
      return ['email' => $request->get('email'), 'password'=>$request->get('password')];
    }

    return ['username' => $request->get('email'), 'password'=>$request->get('password')];
  }

}
