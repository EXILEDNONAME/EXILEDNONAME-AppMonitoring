<?php

namespace App\Http\Controllers\Backend\System;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\TestEvent;

use App\User;

class DashboardController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard';
    $this->path = 'pages.backend.system.dashboard';
    $this->model = 'App\User';
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index(Request $request) {
    $data_chart = $this->model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-01%')->count(); $data_chart .= ', ';
    $data_chart .= $this->model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-02%')->count(); $data_chart .= ', ';
    $data_chart .= $this->model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-03%')->count(); $data_chart .= ', ';
    $data_chart .= $this->model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-04%')->count(); $data_chart .= ', ';
    $data_chart .= $this->model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-05%')->count(); $data_chart .= ', ';
    $data_chart .= $this->model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-06%')->count(); $data_chart .= ', ';
    $data_chart .= $this->model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-07%')->count(); $data_chart .= ', ';
    $data_chart .= $this->model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-08%')->count(); $data_chart .= ', ';
    $data_chart .= $this->model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-09%')->count(); $data_chart .= ', ';
    $data_chart .= $this->model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-10%')->count(); $data_chart .= ', ';
    $data_chart .= $this->model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-11%')->count(); $data_chart .= ', ';
    $data_chart .= $this->model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-12%')->count();
    return view($this->path . '.index', compact('data_chart'));

  }

  /**
  **************************************************
  * @return Logout
  **************************************************
  **/

  public function logout() {
    Auth::logout();
    return redirect('login');
  }

}
