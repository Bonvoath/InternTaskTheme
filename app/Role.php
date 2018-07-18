<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'Roles';

    public static function validateRole(){
        $roles = array(
            'name'=> 'required|unique:Roles'
        );

        return $roles;
    }
}
