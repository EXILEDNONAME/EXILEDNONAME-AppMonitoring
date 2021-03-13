@if ($active == 1) <a href="javascript:void(0);" id="disable" data-toggle="tooltip" data-original-title="Disable" data-id="{{ $id }}"><span class="label label-info label-inline"> Yes </span></a>
@else <a href="javascript:void(0);" id="enable" data-toggle="tooltip" data-original-title="Enable" data-id="{{ $id }}"><span class="label label-dark label-inline"> No </span></a>
@endif
