@extends('master')

@section('title', $playlist->name)

@section('navbar')
    @parent
    <h1 id="playlistSongs" class="d-flex justify-content-center mt-2">
        <svg xmlns="http://www.w3.org/2000/svg" color="white" width="35" height="35" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
            <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
            <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/>
            <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
            <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
        </svg>
    </h1>
        <h2 class="d-flex justify-content-center text-white">{{$playlist->name}}</h2>
@stop

@section('content')
<div class="">
    <h3 class="text-center text-white">Total length: {{$playlistTime['minute']. ' minutes and ' . $playlistTime['second']. ' seconds'}}</h3>
    <a class="btn btn-success d-flex justify-content-center" href="#addSong">Add song</a>
    <div class="row text-white">
        @foreach($playlist->songs as $song)                        
            <div class="col-4">
                <div class="songDetail mt-2 pl-5">
                    <img src="{{$song->img}}" class="mt-2 mb-2">
                        <h3>{{$song->artist}}</h3>
                        <p>{{$song->name }}</p>
                        <p>{{$song->duration}}</p>
                        <p>{{$song->genre }}</p>
                        <a class="btn btn-danger" href="/playlist/remove/{{$playlist->id}}/{{$song->id}}">Remove this song</a>                                            
                </div>
            </div>
        @endforeach
    </div>
</div>

<div id="addSong">    
    <hr>
    <p class="text-white text-center">Add a song!</p>
    <a class="btn btn-secondary d-flex justify-content-center mb-3" href="#playlistSongs">Playlist songs</a>
</div>

<div class="col-12">
  <div class="row d-flex justify-content-between">
     @foreach($songs as $song)
       <div class="col-4 mt-5">
        <div class="card">
          <img class="mx-auto mt-4 border border-" src={{$song->img}}>
          <h5><th><a class="text-white" href="/song/detail/{{$song->id}}">{{$song->name}}</a></th></h5>
          <h5><th>{{$song->artist}}</th></h5>
          <h5><th>{{$song->duration}}</th></h5>
          <h5><th>{{$song->genre}}</th></h5>
          <a href="/playlist/addsong/to/playlist/{{$playlist->id}}/{{$song->id}} " role="button">Add this song</a>
       </div>
      </div>
    @endforeach
   </div>
</div>


<a href="#" class="top">Back to Top &#8593;</a>
    
@stop