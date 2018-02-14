<div class="form-group">
    <fieldset>
    	@if ($legend)<legend>{{ $legend }}</legend>@endif
        @foreach ($values as $key => $value)
            <div class="am-radio inline">
                {{ Form::radio($name, $use_key ? $key : $value, $default, array_merge($attributes, ['id' => $name . '_' . $key])) }}
                <label for="{{ $name . '_' . $key }}">{{ ucfirst(str_replace(['[]', '_'], ['', ' '], $value)) }}</label>
            </div>
    	 @endforeach
    </fieldset>
    <small class="help-block">{{ $errors->first($name) }}</small>
</div>
