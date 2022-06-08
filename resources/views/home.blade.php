@extends('master')

@section('navbar')
    @parent
@endsection

@section('content')

<div class="dropdown">
        <form action="{{ route('home.genre') }}" method="get">
                <svg color="white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                    <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                    <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/>
                    <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                    <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                  </svg>

                <select class="" name="sort" id="sort">
                    <option value="all">All</option> 
                    <option value="pop">Pop</option> 
                    <option value="rap">Rap</option> 
                    <option value="rock">Rock</option>
                    <option value="r&b">R&B</option>
                </select>
            <input type="submit" value="Go!">
        </form>
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
          <a href="/queue/add/{{$song->id}}" role="button">Add to queue</a>
       </div>
      </div>
    @endforeach
   </div>
</div>


                
@endsection
