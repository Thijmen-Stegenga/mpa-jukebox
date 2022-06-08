@extends('master')

@section('navbar')
    @parent
@endsection

@section('content')

@if(Auth::user())
    <div class="songDetail text-white">
        @foreach(Auth::user()->playlists as $playlist)
            <div class="d-flex justify-content-center">
                <h1><a class="text-white" href="/playlist/detail/{{$playlist->id}}">{{$playlist->name}}</a></h1>
            </div>

            <div class="d-flex justify-content-center">
                <a class="btn btn-secondary" href="/playlist/editName/{{ $playlist->id }}">Change Playlist Name</a>
                <a class="btn btn-danger" href="/playlist/delete/{{ $playlist->id }}">Delete Playlist</a>
            </div>
        @endforeach
    </div>
@endif



<div class="">
    <form method="post" action="{{ url('/playlist/create') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="playlistName" class="text-white">Create a playlist:</label>
            <input type="text" class="form-control" id="playlistName" name="playlistName" placeholder="Name" required>
        </div>

        <div class="">
            <button type="submit" class="btn btn-secondary">Make Playlist</button>
        </div>

        <p class="text-white text-center">Select the songs you want to add in the playlist by clicking the checkbox!</p>
        <div class="col-12">
        <div class="row d-flex justify-content-between">
    @foreach($songs as $song)
    <div class="col-4 mt-5 card">
        <ul>
            <div class="text-white">
            <img class="mx-auto mt-4 border border-" src={{$song->img}}>
                <li class="font-weight-bold mt-2">{{$song->name}}</li>
                <li>{{$song->artist}}</li>
                <li>{{$song->duration}}</li>
                <li>{{$song->genre}}</li> 
                <li>
                    <div class="checkbox">
                        <input class="mt-2" type="checkbox" name="song[]" value="{{ $song->id }}" id="check{{ $song->id }}">
                    </div>
                </li>
            </div>
        </ul>
    </div>
    @endforeach
    </div>
    </div>

    </form>
</div>

                
@endsection
