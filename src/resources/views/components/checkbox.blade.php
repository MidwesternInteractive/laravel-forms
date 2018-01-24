<div class="form-group">
    <fieldset>
        @if ($legend)<legend>{{ $legend }}</legend>@endif
        @foreach ($values as $key => $value)
            <div class="am-radio inline">
                {{ Form::checkbox($name, $value, $default, array_merge($attributes, ['id' => $name . '_' . $value])) }}
                <label for="{{ $name . '_' . $value }}">{{ ucfirst(str_replace(['[]', '_'], ['', ' '], $key)) }}</label>
            </div>
         @endforeach
    </fieldset>
    <small class="help-block">{{ $errors->first($name) }}</small>
</div>
