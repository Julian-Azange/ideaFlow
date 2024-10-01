<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Registro
    public function register(Request $request) {
        try {
            Categoria::create($request->all());
            return response()->json(['status' => true, 'message' => '¡Registro exitoso!' ]);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => '¡Error interno del servidor ' . $th->getMessage() ], 500);
        }
    }
    
    function update(Request $request, $id) {
        try {
            $categoria = Categoria::find($id);
            $categoria->update($request->all());
            return response()->json(['status' => true, 'message' => '¡Actualización exitosa!' ]);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => '¡Error interno del servidor! ' . $th->getMessage() ], 500);
        }
    }
    
    function getById($id){
        try {
            $categoria = Categoria::find($id);
            return response()->json(['status' => true, 'data' => $categoria ]);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => '¡Error interno del servidor! ' . $th->getMessage() ], 500);
        }
    }
    
    function getData() {
        try {
            $data = Categoria::all();
            return response()->json(['status' => true, 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => '¡Error interno del servidor! ' . $th->getMessage() ], 500);
        }
    }
    
    function deleteById($id) {
        try {
            $categoria = Categoria::find($id)->delete();
            return response()->json(['status' => true, 'message' => '¡Eliminado con exito!' ]);
            // $categoria->delete($id);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => '¡Error interno del servidor! ' . $th->getMessage() ], 500);
        }
    }

}
