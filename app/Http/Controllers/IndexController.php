<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Ms_kategori;
// use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhNDE5ZWUyMzAyMmM3MDQzMjU4NjM3ZDQzZmI5NzE2ZiIsInN1YiI6IjYyYzQ3YzYyYmE0ODAyMDA3Y2E5NjdiZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.W2DDbVA1uN2T8HqBVlgxv2cnR9lfYv87HKmi7Wh0tkw';
        $client = new Client(); //GuzzleHttp\Client
        $url = "https://api.themoviedb.org/3/movie/top_rated";
        $headers = [
            'Authorization' => "Bearer " . $token
        ];

        $response = $client->request('GET', $url, [
            // 'json' => $params,
            'headers' => $headers,
            // 'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());
        $data = $responseBody->results;

        return view('dashboard', compact('data'));
    }

    public function detail($id){
        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhNDE5ZWUyMzAyMmM3MDQzMjU4NjM3ZDQzZmI5NzE2ZiIsInN1YiI6IjYyYzQ3YzYyYmE0ODAyMDA3Y2E5NjdiZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.W2DDbVA1uN2T8HqBVlgxv2cnR9lfYv87HKmi7Wh0tkw';
        $client = new Client(); //GuzzleHttp\Client
        $url = "https://api.themoviedb.org/3/movie/".$id."?append_to_response=credits,videos,images";
        $headers = [
            'Authorization' => "Bearer " . $token
        ];

        $response = $client->request('GET', $url, [
            // 'json' => $params,
            'headers' => $headers,
            // 'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());
        $data = $responseBody;

        return view('detail-movie', compact('data'));
    }
}
