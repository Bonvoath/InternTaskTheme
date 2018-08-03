<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MstState extends Model
{
    protected $table = 'mststates';
    protected $primaryKey = 'id';

    public static function validateState(){
        $state = array(
            'name'=> 'required|unique:mststates',
        );
        return $state;
    }

}
