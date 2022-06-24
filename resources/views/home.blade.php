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
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </div>
                        <h4>{{ $comic['series'] }}</h4>
                    </a>
                @endforeach
            </div>
            <div class="load-more">
                <a href="">Load more</a>
            </div>
        </div>
        <div class="blue-nav">
            <div class="container">
                <a href="" class="blue-nav__card">
                  <img src="{{asset('/images/buy-comics-digital-comics.png')}}" alt="" />
                  <span>Digital comics</span>
                </a>
                <a href="" class="blue-nav__card">
                  <img src="{{asset('/images/buy-comics-merchandise.png')}}" alt="" />
                  <span>DC merchandise</span>
                </a>
                <a href="" class="blue-nav__card">
                  <img src="{{asset('/images/buy-comics-subscriptions.png')}}" alt="" />
                  <span>Subscription</span>
                </a>
                <a href="" class="blue-nav__card">
                  <img src="{{asset('/images/buy-comics-shop-locator.png')}}" alt="" />
                  <span>Comic shop locator</span>
                </a>
                <a href="" class="blue-nav__card">
                  <img src="{{asset('/images/buy-dc-power-visa.svg')}}" alt="" />
                  <span>DC power Visa</span>
                </a>
              </div>
        </div>
    </div>
@endsection
