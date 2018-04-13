# MWI Laravel Forms
MWI Laravel froms is an extension of [Laravel Collective Forms & HTML](https://laravelcollective.com/docs/master/html). It utilized components to build out bootsrap ready form inputs with [parsley](http://parsleyjs.org/) client side validation and select2 funcionality.

# Installation
```shell
$ composer require mwi/laravel-forms
```

## Service Provider
If you're on laravel 5.5 or later the service provider will be automatially loaded, if not, add to your `config/app.php` providers
```php
'providers' => [
    // ...
    MWI\LaravelForms\ServiceProvider::class,
    // ...
],
```

### HTML Service Provider
You will also need to add the Laravel Collection provider if you haven't already
```php
'providers' => [
    // ...
    Collective\Html\HtmlServiceProvider::class,
    // ...
],
```

## HTML Aliases
If you have't already you can add Laravel Collective HTML aliases
```php
'aliases' => [
    // ...
    'Form' => Collective\Html\FormFacade::class,
    'Html' => Collective\Html\HtmlFacade::class,
    // ...
],
```

## Publish
Last but not least be sure to publish
```shell
php artisan vendor:publish
```

# Usage
Here are the current tags available and how to best utilize them.

## Text Field
Only the first parameter is required.

Variations available are `mwitext`, `mwitextarea`, `mwidate`, `mwidaterange`, `mwiemail`, `mwipass` and `mwinumber`.
```php
Form::mwitext('field_name')
Form::mwitext('field_name_two', $default_value, ['class' => 'class-name'], 'Custom Label')

// No default value with attributes
Form::mwitext('name', null, ['class' => 'class-name'])
```

## Radio Options
```php
Form::mwiradio('Set Label', 'field_name', ['option_one', 'option_two'], 'option_one', ['class' => 'class-name'])
```

## Select Field
Variations available are `mwiselect` and `mwifilter`.
```php
Form::mwiselect('field_name', $options)
Form::mwiselect('field_name_two', ['this' => 'that', 'them' => 'they'], $default_value, ['class' => 'class-name'])

// No default value with attributes
Form::mwiselect('state', $options, null, ['class' => 'class-name'])
```

## Structure
All tags are wrapped in a `div.form-group` and contain a label, input and error message container. It's recommended to additionally wrap elements in rows/grids as follows.
```html
<div class="row">
    <div class="col-md-6">
        {{ Form::mwitext('field_name', $field_value, $attributes) }}
    </div>
    <div class="col-md-6">
        {{ Form::mwitext('field2_name', $field2_value, ['required', 'class' => 'text-red']) }}
    </div>
</div>
```

Additionaly the password field already contains col-6 grids, so...
```html
<div class="row">
    {{ Form::mwipass('password', ['required']) }}
</div>
```

Would produce...
```html
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('password', null, ['class' => 'control-label']) }}
            {{ Form::password('password', ['class' => 'form-control', 'id' => 'password', 'required']) }}
            <small class="help-block">{{ $errors->first('password') }}</small>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('password_confirmation', null, ['class' => 'control-label']) }}
            {{ Form::password('password_confirmation' . '_confirmation', ['class' => 'form-control']) }}
            <small class="help-block">{{ $errors->first('password_confirmation') }}</small>
        </div>
    </div>
</div>
```

