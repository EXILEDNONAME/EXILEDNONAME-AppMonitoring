<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LocalizationController extends Controller {

  public function switch($language = '') {
      request()->session()->put('locale', $language);
      return redirect()->back();
  }
}
