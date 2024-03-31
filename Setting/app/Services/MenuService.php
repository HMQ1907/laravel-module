<?php

namespace Modules\Setting\app\Services;

use Illuminate\Support\Facades\Cache;
use Modules\Setting\app\Repositories\MenuRepository;
use Modules\Setting\app\Repositories\ModuleRepository;

class MenuService extends BaseService
{
    protected int $cacheLifetime = 60 * 60 * 24 * 30;

    protected MenuRepository $menuRepository;
    protected ModuleRepository $moduleRepository;

    public function __construct(
        MenuRepository $menuRepository,
    )
    {
        $this->menuRepository = $menuRepository;
        $this->moduleRepository = app()->make(ModuleRepository::class);
    }

    public function getMenus($moduleName, int $moduleId): array
    {
        $cacheName = "get_menu_{$moduleName}";

        if (Cache::has($cacheName)) {
            $result = Cache::get($cacheName);
        } else {
            $result = $this->genearateMenus($moduleId);
            Cache::put($cacheName, $result, $this->cacheLifetime);
        }

        return $result;
    }

    protected function genearateMenus(int $moduleId, int $parentId = 0): array
    {
        $data = [];
        $menus = $this->menuRepository->getMenuByModuleIdParentId($moduleId, $parentId);

        foreach ($menus as $menu) {
            $tmp = $menu->toArray();
            $tmp['children'] = $this->genearateMenus($moduleId, $menu->id);

            $data[] = $tmp;
        }

        return $data;
    }
}
