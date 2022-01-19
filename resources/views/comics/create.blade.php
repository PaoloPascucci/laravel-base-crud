@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{route('Storato')}}" method="POST">
    @csrf        
    <div class="mb-3">
        <label for="title" class="form-label">Titolo Fumetto</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="insert your text">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control" name="description" id="description">
    </div>
    <div class="mb-3">
        <label class="form-label" for="thumb">Thumbnail</label>
        <input type="text" class="form-control" name="thumb" id="thumb">
    </div>
    <div class="mb-3">
        <label class="form-label" for="price">Prezzo</label>
        <input type="text" class="form-control" name="price" id="price">
    </div>
    <div class="mb-3">
        <label class="form-label" for="series">Serie</label>
        <input type="text" class="form-control" name="series" id="series">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
@endsection