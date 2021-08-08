<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component {

    use WithPagination;

    public $search = '';
    public $sortBy = 'name';
    public $sortDirection = 'asc';

    public function sortBy($field) {

        if ($this->sortDirection == 'asc') {
            $this->sortDirection = 'desc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortBy = $field;
    }


    public function render() {
        $users = User::search($this->search)->orderBy($this->sortBy, $this->sortDirection)->simplePaginate(10);

        return view('livewire.user-table', ['users' => $users]);
    }
}
