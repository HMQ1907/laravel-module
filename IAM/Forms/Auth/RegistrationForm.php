<?php

namespace Modules\IAM\Forms\Auth;

use Illuminate\Support\Facades\Hash;
use Livewire\Form;
use Modules\IAM\app\Models\User;

class RegistrationForm extends Form
{
    public $name = '';

    public $email = '';

    public $password = '';

    public $passwordConfirmation = '';

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:iam.users',
            'password' => 'required|min:8',
            'passwordConfirmation' => 'required_with:password|same:password|min:8',
        ];
    }

    public function store()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
    }
    public function test()
    {
        return $this->name;
    }
}
