@extends('layouts.master')

@section('content')
<div class="card mb-3" style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://image.tmdb.org/t/p/w300/{{ $data->poster_path }}">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h1 class="card-title">{{ $data->title }}</h1>
        <p class="card-text mt-5">{{ $data->overview }}</p>
        <p class="card-text"><small class="text-muted">{{ $data->release_date }}</small></p>
      </div>
    </div>
  </div>
</div>
@endsection