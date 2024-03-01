<?php

namespace App\Http\Controllers;

use App\Models\Taller;
use Illuminate\Http\Request;

class TallerController extends Controller
{
    public function create() {

        return view('Formulario');
       
}
public function store(Request $request) {
  
    $request->validate([
        'name' => 'required|string',
        'note1' => 'required|numeric',
        'note2' => 'required|numeric',
        'note3' => 'required|numeric',
    ]);

    $promedio = ($request->note1 + $request->note2 + $request->note3) / 3;

    $producto = new Taller();
    $producto->name = $request->name;  
    $producto->note1 = $request->note1;
    $producto->note2 = $request->note2;
    $producto->note3 = $request->note3;
    $producto->average = $promedio; 

    $producto->save();

    return response()->json([
        'producto' => $producto,
        'promedio' => $promedio
    ]);
}
}