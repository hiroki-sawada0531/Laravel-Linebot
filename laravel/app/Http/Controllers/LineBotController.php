<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LineBotController extends Controller
{
    public function index() {
        return view('linebot.index');
    }

    public function parrot(Request $request)
    {
        Log::debug($request->header());
        Log::debug($request->input());
    }
}