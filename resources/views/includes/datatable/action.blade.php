<div class="dropdown dropdown-inline">
	<button type="button" class="btn btn-hover-light-info btn-icon btn-xs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<i class="ki ki-bold-more-ver"></i>
	</button>
	<div class="dropdown-menu dropdown-menu-xs" style="">
		<ul class="navi navi-hover py-5">
			<li class="navi-item">
				<a href="{{ URL::current() }}/{{ $id }}" class="navi-link">
					<span class="navi-icon">
						<i class="flaticon2-expand"></i>
					</span>
					<span class="navi-text">View</span>
				</a>
			</li>
			<li class="navi-item">
				<a href="{{ URL::current() }}/{{ $id }}/edit" class="navi-link">
					<span class="navi-icon">
						<i class="flaticon2-contract"></i>
					</span>
					<span class="navi-text">Edit</span>
				</a>
			</li>
			<li class="navi-item">
				<a href="javascript:void(0);" class="navi-link" id="delete" data-id="{{ $id }}">
					<span class="navi-icon">
						<i class="flaticon2-trash"></i>
					</span>
					<span class="navi-text delete"> Delete</span>
				</a>
			</li>
		</ul>
	</div>
</div>
