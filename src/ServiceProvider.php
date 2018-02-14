<?php

namespace MWI\LaravelForms;

use App\Observers\UserObserver;
use App\User;
use Form;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/resources/' => resource_path(),
        ], 'resources');

        /**
         * Initiate Form Componenets
         */
        Form::component('mwicheckbox', 'components.checkbox', ['legend', 'name', 'values' => [], 'default' => null, 'attributes' => []]);
        Form::component('mwidate', 'components.date', ['name', 'value' => null, 'attributes' => [], 'label' => null]);
        Form::component('mwidaterange', 'components.daterange', ['name', 'value' => null, 'attributes' => [], 'label' => null]);
        Form::component('mwiemail', 'components.email', ['name', 'value' => null, 'attributes' => [], 'label' => null]);
        Form::component('mwifilter', 'components.filter', ['name', 'options' => [], 'value' => null, 'attributes' => [], 'label' => null]);
        Form::component('mwinumber', 'components.number', ['name', 'value' => null, 'attributes' => [], 'label' => null]);
        Form::component('mwipass', 'components.pass', ['name', 'attributes' => []]);
        Form::component('mwiradio', 'components.radio', ['legend', 'name', 'values' => [], 'default' => null, 'attributes' => [], 'use_key' => false]);
        Form::component('mwiselect', 'components.select', ['name', 'options' => [], 'value' => null, 'attributes' => [], 'label' => null]);
        Form::component('mwitext', 'components.text', ['name', 'value' => null, 'attributes' => [], 'label' => null]);
        Form::component('mwitextarea', 'components.textarea', ['name', 'value' => null, 'attributes' => [], 'label' => null]);
    }
}
