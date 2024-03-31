<?php

namespace Modules\IAM\Livewire\Auth;

use Livewire\Component;
use Modules\IAM\Forms\Auth\RegistrationForm;

class Registration extends Component
{
    public RegistrationForm $form;

    public function render()
    {
        return view('iam::livewire.auth.registration')->layout('iam::components.layouts.app');
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('iam.registration');
    }
}
