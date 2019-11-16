<?php

use App\Http\Controllers\Backend\DashboardController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


/**
*  Route Admin Events
*/
Route::get('event', 'Page\EventsController@index')->name('events');
Route::get('event/{id}/show', 'Page\EventsController@show')->name('event.show');
Route::get('event/{id}/edit', 'Page\EventsController@edit')->name('event.edit');
Route::put('event/{id}', 'Page\EventsController@update')->name('event.update');
Route::get('event/{id}/destroy', 'Page\EventsController@destroy')->name('event.destroy');


/**
 *  Route Admin Songs
 */
Route::get('song', 'Page\SongsController@index')->name('song');
Route::get('song/{id}/show', 'Page\SongsController@show')->name('song.show');
Route::get('song/{id}/edit', 'Page\SongsController@edit')->name('song.edit');
Route::put('song/{id}', 'Page\SongsController@update')->name('song.update');
Route::get('song/{id}/destroy', 'Page\SongsController@destroy')->name('song.destroy');

/**
 *  Route Admin Style
 */
Route::get('style', 'Page\StylesController@index')->name('style');
Route::get('style/{id}/show', 'Page\StylesController@show')->name('style.show');
Route::get('style/{id}/edit', 'Page\StylesController@edit')->name('style.edit');
Route::put('style/{id}', 'Page\StylesController@update')->name('style.update');
Route::get('style/{id}/destroy', 'Page\StylesController@destroy')->name('style.destroy');
/**
 *  Route Admin text
 */
Route::get('text', 'Page\TextsController@index')->name('text');
Route::get('text/{id}/show', 'Page\TextsController@show')->name('text.show');
Route::get('text/{id}/edit', 'Page\TextsController@edit')->name('text.edit');
Route::put('text/{id}', 'Page\TextsController@update')->name('text.update');
Route::get('text/{id}/destroy', 'Page\TextsController@destroy')->name('text.destroy');
/**
 *  Route Admin Genres
 */
Route::get('genres', 'Page\GenresController@index')->name('genres');
Route::get('genres/{id}/show', 'Page\GenresController@show')->name('genres.show');
Route::get('genres/{id}/edit', ['as' => 'genres.edit', 'uses' => 'Page\GenresController@edit']);
Route::put('genres/{id}', ['as' => 'genres.update', 'uses' => 'Page\GenresController@update']);
Route::get('genres/{id}/destroy', 'Page\GenresController@destroy')->name('genres.destroy');
