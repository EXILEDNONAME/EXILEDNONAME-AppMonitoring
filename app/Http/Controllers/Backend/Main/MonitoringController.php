<?php

namespace App\Http\Controllers\Backend\Main;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;
use App\Http\Requests\Backend\Main\Monitoring\MonitoringStoreRequest;
use App\Http\Requests\Backend\Main\Monitoring\MonitoringUpdateRequest;

class MonitoringController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard/monitorings';
    $this->path = 'pages.backend.main.monitoring';
    $this->model = 'App\Models\Backend\Main\Monitoring';
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index(Request $request) {

    $model = $this->model;
    $data = $this->model::select('*');

    if (request('date_start') && request('date_end')) { $data = $this->model::orderby('date_start', 'desc')->whereBetween('date_start', [request('date_start'), request('date_end')])->select('*'); }
    else { $data = $this->model::select('*'); }

    if(request()->ajax()) {
      return DataTables::eloquent($data)
      ->addColumn('action', 'includes.datatable.action')
      ->addColumn('checkbox', 'includes.datatable.checkbox')
      ->addColumn('status_device', 'includes.datatable.status-device')
      ->editColumn('date_start', function($order) { return \Carbon\Carbon::parse($order->date_start)->format('d F Y, H:i'); })
      ->editColumn('date_end', function($order) { return \Carbon\Carbon::parse($order->date_end)->format('d F Y, H:i'); })
      ->rawColumns(['action', 'checkbox', 'status_device'])
      ->addIndexColumn()
      ->make(true);
    }

    return view($this->path . '.index', compact('model'));
  }

  public function show($id) {
    $data = $this->model::findOrFail($id);
    return view($this->path . '.show', compact('data'));
  }

  public function create() {
    $path = $this->path;
    return view($this->path . '.create', compact('path'));
  }

  public function edit($id) {
    $path = $this->path;
    $data = $this->model::findOrFail($id);
    return view($this->path . '.edit', compact('path', 'data'));
  }

  public function store(MonitoringStoreRequest $request) {
    $store = $request->all();
    $this->model::create($store);
    return redirect($this->url)->with('success', trans('default.notification.success.item-created'));
  }

  public function update(MonitoringUpdateRequest $request, $id) {
    $data = $this->model::findOrFail($id);
    $update = $request->all();
    $data->update($update);
    return redirect($this->url)->with('success', trans('default.notification.success.item-updated'));
  }

  public function destroy($id) {
    $this->model::destroy($id);
    return redirect($this->url)->with('success', trans('default.notification.success.item-deleted'));
  }

  public function enable($id) {
    $data = $this->model::where('id', $id)->update([ 'active' => 1 ]);
    return Response::json($data);
  }

  public function disable($id) {
    $data = $this->model::where('id', $id)->update([ 'active' => 2 ]);
    return Response::json($data);
  }

  public function status_done($id) {
    $data = $this->model::where('id', $id)->update([ 'status' => 1 ]);
    return Response::json($data);
  }

  public function status_pending($id) {
    $data = $this->model::where('id', $id)->update([ 'status' => 2 ]);
    return Response::json($data);
  }

  public function delete($id) {
    $this->model::destroy($id);
    $data = $this->model::where('id',$id)->delete();
    return Response::json($data);
  }

  public function deleteall(Request $request) {
    $exilednoname = $request->EXILEDNONAME;
    $this->model::whereIn('id',explode(",",$exilednoname))->delete();
    return Response::json($exilednoname);
  }

}
