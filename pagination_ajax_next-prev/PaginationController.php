<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\shop;
class PaginationController extends Controller
{
    function index()
    {
     $data = DB::table('shops')->simplePaginate(2);
        return view('pagination_parent', compact('data'));
    }

    function fetch(Request $request)
    {
     if($request->ajax())
     {
      $data = DB::table('shops')->simplePaginate(2);
         return view('pagination_child', compact('data'))->render();
     }
    }
}
