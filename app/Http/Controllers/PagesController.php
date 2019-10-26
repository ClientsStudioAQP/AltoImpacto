<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elaboration;

class PagesController extends Controller
{
    public function index(){
        $proyectos = Elaboration::all();
        return view('pages.index', compact('proyectos'));
    }
}
