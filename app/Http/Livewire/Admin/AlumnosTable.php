<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AlumnosTable extends Component
{
    use WithPagination;

    public $search = "";
    protected $paginationTheme = "bootstrap";

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users = User::orderBy('id', 'DESC')
        ->whereHas('roles', function($q){
            $q->where('name', 'alumno');
        })
        ->where(function ($q) {
            $q->orWhere('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%');
        })
        ->paginate(10);
        return view('livewire.admin.alumnos-table', compact('users'));
    }
}
