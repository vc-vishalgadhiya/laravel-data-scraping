<?php

use Illuminate\Support\Facades\Route;
use Vcian\LaravelDataScraping\Http\Controllers\ScrapingController;

Route::group([
    'middleware' => config('data-scraping.middleware'),
    'prefix' => config('data-scraping.path'),
    'as' => 'data_scraping.',
], function () {
    Route::get('/', [ScrapingController::class, 'index'])->name('index');
    Route::post('/get-data', [ScrapingController::class, 'getData'])->name('get_data');
});
