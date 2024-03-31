<?php

namespace Modules\Setting\app\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;
use Modules\Setting\app\Models\Menu;

class MenuRepository extends BaseRepository
{
    public function getModel()
    {
        return Menu::class;
    }

    public function getMenuByModuleIdParentId(int $moduleId, int $parentId): Collection
    {
        return $this->model->where('module_id', $moduleId)->where('parent_id', $parentId)
            ->select('id', 'module_id', 'parent_id', 'title', 'icon', 'uri', 'order')->get();
    }
}
