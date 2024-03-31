<?php

namespace Modules\IAM\app\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;
use Modules\IAM\app\Models\User;

class UserRepository extends BaseRepository
{
    public function getModel()
    {
        return User::class;
    }

}
