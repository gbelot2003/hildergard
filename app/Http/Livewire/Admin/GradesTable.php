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


    
    public function render()
    {
        $grades = Grade::orderBy('id', 'DESC')
        ->paginate(10);
        return view('livewire.admin.grades-table', compact('grades'));
    }
}
