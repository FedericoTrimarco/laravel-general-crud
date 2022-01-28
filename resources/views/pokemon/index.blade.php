@extends('layout.main')

@section('main-content')
    <div class="container pokedex">
        <div class="row">
            @foreach ($pokemon as $pkmn)
                <div class="col-4 my-5 p-5">
                    <a href="{{ route('pokemon.show', $pkmn->id) }}">
                        <div class="pokemon-card rounded d-flex flex-column align-items-center">
                            <img src="{{ $pkmn->src }}" alt="" class="img-fluid">
                            <h2 class="mt-3">{{ $pkmn->name }}</h2>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection