<?php

namespace App\Http\Controllers\Bot;

use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BotController extends Controller
{
    public function test()
    {
        $response = Telegram::getMe();
        dd($response);
    }



    public function getUpdates()
    {
        $response = Telegram::getUpdates();
        dd($response);
    }

    public function webhook(Request $request)
    {
        Log::info(json_encode($request->all()));
    }
}
