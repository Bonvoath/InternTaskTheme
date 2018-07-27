<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'Roles';
    public $timestamps = false;

    public static function validateRole(){
        $roles = array(
            'Name'=> 'required|unique:Roles'
        );
        return $roles;
    }
}
