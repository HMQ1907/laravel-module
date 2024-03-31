<?php

namespace Modules\IAM\Livewire\User;
use Livewire\Component;
class User extends Component
{
    public function render()
    {
        return view('iam::livewire.user.index')->layout('iam::components.layouts.app');
    }
}
