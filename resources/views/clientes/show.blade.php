<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<h1>Detalhes do Cliente</h1>

<p>Nome: {{ $cliente->nome }}</p>
<p>CPF: {{ $cliente->cpf }}</p>
<p>Data de Nascimento: {{ $cliente->data_nascimento }}</p>
<p>Protocolo: {{ $cliente->protocolo }}</p>
<p>Telefone 1: {{ $cliente->tel1 }}</p>
<p>Telefone 2: {{ $cliente->tel2 }}</p>
<p>Telefone 3: {{ $cliente->tel3 }}</p>
<p>E-mail: {{ $cliente->email }}</p>
<p>Observação: {{ $cliente->observacao }}</p>
<p>Concluído: {{ $cliente->concluido ? 'Sim' : 'Não' }}</p>

<a href="{{ route('clientes.index') }}">Voltar</a>
</body>
</html>