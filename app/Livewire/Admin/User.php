<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class User extends Component
{
    public function render()
    {
        return view('livewire.admin.users.list');
    }

    public function list()
    {
        return view('livewire.admin.users.list');
    }
}
