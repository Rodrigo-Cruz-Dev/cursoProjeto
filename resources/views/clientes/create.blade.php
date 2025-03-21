<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Cliente</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Novo Cliente</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf">

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nascimento" id="data_nascimento">

        <label for="protocolo">Protocolo:</label>
        <input type="text" name="protocolo" id="protocolo">

        <label for="tel1">Telefone 1:</label>
        <input type="text" name="tel1" id="tel1">

        <label for="tel2">Telefone 2:</label>
        <input type="text" name="tel2" id="tel2">

        <label for="tel3">Telefone 3:</label>
        <input type="text" name="tel3" id="tel3">

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email">

        <label for="observacao">Observação:</label>
        <textarea name="observacao" id="observacao"></textarea>

        <label for="concluido">Concluído:</label>
        <input type="hidden" name="concluido" value="0">
        <input type="checkbox" name="concluido" id="concluido" value="1">

        <button type="submit">Salvar</button>
    </form>
</body>
</html>