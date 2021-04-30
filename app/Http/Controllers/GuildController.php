<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuildController extends Controller
{
    public function index() {
        $dados['guilds'] = [
            ['name' => 'Disboard', 'members' => 55, 'bots' => 13, 'roles' => 12, 'channel_texts' => 13, 'channel_voice' => 25],
            ['name' => 'Epoch', 'members' => 7, 'bots' => 6, 'roles' => 5, 'channel_texts' => 13, 'channel_voice' => 3],
            ['name' => 'Genshin', 'members' => 450, 'bots' => 23, 'roles' => 25, 'channel_texts' => 13, 'channel_voice' => 45],
            ['name' => 'Blue Protocol', 'members' => 450, 'bots' => 23, 'roles' => 25, 'channel_texts' => 13, 'channel_voice' => 45],
            ['name' => 'VALORANT', 'members' => 450, 'bots' => 23, 'roles' => 25, 'channel_texts' => 13, 'channel_voice' => 45],
            ['name' => 'LOL', 'members' => 450, 'bots' => 23, 'roles' => 25, 'channel_texts' => 13, 'channel_voice' => 45]
        ];

        return view('guilds', $dados);
    }
} 
