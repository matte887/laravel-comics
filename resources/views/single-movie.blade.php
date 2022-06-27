@extends('layout.app')

@section('title')
    DC Comics | Titolo comic
@endsection

@section('main-content')
<div class="single-movie">
    <div class="container">
        <img class="comic-cover" src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX" alt="">
        <div class="comic-content">
            <div class="comic-content-left">
                <h1 class="title">Action comics #1000: the deluxe edition</h1>
                <div class="green-bar">
                    <div class="green-bar-left">
                        <span>U.S. Price: $19,99</span>
                        <span>Available</span>
                    </div>
                    <div class="green-bar-right">
                        <span>Check availability</span>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi obcaecati, alias porro debitis facilis voluptatibus animi corrupti velit quidem suscipit minima quo dolorum consequatur deleniti dolore quis illo voluptate harum.</p>
            </div>
            <div class="comic-content-right">
                <p>Advertisement</p>
                <img src="{{ asset('/images/adv.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection