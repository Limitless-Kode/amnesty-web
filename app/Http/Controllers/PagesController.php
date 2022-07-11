<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Slide;

class PagesController extends Controller
{
    public function index()
    {
        $slides = Slide::where('deleted', '=', 0)->get();
        return view('pages.index', ['slides' => $slides]);
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
