<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Telegram\Bot\Api;
use Illuminate\Http\Request;

class BotController extends Controller
{
    protected $telegram;

    public function __construct(Api $telegram)
    {
        $this->telegram = $telegram;
    }

    public function show()
    {
        $response = $this->telegram->getMe();

        return $response;
    }

    public function sendMessage(Request $request)
    {
        $chatId = $request->input('chat_id');
        $message = $request->input('message');

        $response = $this->telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => $message
        ]);

        return $response;
    }
}