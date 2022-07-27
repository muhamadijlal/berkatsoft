<?php

namespace App\Http\Controllers;

use App\Models\Ms_kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function index(){
        $model = Ms_kategori::all();
        
        return response()->json([
            'message'  => 'Success Get Data',
            'data'     => $model,
            'status'   => 200,
        ], 200);
    }

    public function create(Request $request){
        $model = new Ms_kategori;
        $model->nama_kategori = $request->nama_kategori;
        $model->save();

        return response()->json([
            'message'     => 'Success Edit Data',
            'status_code' => 200
        ], 200);
    }

    public function edit($id) {
        $model = Ms_kategori::find($id);

        if ($model) {
            return response()->json([
                'message'  => 'Success Get Data',
                'data'     => $model,
                'status'   => 200,
            ], 200);
        } else {
            return response()->json([
                'message'  => 'Error Get Data',                
                'status'   => 404,
            ], 404);
        }
        
    }

    public function update(Request $request, $id){
        $model = Ms_kategori::find($id);

        if ($model) {
            $model->nama_kategori = $request->nama_kategori;
            $model->save();

            return response()->json([
                'message'  => 'Success Update Data',               
                'status'   => 200,
            ], 200);
        } else {
            return response()->json([
                'message'  => 'Error Update Data',               
                'status'   => 404,
            ], 404);
        }
    }

    public function delete($id){
        $model = Ms_kategori::find($id);

        if ($model) {
            $model->delete();

            return response()->json([
                'message'  => 'Success Delete Data',               
                'status'   => 200,
            ], 200);
        } else {
            return response()->json([
                'message'  => 'Error Delete Data',               
                'status'   => 404,
            ], 404);
        }
        
    }
}
