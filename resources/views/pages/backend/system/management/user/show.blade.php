@extends('layouts.pages.show', ['header' => 'true'])
@push('title', 'Management Users')

@push('content-body')
<div class="table-responsive">
  <table width="100%" class="table table-stiped table-bordered">
    <tr>
      <td class="align-middle font-weight-bold"> Username </td>
      <td class="align-middle"> {{ $data->username }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Name </td>
      <td class="align-middle"> {{ $data->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Email </td>
      <td class="align-middle"> {{ $data->email }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Phone </td>
      <td class="align-middle"> {{ $data->phone }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Address 1 </td>
      <td class="align-middle"> {{ $data->address_1 }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Address 2 </td>
      <td class="align-middle"> {{ $data->address_2 }} </td>
    </tr>
    @include('includes.datatable.page-show.main')
  </table>
</div>
<hr>
@endpush
