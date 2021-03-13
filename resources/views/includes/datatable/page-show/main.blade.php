<tr>
  <td class="align-middle font-weight-bold"> Active </td>
  <td class="align-middle">
    @if ( $data->active == 1 ) Yes
    @else No
    @endif
  </td>
</tr>

<tr>
  <td class="align-middle font-weight-bold"> Status </td>
  <td class="align-middle">
    @if ( $data->status == 1 ) OK
    @else Pending
    @endif
  </td>
</tr>

<tr>
  <td class="align-middle font-weight-bold"> Created At </td>
  <td class="align-middle"> {{ \Carbon\Carbon::parse($data->created_at)->format('d F Y, H:i') }} </td>
</tr>

<tr>
  <td class="align-middle font-weight-bold"> Last Updated At </td>
  <td class="align-middle"> {{ \Carbon\Carbon::parse($data->updated_at)->format('d F Y, H:i') }} </td>
</tr>

<tr>
  <td class="align-middle font-weight-bold"> QR </td>
  <td class="align-middle">
    <a href="#" data-toggle="modal" data-target="#qrcode_modal">
      {!! QrCode::size(50)->generate('URL::full()'); !!}
    </a>
  </td>
</tr>
