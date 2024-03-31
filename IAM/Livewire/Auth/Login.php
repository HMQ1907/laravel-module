<?php

namespace Modules\IAM\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\IAM\Forms\Auth\LoginForm;

class Login extends Component
{
    public LoginForm $form;

    public function render()
    {
        return view('iam::livewire.auth.login')->layout('iam::components.layouts.app');
    }

    public function login()
    {
        $this->form->authenticate();
    }

    public function boot()
    {
        if (Auth::check()) {
            return $this->redirectRoute('iam.registration');
        }
    }
}
