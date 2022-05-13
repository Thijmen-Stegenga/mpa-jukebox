@extends('master')

@section('navbar')
    @parent
@endsection

@section('content')

<div class="col-12">
  <div class="row d-flex justify-content-between">
     @foreach($songs as $song)
       <div class="col-4 mt-5">
        <div class="card">
          <img class="mx-auto mt-4 border border-" src={{$song->img}}>
          <h5><th>{{$song->name}}</th></h5>
          <h5><th>{{$song->artist}}</th></h5>
          <h5><th>{{$song->duration}}</th></h5>
          <h5><th>{{$song->genre}}</th></h5>
       </div>
      </div>
    @endforeach
   </div>
</div>


<!-- <div class="row d-flex justify-content-between">
@foreach($songs as $song)
           <div class="col-12">
            <div class="card">
                
                 <ul>
                    <div class="col-3">                 
                    <img src={{$song->img}}>
                        <li>{{$song->name}}</li>
                    </div>
                </ul>
            </div>
        </div>

         @endforeach
</div> -->

                

                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> -->
                
@endsection
