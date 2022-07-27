@extends('layouts.master')

@section('title','Dashboard')
@section('subtitle','Selamat Datang')

@section('content')
  <div class="row mt-5">   
    <div class="col-md-12">
      <h5>Popular</h5>

      <div class="row">
        @foreach ($data as $value)                    
        <div class="col-md-4 mt-3">
          <div class="card">
            <a href="/detail/movie/{{ $value->id }}"><img src="https://image.tmdb.org/t/p/w300/{{ $value->poster_path }}" class="card-img-top"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="/detail/movie/{{ $value->id }}">{{ $value->title }}</a></h5>
              <p class="card-text">{{ $value->overview }}</p>
              <p class="card-text"><small class="text-muted">{{ $value->release_date }}</small></p>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      {{-- <div class="card-deck mt-3">
      </div> --}}
    </div>
  </div>
@endsection