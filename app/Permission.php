<?php
/**
 * Created by PhpStorm.
 * User: tanvi
 * Date: 9/10/2017
 * Time: 9:45 PM
 */

namespace App;
use Zizaco\Entrust\EntrustPermission;
use Zizaco\Entrust\Traits\EntrustPermissionTrait;

class Permission extends EntrustPermission
{
    use EntrustPermissionTrait;
}