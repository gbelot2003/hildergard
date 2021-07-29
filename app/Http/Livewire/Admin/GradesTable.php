<?php

namespace App\Http\Livewire\Admin;

use App\Models\Grade;
use Livewire\Component;
use Livewire\WithPagination;

class GradesTable extends Component
{
    use WithPagination;

    public $search = "";
    protected $paginationTheme = "bootstrap";

    /**
     * Funcion reder de tabla
     *
     * @return void
     */
    public function render()
    {
        $grades = Grade::orderBy('id', 'DESC')
        ->orWhere('name', 'LIKE', '%' . $this->search . '%')
        ->orWhereHas('teacher', function($q){
            $q->where('name', 'LIKE', '%' . $this->search . '%');
        })
        ->orWhere('year', $this->search)
        ->paginate(10);
        return view('livewire.admin.grades-table', compact('grades'));
    }
}
