@extends('layouts.pages.index', ['header' => 'true'])
@push('title', 'Management Users')

@push('content-head')
<th> Access </th>
<th> Name </th>
<th> Email </th>
@endpush

@push('content-body')
{ data: 'accesses.name' },
{ data: 'name' },
{ data: 'email' },
@endpush
