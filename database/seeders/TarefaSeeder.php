<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarefa;

class TarefaSeeder extends Seeder
{
    public function run()
    {
        Tarefa::create(['titulo' => 'Ler', 'sobre' => 'Jogos Vorazes']);
        Tarefa::create(['titulo' => 'Estudar', 'sobre' => 'Programação']);
    }
} 

