@extends('layouts.app')

@section('page-title', 'home page')

@section('content')

<div class="jumbotron">
</div>
<div class="comics">
    <div class="container">
        <div class="row gy-4">
            @foreach($comics as $comic)
            <div class="col-2">
                <a href="{{route('comic', $comic->id)}}">
                    <div class="card ">
                        <img src="{{$comic->thumb}}" alt="">
                        <p class="bold text-white">{{ $comic->series }}</p>
                    </div>
                </a>
            </div>
            @endforeach
            <a class="btn btn-primary" href="{{route('comics.create', $comic->id)}}">Aggiungi Fumetto</a>
        </div>
    </div>
    <br>
</div>
<div class="buy">
    <div class="m-5 text-white">
        <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt=""><span>DIGITAL COMICS</span>
    </div>
    <div class="m-5 text-white">
        <img src="{{asset('img/buy-comics-merchandise.png')}}" alt=""><span>DC MERCHANDISE</span>
    </div>
    <div class="m-5 text-white">
        <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt=""><span>SUBSCRIPTIONS</span>
    </div>
    <div class="m-5 text-white">
        <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt=""><span>COMIC SHOP LOCATOR</span>
    </div>
    <div class="m-5 text-white">
        <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt=""><span>DC POWER VISA</span>
    </div>
</div>
@endsection 