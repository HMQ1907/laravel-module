<?php

namespace Modules\IAM\Livewire\User;

use Livewire\Component;
use Modules\IAM\app\Models\User;

class Record extends Component
{
    public User $user;

    public function render()
    {
        return view('iam::livewire.user.record');
    }

    public function delete()
    {
        $this->user->delete();
        $this->dispatch('re-render-users-table');
        $this->dispatch('deleted-user',['message'=>'User deleted successfully']);
    }
    
    
    public function edit(){
        $this->dispatch('editUser', ['userId' => $this->user->id])->to('user.create-edit');
    }
}
