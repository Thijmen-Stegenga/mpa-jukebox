@extends('master')

@section('navbar')
    @parent
@endsection

@section('content')


<div class="col-12">
  <div class="row d-flex justify-content-center">
       <div class="col-4 mt-5">
        <div class="card">
          <img class="mx-auto mt-4 border border-" src={{$songs->img}}>
          <h5><th>{{$songs->name}}<th></h5>
          <h5><th>{{$songs->artist}}</th></h5>
          <h5><th>{{$songs->duration}}</th></h5>
          <h5><th>{{$songs->genre}}</th></h5>
       </div>
      </div>
   </div>
</div>


                
@endsection
