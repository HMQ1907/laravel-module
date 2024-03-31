<?php

namespace Modules\IAM\Forms\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Form;

class CreateForm extends Form
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
            // 'avatar' => 'nullable'
        ];
    }

    public function store()
    {
        // $this->validate();
        return [
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            // 'avatar'=>$this->avatar,
        ];
    }

    public function empty(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->passwordConfirmation = '';
        // $this->avatar = '';
    }
}
