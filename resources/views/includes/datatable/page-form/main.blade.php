<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Active </label>
  <div class="col-lg-9">
    {{ Form::select('active', ['1' => 'Yes', '2' => 'No'], (isset($data->active) ? $data->active : ''), ['class' => $errors->has('active') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) }}
    @error('active') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>
