<?php

namespace Modules\Setting\Livewire;

use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Modules\Setting\app\Models\Module;
use Modules\Setting\app\Repositories\ModuleRepository;
use Modules\Setting\app\Services\MenuService;

class Headers extends Component
{
    private MenuService $menuService;
    private ModuleRepository $moduleRepository;

    public Module $module;
    public array $menus;

    public function boot(
        MenuService $menuService,
        ModuleRepository $moduleRepository
    ) {
        $this->menuService = $menuService;
        $this->moduleRepository = $moduleRepository;
    }

    public function mount()
    {
        $path = Request::path();
        $pathArr = explode('/', $path);

        $this->module = $this->moduleRepository->getModuleByUri($pathArr[0]);
        $this->menus = $this->menuService->getMenus($pathArr[0], $this->module->id);
    }

    public function render()
    {
        return view('setting::livewire.partials.header');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return $this->redirectRoute('iam.login');
    }
}
