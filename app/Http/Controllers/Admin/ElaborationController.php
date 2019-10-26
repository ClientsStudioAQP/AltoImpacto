<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Elaboration;
use App\Category;

class ElaborationController extends Controller
{
    public function index()
    {
        $proyectos = Elaboration::all();

        return view('admin.proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.proyectos.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $proyecto = new Elaboration;
        $proyecto->name = $request->get('name');
        $proyecto->link_post = $request->get('link_post');
        $proyecto->category_id = $request->get('category');
        $proyecto->save();

        return back()->with('flash', 'El proyecto ah sido registrado');
    }
}
