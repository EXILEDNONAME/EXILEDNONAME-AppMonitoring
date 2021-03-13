<?php

use App\Access;
use Spatie\Activitylog\Models\Activity;

function activities($model) {
  $items = $activity = Activity::where('subject_type', $model)->orderBy('created_at', 'desc')->get();
  return $items;
}

function access($name) {
  if ( Auth::User()->accesses->name == $name ) {
    $items = Access::where('name', Auth::User()->accesses->name )->first();
    return $items;
  }
}

function chart_created($model) {
  $items = $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-01%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-02%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-03%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-04%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-05%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-06%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-07%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-08%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-09%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-10%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-11%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', \Carbon\Carbon::now()->format('Y') . '-12%')->count();

  return $items;
}

function chart_updated($model) {
  $items = $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-01%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-02%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-03%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-04%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-05%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-06%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-07%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-08%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-09%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-10%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-11%')->count(); $items .= ', ';
  $items .= $model::select(\DB::raw("COUNT(*) as count"))->where('updated_at', 'like', \Carbon\Carbon::now()->format('Y') . '-12%')->count();

  return $items;
}
