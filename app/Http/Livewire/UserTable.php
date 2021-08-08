<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component {

    use WithPagination;

    // public $users;

    public function render() {
        $users = User::get();



        return view('livewire.user-table', ['users' => $users]);
    }
}
