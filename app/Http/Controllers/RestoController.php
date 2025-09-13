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

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:2|max:100|unique:restos',
            'location' => 'required|min:2|max:100',
            'image' => 'nullable|min:5|max:100|url:http,https',
            'nbr_place' => 'required|integer|gte:1|lte:500',
            'description' => 'nullable|min:2|max:500'
        ]);

        Resto::create($validated);
        return back()->with('success', 'Data saved!');
    }

    public function destroy($id) {

    }
}
