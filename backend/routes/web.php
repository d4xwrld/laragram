<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotController;
use Telegram\Bot\Laravel\Facades\Telegram;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/bot/show', [BotController::class, 'show']);
Route::get('/form', function () {
    return view('form');
});
Route::post('/bot/send-message', [BotController::class, 'sendMessage']);

Route::post('/bot/webhook', function () {
    $update = Telegram::commandsHandler(true);

    return 'ok';
});