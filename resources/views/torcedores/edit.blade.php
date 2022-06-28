<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Torcedores') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Cadastro de Torcedor</h1>
                    <form action="{{ route('torcedor.update', ['id'=>$torcedor->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" placeholder="Nome "name="nome" value="{{ $torcedor->nome }}">
                        <input type="text" placeholder="Id Cidade" name="idcidade" value="{{ $torcedor->idcidade }}">
                        <input type="text" placeholder="ID Time" name="idTime" value="{{ $torcedor->idTime }}">
                        <input type="submit"class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>