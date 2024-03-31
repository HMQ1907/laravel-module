<?php

namespace Modules\Setting\Livewire;

use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Modules\Setting\app\Repositories\ModuleRepository;

class Offcanvas extends Component
{
    public $modules;

    public function mount(ModuleRepository $moduleRepository)
    {

        $this->modules = $moduleRepository->getMenusSideBar();
        // dump($this->modules);
        // throw new Exception('test');
    }

    public function render()
    {
        return view('setting::livewire.offcanvas');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return $this->redirectRoute('iam.login');
    }
}
