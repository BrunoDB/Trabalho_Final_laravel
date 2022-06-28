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
                
                    <a class="btn btn-info" href="{{ route('torcedor.create') }}">Adicionar</a>
                    <br>
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>idcidade</th>
                            <th>idTime</th>
                            <th>idTime</th>
                            <th>Editar</th>
                            <th>Remover</th>
                        </thead>
                        <tbody>
                            <!-- @foreach($lista_torcedores as $torcedor) -->
                            @foreach(array_combine($lista_torcedores,$lista_times) as $torcedor => $time)
                            <tr>
                                <td>{{ $torcedor->id }}</td>
                                <td>{{ $torcedor->nome }}</td>
                                <td>{{ $torcedor->idcidade }}</td>
                                <td>{{ $torcedor->idTime }}</td>
                                <td>{{ $time->nome }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('torcedor.edit', ['id'=>$torcedor->id]) }}">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('torcedor.destroy', ['id'=>$torcedor->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"class="btn btn-primary">Remover</button>
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
    
