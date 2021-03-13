@extends('layouts.pages.edit', ['header' => 'true'])
@push('title', 'Management Accesses')

@push('content-body')
<form method="POST" action="{{ URL::current() }}/../../{{ $data->id }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
  {{ method_field('PATCH') }}
  {{ csrf_field() }}

  <input class="form-control" name="id" type="hidden" value="{{ $data->id }}">
  <input class="form-control" name="updated_by" type="hidden" value="{{ Auth::User()->id }}">
  @include($path . '.form', ['formMode' => 'edit'])
</form>
@endpush
