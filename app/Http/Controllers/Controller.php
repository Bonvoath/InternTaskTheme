<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $result = array(
        'isError' => true,
        'data' => '',
        'message' => ''
    );

    protected function completed(){
        $this->result['isError'] = false;
    }

    protected function error($message){
        $this->result['message'] = message;
    }

    protected function setData($data){
        $this->result['isError'] = false;
        $this->result['data'] = $data;
    }

    protected function invalid($validation)
    {
        $message = $validation->messages()->first();
        
        $this->result['message'] = $message;
    }

    protected function isProcess($permissinId)
    {
        return true;
    }
}