<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $amount = 6;
    public function render()
    {
        $all = User::take($this->amount)->get();
        return view('livewire.users', compact($all));
    }

    public function load()
    {
        $this->amount += 6;
    }
}
