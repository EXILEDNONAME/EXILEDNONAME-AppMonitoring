@extends('layouts.pages.index', ['page' => 'index', 'chart' => 'true'])
@push('title', 'Monitorings')

@push('content-head')
<th> Status </th>
<th> Name </th>
<th> IP Address </th>
<th> MAC Address </th>
<th> Port </th>
@endpush

@push('content-body')
{ data: 'status_device', 'width' : '1' },
{ data: 'name' },
{ data: 'ip_address' },
{ data: 'mac_address' },
{ data: 'port' },
@endpush
