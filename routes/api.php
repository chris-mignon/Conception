<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AiController;

Route::post('ai/summarize', [AiController::class, 'summarize']);
