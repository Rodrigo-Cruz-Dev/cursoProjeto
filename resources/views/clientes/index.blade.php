<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>Lista de Clientes</h1>

    <form action="{{ route('clientes.index') }}" method="GET">
        <input type="text" name="search" placeholder="Pesquisar por nome ou CPF">

        <label for="concluido">Concluído:</label>

        <select name="concluido" id="concluido">
            <option value="">Todos</option>
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>

        <button type="submit">Pesquisar</button>
    </form>

    <a href="{{ route('clientes.create') }}" class="button-link">Novo Cliente</a>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->cpf }}</td>
                <td>
    <div style="display: flex; align-items: center;">
        <a href="{{ route('clientes.show', $cliente->id) }}" class="button-link">Detalhes</a>
        <a href="{{ route('clientes.edit', $cliente->id) }}" class="button-link">Editar</a>
        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <br>
            <button type="submit" class="delete-button" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">Excluir</button>
        </form>
    </div>
</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $clientes->links() }}
</body>

</html>