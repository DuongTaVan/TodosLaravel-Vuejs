<?php

namespace App\Http\Controllers;
use App\Todo;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Http\Request;

class StatusController extends BaseController
{
    public function getListByStatus($status){
        $todos=Todo::where('status',$status)->orderBy('created_at','desc')->get();
        $message='Get Todos Cuccess';
        return $this->sendResponse($todos->toArray(),$message);
    }
}
