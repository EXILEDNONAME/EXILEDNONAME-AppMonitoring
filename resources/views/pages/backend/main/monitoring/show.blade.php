@extends('layouts.pages.show', ['page' => 'show'])
@push('title', 'Monitorings')

@push('content-body')
<div class="table-responsive">
  <table width="100%" class="table table-stiped table-bordered">
    <tr>
      <td class="align-middle font-weight-bold"> Name </td>
      <td class="align-middle"> {{ $data->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> IP Address </td>
      <td class="align-middle"> {{ $data->ip_address }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> MAC Address </td>
      <td class="align-middle"> {{ $data->mac_address }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Port </td>
      <td class="align-middle"> {{ $data->port }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Description </td>
      <td class="align-middle"> {{ $data->description }} </td>
    </tr>
    @include('includes.datatable.page-show.main')
  </table>
</div>
<hr>
@endpush
