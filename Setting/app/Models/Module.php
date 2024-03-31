<?php

namespace Modules\Setting\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends BaseModel
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'modules';
}
