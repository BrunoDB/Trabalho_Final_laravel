<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Time;

class TimeController extends Controller
{
    public function index(){
        $lista = Time::all();
        //dd($lista);
        return view('times.index', ['lista_times'=>$lista]);
    }

    public function create(){
        return view('times.create');
    }

    public function store(Request $request){
        //dd($request);
        Time::create($request->all());
        return redirect()->route('time.index');
    }

    public function destroy($id)
    {
        $time = Time::findOrFail($id);
        $time->delete();
        return redirect()->route('time.index');
    }

    public function edit($id)
    {
        $time = Time::findOrFail($id);
        return view('times.edit', ['time'=>$time]);
    }

    public function update(Request $request, $id)
    {
        $time = Time::findOrFail($id);
        $data = [
            'nome' => $request['nome'],
            'idcidade' => $request['idcidade']
        ];
        $time->update($data);
        return redirect()->route('time.index');
    }
}
