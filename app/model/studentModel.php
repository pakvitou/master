<?php

namespace App\model;
use Illuminate\Support\Facades\DB;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    function _construct(){
        header('Content-Type:application\json');
    }
    function store($name){
        $this->table="vitou";
        $this->title=$name;
        $this->timestamps=true;
        $this->save();
    }
    function get(){
        return DB::table('vitou')->get();
    }
}
