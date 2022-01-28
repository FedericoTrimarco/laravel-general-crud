@extends('layout.main')

@section('main-content')
    <div class="container show h-100 d-flex align-items-center">
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
    </div>
@endsection