<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefasController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('tarefas', ['tarefas' => $tarefas]);
    }

    public function store()
    {
        $tarefa = new Tarefa();
        $tarefa->titulo = 'Ler';
        $tarefa->sobre = 'Jogos Vorazes';
        $tarefa->save();

        return redirect()->route('tarefas.index');
    }
}

