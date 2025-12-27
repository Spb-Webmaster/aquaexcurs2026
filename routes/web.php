<?php

use App\Http\Controllers\Axios\AxiosController;
use App\Http\Controllers\Axios\AxiosSendingFromFormController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FancyBox\FancyBoxController;
use App\Http\Controllers\FancyBox\FancyBoxSendingFromFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteExcursion\SiteExcursionController;
use App\Http\Controllers\TestController;
use App\MoonShine\Controllers\MoonshineHome;
use App\MoonShine\Controllers\MoonshineSetting;
use Illuminate\Support\Facades\Route;

/**
 * админка
 */
Route::post('/moonshine/home', [MoonshineHome::class, 'home' ]);
Route::post('/moonshine/setting', [MoonshineSetting::class, 'setting' ]);

/**
 * админка
 */
/**
 * fancybox-ajax
 */
/** получение самой формы */
Route::controller(FancyBoxController::class)->group(function () {
    Route::post('/fancybox-ajax', 'fancybox');
});
/** Отправка самой формы */
Route::controller(FancyBoxSendingFromFormController::class)->group(function () {

    Route::post('/call_me', 'fancyboxCallMe');

});

/**
 * ///fancybox-ajax
 *//**
 *
 *
 * axios
 */
/** получение самой формы */
Route::controller(AxiosController::class)->group(function () {
    Route::post('/upload-form-async', 'async');  // заглушка на будущее
});
/** Отправка самой формы */
Route::controller(AxiosSendingFromFormController::class)->group(function () {
    Route::post('/call_me_blue', 'axiosCallMeBlue'); // заглушка на будущее

});

/**
 * ///axios
 */

/** Главная **/

Route::get('/', [HomeController::class, 'index' ])->name('home');
Route::controller(TestController::class)->group(function () {
    Route::get('/test', 'test')->name("test");
});

/** ///Главная **/
/** Контакты **/

Route::controller(ContactController::class)->group(function () {
    Route::get('/contacts', 'contacts')->name('contacts');
});

/** ///Контакты **/
/** Экскурсии **/
Route::controller(SiteExcursionController::class)->group(function () {

    Route::get('excursions/{slug}', 'site_excursion')
        ->name('site_excursion');


});
/** ///Экскурсии **/
