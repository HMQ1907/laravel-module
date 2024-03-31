<?php

namespace Modules\IAM\Forms\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Url;
use Livewire\Form;

class LoginForm extends Form
{
    public $email = '';

    public $password = '';

    public $rememberMe = false;

    #[Url()]
    public $redirect = '';

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ];
    }

    public function authenticate()
    {
        $this->validate();

        $credentials = $this->only('email', 'password');

        if (Auth::attempt($credentials, $this->rememberMe)) {
            if (!empty($this->redirect)) {
                return redirect($this->redirect);
            }

            return redirect()->intended(route('iam.users'));
        }

        return redirect()->route('iam.login')->withError('Login Failed: Your user ID or password is incorrect!');
    }
}
