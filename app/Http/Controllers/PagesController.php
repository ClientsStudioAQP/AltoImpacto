<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elaboration;

class PagesController extends Controller
{
    public function index(){
        $proyectos = Elaboration::latest('created_at')->get();
        return view('pages.index', compact('proyectos'));
    }
}
