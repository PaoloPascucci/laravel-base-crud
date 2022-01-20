@extends('Layouts.app')

@section('page-title', 'Comic')

@section('content')
<div class="jumbotron">
</div>
<div class="blueline"></div>
<div class="card W_1">
    <img class="C_img" src="{{$comic->thumb}}" alt="">
    <p class="com">COMIC BOOK</p>
    <p class="gallery">VIEW GALLERY</p>
</div>
<div class="container">
    <h2>{{ $comic->title}}</h2>
    <div class="row">

        <div class="col-8">
            <div class="row bg_green d-flex align-items-center">

                <div class="col-10 justify-content-between d-flex align-items-center">
                    <p><span class="green">U.S. Price:</span>{{$comic->price }}</p>
                    <span class="green">AVAILABLE</span>
                </div>
                <div class="col-2">
                    Check Availability
                </div>

            </div>
            <div>
                {{$comic->description}}
            </div>
        </div>
        <div class="col-4">
            <span class="text-end">ADVERTISEMENT</span>
            <img src="{{asset('img/adv.jpg')}}" alt="">
        </div>
    </div>
    <a class="btn btn-primary" href="{{route('comics.edit', $comic->id)}}"><i class="fas fa-edit"></i></a>
    <form action="{{route('comic.destroy', $comic->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" href=""><i class="fas fa-trash"></i></button>
    </form>
</div>
<div class="container-fluid bg_grey p-5">
    <div class="row">

        <div class="col-6">

            <h4 class="BL">Talent</h4>
            <div class="B_B d-flex justify-content-between">
                <p class="BL">
                    Art by:
                </p>
                <div class="w-75">
                    {{-- @foreach($comic['artists'] as $artist)
                    <span class="and">{{$artist}}</span>
                    @if(!$loop->last)
                    <span>, </span>
                    @endif
                    @endforeach --}}
                </div>
            </div>
            <div class="B_B d-flex justify-content-between">
                <p class="BL">
                    Written by:
                </p>
                <div class="w-75">
                    {{-- @foreach($comic['writers'] as $writer)
                    <span class="and">{{$writer}}</span>
                    @if(!$loop->last)
                    <span>, </span>
                    @endif
                    @endforeach --}}
                </div>
            </div>
        </div>
        <div class="col-6">
            <h4 class="BL">Specs</h4>
            <div class="B_B d-flex justify-content-around ">
                <p class="BL">Series:</p><span class="and U">{{$comic->series}}</span>

            </div>
            <div class=" B_B d-flex justify-content-around ">
                <p class="BL">U.S. Price:</p><span>{{$comic->price}}</span>
            </div>
            <div class=" B_B d-flex justify-content-around ">
                {{-- <p class="BL">On Sale Date:</p><span>{{$comic['sale_date']}}</span> --}}
            </div>
        </div>
    </div>
</div>
@endsection