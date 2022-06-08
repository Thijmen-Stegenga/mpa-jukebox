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

    public function update()
    //shows specific songs depending on which genre the user choses on the home page
    {
        if($_GET['sort'] == "all"){
            return redirect('/');
        }

        if($_GET['sort'] == "pop"){
            $songs = Song::where('genre', 'pop')->get();
        }

        if($_GET['sort'] == "rap"){
            $songs = Song::where('genre', 'rap')->get();
        }

        if($_GET['sort'] == "rock"){
            $songs = Song::where('genre', 'rock')->get();
        }

        if($_GET['sort'] == "r&b"){
            $songs = Song::where('genre', 'r&b')->get();
        }
 
        return view('home', [
            'songs' => $songs
        ]);
    }

    public function songDetail($id)
    {
        //gets the id of a song
        $songs = Song::findOrFail($id);

        return view('song-detail', ['songs' => $songs]);

    }
}
