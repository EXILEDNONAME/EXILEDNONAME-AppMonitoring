<?php

namespace App\Http\Controllers\Backend\System;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Models\Backend\System\Timeline;

class ProfileController extends Controller {

  /**
  **************************************************
  * @return Authentication
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index() {
    $data = User::where('username', Auth::user()->username)->first();
    return redirect('/dashboard/profile/timeline');
  }

  public function update(Request $request) {
    $user = Auth::User()->id;

    if ($request->file('photo_profile')) {
      $photo = time().'_'. $request->file('photo_profile')->getClientOriginalName();
      $destination = base_path() . '/public/cache/photo_profile';
      $request->file('photo_profile')->move($destination, $photo);
      User::where('id', $user)->update([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'phone' => $request->get('phone'),
        'photo_profile' => $photo,
      ]);
    }
    else {
      User::where('id', $user)->update([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'phone' => $request->get('phone'),
      ]);
    }

    return back()->with('success', trans('notification.success.change-photo.edit'));

}

  /**
  **************************************************
  * @return Blank
  **************************************************
  **/

  public function blank() {
    $data = User::where('username', Auth::User()->username)->first();
    return redirect('/dashboard/profile/' . $data->username . '/timeline');
  }

  public function timeline() {
    $data = User::where('username', Auth::User()->username)->first();
    return view('pages.backend.system.profile.timeline', compact('data'));
  }

  public function personal_information() {
    $data = User::where('username', Auth::User()->username)->first();
    return view('pages.backend.system.profile.personal-information', compact('data'));
  }

  public function password() {
    $data = User::where('username', Auth::User()->username)->first();
    return view('pages.backend.system.profile.password', compact('data'));
  }

  public function change_password(Request $request){

    if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
      return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
    }

    if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
      return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
    }

    if(!(strcmp($request->get('new-password'), $request->get('new-password-confirm'))) == 0){
      return redirect()->back()->with("error","New Password should be same as your confirmed password. Please retype new password.");
    }

    $user = Auth::user();
    $user->password = bcrypt($request->get('new-password'));
    $user->save();

    return redirect()->back()->with("success","Password changed successfully !");

  }

}
