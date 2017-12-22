<div class="form-group">
    {{ Form::label($label ?: $name, null, ['class' => 'control-label']) }}
    {{ Form::textarea($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    <small class="help-block">{{ $errors->first($name) }}</small>
</div>
