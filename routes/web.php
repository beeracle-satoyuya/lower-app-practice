<?php

use Illuminate\Support\Facades\Route;
use livewire\volt\volt;

Route::get('/', function () {
    return view('welcome');
});
volt::route('/lower/{word}', 'lower');
