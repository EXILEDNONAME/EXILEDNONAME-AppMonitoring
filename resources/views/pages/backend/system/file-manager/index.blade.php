@extends('layouts.pages.dashboard')
@push('title', 'File Manager')

@push('head')
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('/packages/barryvdh/elfinder/css/elfinder.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/packages/barryvdh/elfinder/css/theme.css') }}">
@endpush

@push('content-body')
<div id="elfinder"></div>
@endpush

@push('js')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="{{ asset('/packages/barryvdh/elfinder/js/elfinder.min.js') }}"></script>
<script type="text/javascript" charset="utf-8">
$().ready(function() {
  $('#elfinder').elfinder({
    customData: {
      _token: '{{ csrf_token() }}'
    },
    url : '{{ route("elfinder.connector") }}',
    soundPath: '{{ asset('/packages/barryvdh/elfinder/sounds') }}'
  });
});
</script>
@endpush
