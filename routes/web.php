<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\PostCrud;

Route::get('/', PostCrud::class);