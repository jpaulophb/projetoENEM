<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return "Pagina WEB";
});

Route::get('users/{id}', function ($id) {
    return "Pagina 3";
});
