@extends('layout.main')

@section('main-content')
    <div class="container show h-100 d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-6">
                <img src="{{ $pokemon->src }}" alt="{{ $pokemon->name }}-img" class="img-fluid">
            </div>
            <div class="col-6">
                <h1 class="mb-3">{{ $pokemon->name }}</h1>
                <span><strong>Type</strong>: {{ $pokemon->type }}</span>
                <p class="fs-2 mt-5">{{ $pokemon->description }}</p>
            </div>
        </div>
        <div class="action d-flex justify-content-center mt-4">
            <a href="{{ route('pokemon.edit', $pokemon->id) }}" class="btn btn-primary">EDIT</a>
            <a href="/" class="btn btn-danger mx-3">DELETE</a>
        </div>
    </div>
@endsection