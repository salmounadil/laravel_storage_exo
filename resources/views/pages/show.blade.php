@extends('layouts.app')
@section('content')
    <section>
        <h1 class="text-center p-5">Show</h1>    
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/'.$show->src) }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $show->name }}</h5>
                  <p class="card-text">{{ $show->description }}</p>
                </div>
              </div>
        </div>
    </section>
@endsection