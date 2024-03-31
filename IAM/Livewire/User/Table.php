<?php

namespace Modules\IAM\Livewire\User;

use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\IAM\app\Repositories\UserRepository;

class Table extends Component
{
    use WithPagination;

    private UserRepository $userRepository;

    #[Url(as: 'per_page')]
    public int $perPage = 20;

    public function boot(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    #[On('re-render-users-table')]
    public function render()
    {
        $users = $this->userRepository->paginate($this->perPage);

        return view('iam::livewire.user.table', [
            'users' => $users
        ]);
    }
}
