<?php

namespace Modules\Setting\app\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;
use Modules\Setting\app\Models\Module;

class ModuleRepository extends BaseRepository
{
    protected int $cacheLifetime = 60 * 60 * 24 * 30;

    public function getModel()
    {
        return Module::class;
    }

    public function getMenusSideBar(): Collection
    {
        $cacheName = "get_menu_side_bar";

        if (Cache::store('octane')->has($cacheName)) {
            $result = Cache::store('octane')->get($cacheName);
        } else {
            $result = $this->model->select('id', 'title', 'icon', 'uri')->orderBy('order')->get();
            Cache::store('octane')->put($cacheName, $result, $this->cacheLifetime);
        }

        return $result;
    }

    public function getModuleByUri(string $uri): ?Module
    {
        return $this->model->where('uri', $uri)->first();
    }
}
