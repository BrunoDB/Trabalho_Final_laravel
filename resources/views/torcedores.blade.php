<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torcedores</title>
</head>
<body>
    <h1>Torcedores</h1>
    <ul>
        @foreach($lista_torcedores as $torcedor)
            <li>{{ $torcedor }}</li>
        @endforeach
    </ul>

    <a href="{{ route('gremio') }}">Grêmio</a>
</body>
</html>