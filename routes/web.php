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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/coming-soon', 'ComingSoonController@index')->name('coming-soon');
Route::get('/jalisco', 'JaliscoController@jalisco')->name('jalisco');
Route::get('/agenda', 'ScheduleController@index')->name('schedule');
Route::get('/page/{slug}', 'PageController@getPage')->name('page');

if (App::environment('production')) {
    if (!env('PAGE_JALISCO', false)) {
        Route::get('/este-es-mi-jalisco', 'ComingSoonController@index')->name('mi-jalisco');
    } else {
        Route::get('/este-es-mi-jalisco', 'JaliscoController@mijalisco')->name('mi-jalisco');
    }

    if (!env('PAGE_REGIONS', false)) {
        Route::get('/regiones', 'ComingSoonController@index')->name('regions');
        Route::get('/region/{slug}', 'ComingSoonController@index')->name('region');
    } else {
        Route::get('/regiones', 'RegionsController@index')->name('regions');
        Route::get('/region/{slug}', 'RegionsController@getRegion')->name('region');
    }

    if (!env('PAGE_EXPERIENCES', false)) {
        Route::get('/experiencias', 'ComingSoonController@index')->name('experiences');
        Route::get('/experiencias/{category}', 'ComingSoonController@index')->name('experiences.category');
        Route::get('/experiencias/{category}/{destination}', 'ComingSoonController@index')->name('experiences.destination');
    } else {
        Route::get('/experiencias', 'ExperiencesController@index')->name('experiences');
        Route::get('/experiencias/{category}', 'ExperiencesController@getExperienceCategory')->name('experiences.category');
        Route::get('/experiencias/{category}/{destination}', 'ExperiencesController@getDestination')->name('experiences.destination');
    }

    if (!env('PAGE_ROUTES', false)) {
        Route::get('/rutas', 'ComingSoonController@index')->name('routes');
        Route::get('/ruta/{slug}', 'ComingSoonController@index')->name('route');
    } else {
        Route::get('/rutas', 'RoutesController@index')->name('routes');
        Route::get('/ruta/{slug}', 'RoutesController@getRoute')->name('route');
    }

    if (!env('PAGE_TRAVEL', false)) {
        Route::get('/turismo-de-reuniones', 'ComingSoonController@index')->name('business-travel');
    } else {
        Route::get('/turismo-de-reuniones', 'BusinessTravelController@index')->name('business-travel');
    }
    if (!env('PAGE_BLOG', false)) {
        Route::get('/blog/{slug}', 'ComingSoonController@index')->name('blog.post');
    } else {
        Route::get('/blog/{slug}', 'BlogController@getPost')->name('blog.post');
    }
} else {
    Route::get('/este-es-mi-jalisco', 'JaliscoController@mijalisco')->name('mi-jalisco');
    Route::get('/regiones', 'RegionsController@index')->name('regions');
    Route::get('/region/{slug}', 'RegionsController@getRegion')->name('region');
    Route::get('/experiencias', 'ExperiencesController@index')->name('experiences');
    Route::get('/experiencias/{category}', 'ExperiencesController@getExperienceCategory')->name('experiences.category');
    Route::get('/experiencias/{category}/{destination}', 'ExperiencesController@getDestination')->name('experiences.destination');
    Route::get('/rutas', 'RoutesController@index')->name('routes');
    Route::get('/ruta/{slug}', 'RoutesController@getRoute')->name('route');
    Route::get('/turismo-de-reuniones', 'BusinessTravelController@index')->name('business-travel');
    Route::get('/blog/{slug}', 'BlogController@getPost')->name('blog.post');
}

Route::group(['prefix' => '{locale}'], function ($locale) {
});
