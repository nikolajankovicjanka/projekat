<?php

Route::get('/', function () {
    return view ('welcome');
});
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
/*
      GET /projects (index)
      GET /projects (create)
      GET /projects (show)
      GET /projects (store)
      GET /projects/1/edit (edit)
      GET /projects/1 (update)
      GET /projects/1 (destroy)

*/
Route::resource('projects', 'ProjectsController');
Route::get('/projects', 'SliderController@index');
Route::get('/projasaect/creasdasdasdate', 'ProjectsController@create')->name('kreiraj');
Route::get('/projects/{project}', 'ProjectsController@show')->name('prikazi');
Route::post('/projects', 'ProjectsController@store')->name('dodaj');
Route::get('/projects/{project}/edit', 'ProjectsController@edit')->name('izmjeni');
Route::patch('/projects/{project}'. 'ProjectsController@update');
Route::delete('/projects/{project}'. 'ProjectsController@destroy')->name('obrisi');
Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');
Route::get('/learn', 'PagesController@learn');
Route::get('/projects', 'PagesController@projects');
Route::get('/info', 'PagesController@info');
