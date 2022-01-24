@extends('layouts.app')

@section('content')

<form action="{{route('comic.update', $comic->id)}}" method="post">
    @csrf    
    @method('PUT')    
    <div class="mb-3">
        <label for="title" class="form-label">Titolo Fumetto</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{$comic->title}}">
        @error('title')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" value="{{$comic->description}}" name="description" id="description">
        @error('description')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="thumb">Thumbnail</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" value="{{$comic->thumb}}" name="thumb" id="thumb">
        @error('thumb')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="price">Prezzo</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" value="{{$comic->price}}"  name="price" id="price">
        @error('price')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="series">Serie</label>
        <input type="text" class="form-control @error('series') is-invalid @enderror" value="{{$comic->series}}"  name="series" id="series">
        @error('series')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
@endsection

