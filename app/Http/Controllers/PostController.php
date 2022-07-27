<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function index(){
        $response  = Http::get('https://developers.themoviedb.org/3/movies/get-now-playing');
        $data = $response->json();
        dd($data);
    }
}
