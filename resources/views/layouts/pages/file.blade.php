@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endpush

@push('content')
<div class="row">
  <div class="col-xl-12">
    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b">
      <div class="card-header" style="">
        <div class="card-title">
          <h5 class="text-dark font-weight-bold"> Create </h5>
        </div>
        <div class="card-toolbar">
          <a href="{{ URL::current() }}/../#" class="btn btn-light-primary font-weight-bolder mr-2">
            <i class="ki ki-long-arrow-back icon-xs"></i> Back
          </a>
        </div>
      </div>

      <div class="card-body">
        @if ($errors->any())
        <ul class="alert alert-danger">
          @foreach ($errors->all() as $error)
          - {{ $error }} <br>
          @endforeach
        </ul>
        @endif
        @stack('content-body')
      </div>

    </div>
  </div>
</div>
@endpush

@push('js')
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@endpush
