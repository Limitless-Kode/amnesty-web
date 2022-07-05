<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function join()
    {
        return view('pages.join');
    }

    public function resources($query)
    {
        $response = DB::table($query)->where('deleted','=',0)->orderBy('id', 'desc')->get();
        return view('pages.resources', [$query => $response]);
    }
}
