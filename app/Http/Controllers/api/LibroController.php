<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller{

    public function index() {
        $libro = Libro::all();
        return response()->json($libro, 200);
    }

    public function store(Request $request){
        $libro = Libro::create( $request->all() );
        return response()->json($libro, 201);
    }

    public function show($id){
        $libro = Libro::findOrFail( $id);
        if(!$libro){
            return response()->json(['message'=>'Libro no encontrado'], 404);
        }
        return response()->json($libro, 200);
    }

    public function update(Request $request, $id){
        $libro = Libro::findOrFail( $id);
        if(!$libro){
            return response()->json(['message'=>'Libro no encontrado'], 404);
        }
        $libro->update( $request->all() );
        return response()->json(['message'=>'Libro actualizado'], 200);
    }

    public function destroy($id){
        $libro = Libro::findOrFail( $id);
        if(!$libro){
            return response()->json(['message'=>'Libro no encontrado'], 404);
        }
        $libro->delete();
        return response()->json(['message'=>'Libro eliminado'], 200);
    }
}