<?php

namespace App\Http\Requests\Backend\System\Dummy;

use Illuminate\Foundation\Http\FormRequest;

class DummyStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'name' => 'unique:dummies',
    ];
  }
}
