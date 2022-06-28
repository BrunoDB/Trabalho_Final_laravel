<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Torcedor;

class TorcedorController extends Controller
{
    public function index(){
        $lista = Torcedor::all();
        //dd($lista);
        return view('torcedores.index', ['lista_torcedores'=>$lista]);
    }

    public function create(){
        return view('torcedores.create');
    }

    public function store(Request $request){
        // dd($request);
        Torcedor::create($request->all());
        return redirect()->route('torcedor.index');
    }

    public function destroy($id)
    {
        $torcedor = Torcedor::findOrFail($id);
        $torcedor->delete();
        return redirect()->route('torcedor.index');
    }

    public function edit($id)
    {
        $torcedor = Torcedor::findOrFail($id);
        return view('torcedores.edit', ['torcedor'=>$torcedor]);
    }

    public function update(Request $request, $id)
    {
        $torcedor = Torcedor::findOrFail($id);
        $data = [
            'nome' => $request['nome'],
            'idcidade' => $request['idcidade'],
            'idTime' => $request['idTime']
        ];
        $torcedor->update($data);
        return redirect()->route('torcedor.index');
    }
}
