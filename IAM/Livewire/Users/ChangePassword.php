<?php

namespace Modules\IAM\Livewire\Users;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Modules\IAM\app\Models\User;

class ChangePassword extends Component
{
    public $currentPassword = '';
    public $password = '';
    public $password_confirmation = '';
    public $successMessage = '';

    protected function rules()
    {
        return [
            'currentPassword' => 'required',
            'password' => 'required|min:8|confirmed',
        ];
    }

    public function message()
    {
        return [
            'password.required' => 'Bắt buộc nhập :attribute',
            'password.min' => ':attribute ít nhất 8 chữ số',
            'password.confirmed' => 'Xác nhận :attribute không chính xác',
        ];
    }
    public function render()
    {
        return view('iam::livewire.users.change-password')->layout('iam::components.layouts.app');
    }

    public function submit()
    {
        if (!\Hash::check($this->currentPassword, auth()->user()->password)) {
            $this->addError('currentPassword', 'Mật khẩu hiện tại không chính xác.');
            return;
        }

        $this->validate($this->rules(), $this->message());
        $user = User::find(auth()->user()->id);
        $user->password = bcrypt($this->password);
        $user->save();
        $this->successMessage = 'Đổi mật khẩu thành công';

        $this->currentPassword = $this->password = $this->password_confirmation = '';
    }
}
