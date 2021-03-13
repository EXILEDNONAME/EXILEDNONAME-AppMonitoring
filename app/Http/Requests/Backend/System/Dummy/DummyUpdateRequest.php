<?php

namespace App\Http\Requests\Backend\System\Dummy;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DummyUpdateRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}
