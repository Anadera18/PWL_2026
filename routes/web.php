<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
return 'Hello World';
});
Route::get('/world', function () {
return 'World';
});
Route::get('/welcome', function () {
return 'Welcome';
});
Route::get('/NIM&name', function () {
return '244107020223 - Andhika Daffa Athaaillah';
});
Route::get('/user/{name?}', function ($name='John') {
    return 'My name is Daffa '.$name;
});
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
return 'Post to '.$postId.' Comments to: '.$commentId;
});
Route::get('/articles/{id}', function ($id) {
    return "Article Page with ID " . $id;
});