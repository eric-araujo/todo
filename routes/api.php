<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("tasks", "TasksController@index");
Route::get("tasks/{task}", "TasksController@show");
Route::post("tasks", "TasksController@store");
