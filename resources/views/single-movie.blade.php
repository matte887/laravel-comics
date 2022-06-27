@extends('layout.app')

@section('title')
    DC Comics | {{ $comics['title'] }}
@endsection

@section('main-content')
<div class="single-movie">
    <div class="container">
        <img class="comic-cover" src="{{ $comics['thumb'] }}" alt="">
        <div class="comic-content">
            <div class="comic-content-left">
                <h1 class="title">{{ $comics['title'] }}</h1>
                <div class="green-bar">
                    <div class="green-bar-left">
                        <span>U.S. Price: {{ $comics['price'] }}</span>
                        <span>Available</span>
                    </div>
                    <div class="green-bar-right">
                        <span>Check availability</span>
                    </div>
                </div>
                <p class="comic-description">{{ $comics['description'] }}</p>
            </div>
            <div class="comic-content-right">
                <p>Advertisement</p>
                <img src="{{ asset('/images/adv.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection