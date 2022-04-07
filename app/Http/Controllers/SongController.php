<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    Public function index(){
        $songs = Song::get();

        return view('home', ['songs' => $songs]);
    }
}
