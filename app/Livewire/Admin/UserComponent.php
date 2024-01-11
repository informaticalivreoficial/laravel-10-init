<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\WithPagination;
use Livewire\Component;

class UserComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $users = User::orderBy('created_at', 'DESC')
                    ->orderBy('status', 'ASC')
                    ->where('client', '1')
                    ->paginate(10);

        return view('livewire.admin.users.list',[
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('livewire.admin.users.edit');
    }

    

}
