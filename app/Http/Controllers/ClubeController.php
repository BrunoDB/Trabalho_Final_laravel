<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clube;

class ClubeController extends Controller
{
    public function index(){
        $lista = Clube::all();
        //dd($lista);
        return view('clubes.index', ['lista_clubes'=>$lista]);
    }

    public function create(){
        return view('clubes.create');
    }

    public function store(Request $request){
        //dd($request);
        Clube::create($request->all());
        return redirect()->route('clube.index');
    }

    public function destroy($id)
    {
        $clube = Clube::findOrFail($id);
        $clube->delete();
        return redirect()->route('clube.index');
    }

    public function edit($id)
    {
        $clube = Clube::findOrFail($id);
        return view('clubes.edit', ['clube'=>$clube]);
    }

    public function update(Request $request, $id)
    {
        $clube = Clube::findOrFail($id);
        $data = [
            'nome' => $request['nome'],
            'fundacao' => $request['fundacao']
        ];
        $clube->update($data);
        return redirect()->route('clube.index');
    }
}
