@extends('layouts.app')

@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('movies.Storato')}}" method="post">
    @csrf        
    <div class="mb-3">
        <label for="title" class="form-label">Titolo Fumetto</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="insert your text" value="{{old('title')}}">
        @error('title')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description">
        @error('description')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="thumb">Thumbnail</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb">
        @error('thumb')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="price">Prezzo</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price">
        @error('price')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="series">Serie</label>
        <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series">
        @error('price')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
@endsection