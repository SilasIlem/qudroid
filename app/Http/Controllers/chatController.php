<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class chatController extends Controller
{
    public function index()
    {
        $chatrooms = DB::table('chatroom')->get();
        return view('chatrooms', ['chatrooms' => $chatrooms]);
    }
}
