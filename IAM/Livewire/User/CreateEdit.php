<?php

namespace Modules\IAM\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\IAM\Forms\User\CreateForm;
use Modules\IAM\app\Repositories\UserRepository;


class CreateEdit extends Component
{
    public CreateForm $createForm;
    private UserRepository $userRepository;
    public $modalTitle = 'Create New Member';
    public function boot(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    
    public function render()
    {
        return view('iam::livewire.user.create-edit');
    }
    
    public function create()
    {
        try {
            $formData = $this->createForm->store();
            DB::transaction(function () use ($formData) {
                $this->userRepository->create($formData);
            });
            $this->dispatch('close-modal'); 
            $this->dispatch('re-render-users-table');
            $this->dispatch('user-added', ['message' => 'User has been added successfully!']);
            $this->createForm->empty();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }

    #[On('editUser')]    
    public function showUserInfo($userId) {
        $this->dispatch('open-modal'); 
        $this->modalTitle = 'Edit Member';
        $user = $this->userRepository->find($userId);
        // dd($user->toArray());
        // $this->createForm = new CreateForm($user);
    }

}
