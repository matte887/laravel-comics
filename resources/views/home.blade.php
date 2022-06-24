@extends('layout.app')

@section('title')
    DC Comics
@endsection

@section('main-content')
<div class="main-content">
    <div class="comics">
        <div class="container">
            @foreach ($comics as $comic)
            <a href="" class="comic">
                <div class="img-container">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <h4>{{$comic['series']}}</h4>
            </a>                
            @endforeach
        </div>
    </div>
    <div class="options"></div>
</div>
@endsection