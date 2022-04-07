@extends('master')

@section('navbar')
    @parent
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                
                @foreach($songs as $song)
                <ul>
                    <div> 
                    <img src={{$song->img}}>
                        <li>{{$song->name}}</li>
                    </div>
                <ul>
                @endforeach
                

            </div>
        </div>
    </div>
</div>
@endsection
