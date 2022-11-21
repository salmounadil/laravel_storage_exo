@extends('layouts.app')
@section('content')
    <section>
        <h1 class="text-center p-5">Accueil</h1>    
        <div class="d-flex flex-wrap p-3 justify-content-center">
            @foreach ($images as $image )
                  <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-center">{{ $image->name }}</h5>
                  <p class="card-text">{{ $image->description }}</p>
                </div>
                <a href="/show/{{ $image->id }}" class="btn btn-primary">Afficher image</a>
              </div>
            @endforeach
        </div>
    </section>
@endsection