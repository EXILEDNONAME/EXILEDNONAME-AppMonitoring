<?php

namespace App\Models\Backend\System;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Dummy extends Model {

  use LogsActivity;

  protected $table = 'dummies';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
