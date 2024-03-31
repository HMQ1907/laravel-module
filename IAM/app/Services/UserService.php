<?php

namespace Modules\IAM\app\Services;

use Illuminate\Support\Facades\Cache;
use Modules\IAM\app\Repositories\UserRepository;

class UserService extends BaseService
{
    protected int $cacheLifetime = 60 * 60 * 24 * 30;

    protected UserRepository $userRepository;

    public function __construct(
        UserRepository $userRepository,
    )
    {
        $this->userRepository = $userRepository;
    }

}
