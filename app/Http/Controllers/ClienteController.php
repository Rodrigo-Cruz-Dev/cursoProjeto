<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $search = $request->input('search');
    $dataInicio = $request->input('data_inicio');
    $dataFim = $request->input('data_fim');
    $concluido = $request->input('concluido');

    $query = Cliente::query();

    if ($search) {
        $query->where('nome', 'like', "%$search%")
              ->orWhere('cpf', 'like', "%$search%");
    }

    if ($concluido !== '' && $concluido !== null ) {
        $query->where('concluido', $concluido);
    }
    

    $clientes = $query->get();

    $clientes = $query->paginate(20); // Pagina com 10 resultados por página

    return view('clientes.index', compact('clientes'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'cpf' => 'required|unique:clientes|digits:11',
        'nome' => 'required|string|max:255',
        'data_nascimento' => 'required|date',
        'protocolo' => 'nullable|string|max:255',
        'tel1' => 'nullable|string|max:20',
        'tel2' => 'nullable|string|max:20',
        'tel3' => 'nullable|string|max:20',
        'email' => 'nullable|email|max:255',
        'observacao' => 'nullable|string|max:600',
        'concluido' => 'boolean',
    ]);

    Cliente::create($request->all());
    return redirect()->route('clientes.index');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
{
    $request->validate([
        'cpf' => 'required|digits:11|unique:clientes,cpf,' . $cliente->id,
        'nome' => 'required|string|max:255',
        'data_nascimento' => 'required|date',
        'protocolo' => 'nullable|string|max:255',
        'tel1' => 'nullable|string|max:20',
        'tel2' => 'nullable|string|max:20',
        'tel3' => 'nullable|string|max:20',
        'email' => 'nullable|email|max:255',
        'observacao' => 'nullable|string|max:600',
        'concluido' => 'boolean',
    ]);

    $cliente->update($request->all());
    return redirect()->route('clientes.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}