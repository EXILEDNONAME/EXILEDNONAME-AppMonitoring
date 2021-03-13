@extends('layouts.app')

@push('content')
<div class="card-body">
  @stack('content-body')
</div>
@endpush
