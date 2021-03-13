@extends('layouts.pages.create', ['page' => 'create'])
@push('title', 'Dummies')

@push('content-body')
<form method="POST" action="{{ URL::current() }}/../" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
  {{ csrf_field() }}

  <input class="form-control" name="created_by" type="hidden" value="{{ Auth::User()->id }}">
  @include($path . '.form', ['formMode' => 'create'])
</form>
@endpush
