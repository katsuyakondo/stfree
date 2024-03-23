<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OpenAIController;

Route::get('/', function () {
    return view('index');
});

Route::get('/voice-page2', function () {
    return view('voice_Page2');
})->name('voice.page2');

// メッセージ送受信関連のルート
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/messages', [MessageController::class, 'index']);
    Route::post('/messages', [MessageController::class, 'store']);
});

// OpenAI APIとの通信関連のルート
Route::middleware('auth:sanctum')->get('/openai/response', [OpenAIController::class, 'getResponse']);