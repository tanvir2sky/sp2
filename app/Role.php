<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;
use Zizaco\Entrust\Traits\EntrustRoleTrait;

class Role extends EntrustRole
{
    use EntrustRoleTrait;
}
