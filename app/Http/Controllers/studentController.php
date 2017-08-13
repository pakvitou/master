<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Facades\Datatables;
use App\student;
use App\Model\studentModel;

class studentController extends Controller
{
    public function index(){
        return view('student');
    }
    public function get_datatable(){
        // Using Eloquent
        // Using Eloquent
        $articles =Articles::all()->where('user_id',\auth()->id());
        return Datatables::eloquent($articles)->make(true);
    }

    function store(Request $request){
        $name = $request->input('name');
        $a = new studentModel();
        $a->store($name);
    }
    function getdb(){
        $student = new studentModel();
        $json = array();
        $json["status"] = "1";
        $json["data"] = $student->get();
        return json_encode($json);
    }
}

