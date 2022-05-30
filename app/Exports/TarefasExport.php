<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TarefasExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return auth()->user()->tarefas()->get();

    }

    public function headings():array {
        return ['Id da Tarefa', 'ID do Usuário', 'Tarefa', 'Data limite conclusão', 'Data criação', 'Data atualização'];
    }
}
