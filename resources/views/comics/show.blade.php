@extends('layouts.main')

@section('name', 'Comic: ' . $comic->title)

@section('main-content')

<section class="showCard py-5">
    <div class="card text-center w-50 mx-auto">
        <div class="card-header">
            {{ $comic->type }}
        </div>
        <div class="card-body">
          <h4 class="card-title ">{{ $comic->title }}</h4>
          <img class="card-img-top w-50" src="{{ $comic->thumb }}" alt="{{ $comic->title }}'s image">
          <h5 class="card-title my-2">
            {{ $comic->series }}
          </h5>

          <p class="card-text text-start my-4">
            <span class="fw-bold">Description</span>:  {{ $comic->description }}
          </p>

          <a href="#" class="btn btn-primary">
            {{ round($comic->price, 2) }} €
          </a>
        </div>
        <div class="card-footer text-muted">
            {{ $comic->sale_date }}
        </div>
      </div>
</section>


@endsection
