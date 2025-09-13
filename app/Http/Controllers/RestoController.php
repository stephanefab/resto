<?php

namespace App\Http\Controllers;

use App\Models\Resto;
use Illuminate\Http\Request;

class RestoController extends Controller
{
    public function index(){
        $restos = Resto::orderBy('created_at', 'desc')->paginate(20);
        return view("restos.index", ['restos' => $restos]);
    }

    public function show($id){
        $resto = Resto::findOrFail($id);
        return view("restos.show", ['resto' => $resto]);
    }

    public function create(){
        return view("restos.create");
    }
}
