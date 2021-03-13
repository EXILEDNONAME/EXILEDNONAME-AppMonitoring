@extends('layouts.app')

@push('content')
<div class="row">
  <div class="col-xl-12">
    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b card-sticky" id="kt_page_sticky_card">
      <div class="card-header" style="">
        <div class="card-title">
          <h5 class="text-dark font-weight-bold"> {{ trans('default.title.page-create') }} </h5>
        </div>
        <div class="card-toolbar">
          <a href="{{ URL::current() }}/../#" class="btn btn-light-primary font-weight-bolder mr-2">
            <i class="ki ki-long-arrow-back icon-xs"></i> {{ trans('default.button.back') }} 
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
<script src="/assets/backend/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js"></script>
@endpush
