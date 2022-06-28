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
                <form action="{{ route('torcedor.store') }}" method="POST">
                    @csrf
                    <input placeholder="Nome" type="text" name="nome">
                    <input placeholder="ID Cidade" type="text" name="idcidade">
                    <input placeholder="ID Time" type="text" name="idtime">
                    <input type="submit"class="btn btn-primary">
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
    