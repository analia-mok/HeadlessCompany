<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('/resources', 'ResourcesController@index');

Route::get('/white-papers', 'WhitePapersController@index');
Route::get('/white-paper/{slug}', 'WhitePapersController@show');

Route::get('/case-studies', 'CaseStudiesController@index');
Route::get('/case-study/{slug}', 'CaseStudiesController@show');

Route::get('/ebooks', 'EbooksController@index');
Route::get('/ebook/{slug}', 'EbooksController@show');

Route::get('/careers', 'CareersController@index');
Route::get('/career/{slug}', 'CareersController@show');

Route::get('/blog', 'BlogPostController@index');
Route::get('/blog/{slug}', 'BlogPostController@show');
