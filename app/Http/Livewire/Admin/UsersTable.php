<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
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
        
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
        ->orWhere('email', 'LIKE', '%' . $this->search . '%')
        ->paginate(10);

        return view('livewire.admin.users-table', compact('users'));
    }
}
