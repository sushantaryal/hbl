<?php

Route::get('/hbl', 'Bickyraj\Hbl\Controllers\HblController@index')->name('bickyraj.hbl.index');
Route::post('/hbl/payment-request', 'Bickyraj\Hbl\Controllers\HblController@paymentRequest')->name('bickyraj.hbl.paymentrequest');
Route::get('/hbl/payment/success', 'Bickyraj\Hbl\Controllers\HblController@paymentSuccess')->name('bickyraj.hbl.payment.success');
Route::get('/hbl/payment/canceled', 'Bickyraj\Hbl\Controllers\HblController@paymentCanceled')->name('bickyraj.hbl.payment.canceled');
Route::get('/hbl/payment/failed', 'Bickyraj\Hbl\Controllers\HblController@paymentFailed')->name('bickyraj.hbl.payment.failed');
