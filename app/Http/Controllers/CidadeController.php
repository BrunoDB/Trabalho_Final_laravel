<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;

class CidadeController extends Controller
{
    public function index(){
        $lista = Cidade::all();
        //dd($lista);
        return view('cidades.index', ['lista_cidades'=>$lista]);
    }

    public function create(){
        return view('cidades.create');
    }

    public function store(Request $request){
        // dd($request);
        Cidade::create($request->all());
        return redirect()->route('cidade.index');
    }

    public function destroy($id)
    {
        $cidade = Cidade::findOrFail($id);
        $cidade->delete();
        return redirect()->route('cidade.index');
    }

    public function edit($id)
    {
        $cidade = Cidade::findOrFail($id);
        return view('cidades.edit', ['cidade'=>$cidade]);
    }

    public function update(Request $request, $id)
    {
        $cidade = Cidade::findOrFail($id);
        $data = [
            'nome' => $request['nome']
        ];
        $cidade->update($data);
        return redirect()->route('cidade.index');
    }
}
