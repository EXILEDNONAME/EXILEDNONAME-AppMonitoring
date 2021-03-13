<?php

namespace App\Http\Requests\Backend\Main\Monitoring;

use Illuminate\Foundation\Http\FormRequest;

class MonitoringStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'name' => 'unique:monitorings',
    ];
  }
}
