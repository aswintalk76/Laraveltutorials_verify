<?php

namespace App\Http\Controllers;

use App\Models\Ajax;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function form_submit(Request $request){
        //return $request->post();
        $model= new Ajax();
        $model->name=$request->post('name');
        $model->email=$request->post('email');
        $model->save();
        return ["msg"=>"Data Inserted"];
    }
    
}
