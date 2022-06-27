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
        <div class="background-grey">
            <div class="container">
                <div class="bottom-left">
                    <h3 class="text-blue">Talent</h3>
                    <div class="my br">
                        <span class="text-blue">Art by:</span>
                        @foreach ($comics['artists'] as $artist)
                            <span class="text-brand-color">{{ $artist }}</span>
                            @if (!$loop->last)
                                <span>,</span>
                            @endif
                        @endforeach
                    </div>
                    <div class="my br">
                        <span class="text-blue">Written by:</span>
                        @foreach ($comics['writers'] as $writer)
                            <span class="text-brand-color">{{ $artist }}</span>
                            @if (!$loop->last)
                                <span>,</span>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="bottom-right">
                    <h3 class="text-blue">Specs</h3>
                    <p class="text-blue br my">Series: {{ $comics['series'] }}</p>
                    <p class="text-blue br my">U.S. Price: {{ $comics['price'] }}</p>
                    <p class="text-blue br my">On Sale Date: {{ $comics['sale_date'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
