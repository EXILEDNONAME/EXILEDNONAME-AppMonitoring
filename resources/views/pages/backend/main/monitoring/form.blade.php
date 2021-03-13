<div class="kt-section__body">

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Name </label>
    <div class="col-lg-9">
      {!! Form::text('name', (isset($data->name) ? $data->name : ''), ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> IP Address </label>
    <div class="col-lg-9">
      {!! Form::text('ip_address', (isset($data->ip_address) ? $data->ip_address : ''), ['class' => $errors->has('ip_address') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('ip_address') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> MAC Address </label>
    <div class="col-lg-9">
      {!! Form::text('mac_address', (isset($data->mac_address) ? $data->mac_address : ''), ['class' => $errors->has('mac_address') ? 'form-control is-invalid' : 'form-control']) !!}
      @error('mac_address') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Port </label>
    <div class="col-lg-9">
      {!! Form::number('port', (isset($data->port) ? $data->port : '80'), ['class' => $errors->has('port') ? 'form-control is-invalid' : 'form-control']) !!}
      @error('port') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Description </label>
    <div class="col-lg-9">
      {!! Form::textarea('description', (isset($data->description) ? $data->description : ''), ['class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control', 'rows'=>'3']) !!}
      @error('description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  @include('includes.datatable.page-form.main')

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> </label>
    <div class="col-lg-9">
      <input class="btn btn-primary pull-right" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </div>
  </div>

</div>
