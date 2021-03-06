@extends('layout.main')

@section('main-content')

    <div class="container mt-5 d-flex flex-column">
        <form action="{{ route('pokemon.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label fx-bold fs-3">name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label fx-bold fs-3">description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label fx-bold fs-3">type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <div class="mb-3">
                <label for="src" class="form-label fx-bold fs-3">Image</label>
                <textarea class="form-control" id="src" name="src" rows="2"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Add Pokemon</button>
        </form>
    </div>

@endsection