<?php

namespace App\Http\Controllers;

use App\Models\plays;
use Illuminate\Http\Request;

class PlaysController extends Controller
{
    public function index(){
        $count=plays::count();
        return view("welcome",["count"=>$count]);
    }

    public function store(Request $req){
        $play = new plays;
        $play->submission_id=1;
        $play->name = $req->name;
        $play->age = $req->age;
        $play->color = $req->color;
        
        $play->save();
    }
}
