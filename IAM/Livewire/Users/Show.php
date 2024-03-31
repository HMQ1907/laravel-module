<?php

namespace Modules\IAM\Livewire\Users;
use Modules\IAM\app\Models\User;
use Livewire\Component;

class Show extends Component
{
    public $users;

    public function mount(){
        $this->users = User::all();
    }
    public function render()
    {
        return view('iam::livewire.users.show')->layout('iam::components.layouts.app');
    }

}
