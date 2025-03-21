<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Editar Cliente</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $cliente->nome }}">

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" value="{{ $cliente->cpf }}">

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nascimento" id="data_nascimento" value="{{ $cliente->data_nascimento }}">

        <label for="protocolo">Protocolo:</label>
        <input type="text" name="protocolo" id="protocolo" value="{{ $cliente->protocolo }}">

        <label for="tel1">Telefone 1:</label>
        <input type="text" name="tel1" id="tel1" value="{{ $cliente->tel1 }}">

        <label for="tel2">Telefone 2:</label>
        <input type="text" name="tel2" id="tel2" value="{{ $cliente->tel2 }}">

        <label for="tel3">Telefone 3:</label>
        <input type="text" name="tel3" id="tel3" value="{{ $cliente->tel3 }}">

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" value="{{ $cliente->email }}">

        <label for="observacao">Observação:</label>
        <textarea name="observacao" id="observacao">{{ $cliente->observacao }}</textarea>

        <label for="concluido">Concluído:</label>
        <input type="hidden" name="concluido" value="0">
        <input type="checkbox" name="concluido" id="concluido" value="1" {{ $cliente->concluido ? 'checked' : '' }}>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>