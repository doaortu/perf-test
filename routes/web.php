<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListGroupsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('todo-list-groups', [TodoListGroupsController::class, 'index'])->name('todo-list-groups.index');
Route::get('todo-list-groups/{group}', [TodoListGroupsController::class, 'show'])->name('todo-list-groups.show');
Route::delete('todo-list-groups/{group}', [TodoListGroupsController::class, 'delete'])->name('todo-list-groups.destroy');
