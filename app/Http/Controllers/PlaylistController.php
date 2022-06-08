<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class PlaylistController extends Controller
{
    public function index()
    {
        $songs = Song::get();
        return view('playlist', ['songs'=> $songs]);
    }
}
