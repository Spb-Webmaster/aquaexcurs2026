<?php

use App\Http\Controllers\Axios\AxiosController;
use App\Http\Controllers\Axios\AxiosSendingFromFormController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FancyBox\FancyBoxController;
use App\Http\Controllers\FancyBox\FancyBoxSendingFromFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SiteExcursion\SiteExcursionController;
use App\Http\Controllers\SiteNew\SiteNewController;
use App\Http\Controllers\TestController;
use App\MoonShine\Controllers\MoonshineContact;
use App\MoonShine\Controllers\MoonshineHome;
use App\MoonShine\Controllers\MoonshineSchoolBoy;
use App\MoonShine\Controllers\MoonshineSetting;
use App\MoonShine\Controllers\MoonshineShip;
use App\MoonShine\Controllers\MoonshineSpeedBoat;
use Illuminate\Support\Facades\Route;

/**
 * админка
 */
Route::post('/moonshine/home', [MoonshineHome::class, 'home' ]);
Route::post('/moonshine/setting', [MoonshineSetting::class, 'setting' ]);
Route::post('/moonshine/contact', [MoonshineContact::class, 'contact' ]);
Route::post('/moonshine/fleet_speedboat', [MoonshineSpeedBoat::class, 'fleet_speedboat' ]);
Route::post('/moonshine/fleet_ship', [MoonshineShip::class, 'fleet_ship' ]);
Route::post('/moonshine/fleet_school_boy', [MoonshineSchoolBoy::class, 'fleet_school_boy' ]);

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
    Route::post('/order_excursion', 'fancyboxOrderExcursion');

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
    Route::any('/payment/test_send', 'test_send')->name("test_send");

});

/** ///Главная **/
/** Контакты **/

Route::controller(ContactController::class)->group(function () {
    Route::get('/'. config2('moonshine.contact.slug'), 'contacts')->name('contacts');
});

/** ///Контакты **/
/** Экскурсии **/
Route::controller(SiteExcursionController::class)->group(function () {

    Route::get('excursions/{slug}', 'site_excursion')
        ->name('site_excursion');


});
/** ///Экскурсии **/

/** Новости **/
Route::controller(SiteNewController::class)->group(function () {

    Route::get('news', 'items')->name('site_news');
    Route::get('news/{slug}', 'item')->name('site_new');


});
/** ///Новости **/

/** заказ  */
Route::controller(OrderController::class)->group(function () {
    Route::post('/interim.request', 'interimRequest')->name('interim_request');
    Route::get('/book-a-tour', 'order')->name('order');
    Route::post('/book-a-tour-final', 'finalRequest')->name('final_request');

    Route::get('/payment/payment-result', 'paymentResult')->name('payment_result');
    Route::any('/payment/payment-succeeded', 'paymentSucceeded')
         ->name('payment_succeeded');
});
/** заказ  */

/** Статичные страницы (материалы)  */
Route::get('/{slug}', [PageController::class, 'page' ])->name('page');
/** Статичные страницы (материалы)  */


