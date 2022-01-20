@extends('layouts.app')

@section('content')

<form action="{{route('comics.update', ['id'=> $comic->id])}}" method="post">
    @csrf    
    @method('PUT')    
    <div class="mb-3">
        <label for="title" class="form-label">Titolo Fumetto</label>
        <input type="text" class="form-control" value="{{$comic->title}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control" value="{{$comic->description}}" name="description" id="description">
    </div>
    <div class="mb-3">
        <label class="form-label" for="thumb">Thumbnail</label>
        <input type="text" class="form-control" value="{{$comic->thumb}}" name="thumb" id="thumb">
    </div>
    <div class="mb-3">
        <label class="form-label" for="price">Prezzo</label>
        <input type="text" class="form-control" value="{{$comic->price}}"  name="price" id="price">
    </div>
    <div class="mb-3">
        <label class="form-label" for="series">Serie</label>
        <input type="text" class="form-control" value="{{$comic->series}}"  name="series" id="series">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
@endsection

@endsection