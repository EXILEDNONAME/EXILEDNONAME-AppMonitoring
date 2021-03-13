@extends('layouts.pages.index', ['page' => 'index', 'content' => 'withStatus', 'chart' => 'true'])
@push('title', 'Dummies')

@push('filter-header')
<div class="col-md-4 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <label class="mr-3 mb-0 d-none d-md-block">Filter </label>
    <div class="input-daterange input-group" id="ex_datepicker_start">
      <input type="text" id="date_start" class="form-control" name="date_start">
      <div class="input-group-append">
        <span class="input-group-text">
          <i class="la la-ellipsis-h"></i>
        </span>
      </div>
      <input type="text" id="date_end" class="form-control" name="date_end">
    </div>
  </div>
</div>
@endpush

@push('filter-function')
d.date_start = $('#date_start').val();
d.date_end = $('#date_end').val();
@endpush

@push('filter-data')
$('#date_start').change(function () { table.draw(); });
$('#date_end').change(function () { table.draw(); });
@endpush

@push('content-head')
<th> Date Start </th>
<th> Date End </th>
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'date_start' },
{ data: 'date_end' },
{ data: 'name' },
{ data: 'description' },
@endpush
