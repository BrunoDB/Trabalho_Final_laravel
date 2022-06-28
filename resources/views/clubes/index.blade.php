<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clubes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                
                    <a class="btn btn-info" href="{{ route('clube.create') }}">Adicionar</a>
                    <br>
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Fundação</th>
                            <th>Editar</th>
                            <th>Remover</th>
                        </thead>
                        <tbody>
                            @foreach($lista_clubes as $clube)
                            <tr>
                                <td>{{ $clube->id }}</td>
                                <td>{{ $clube->nome }}</td>
                                <td>{{ $clube->fundacao }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('clube.edit', ['id'=>$clube->id]) }}">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('clube.destroy', ['id'=>$clube->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Remover</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
    
