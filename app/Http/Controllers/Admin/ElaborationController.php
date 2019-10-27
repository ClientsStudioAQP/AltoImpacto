<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Elaboration;
use App\Category;
use Illuminate\Support\Facades\Storage;

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
        $this->validate($request, ['name' => 'required']);
        $proyecto = Elaboration::create(['name' => $request->get('name')]);

        return redirect()->route('admin.proyectos.edit', $proyecto);
    }

    public function edit(Elaboration $proyecto)
    {
        $categories = Category::all();

        return view('admin.proyectos.edit', compact('categories','proyecto'));
    }

    public function update(Elaboration $proyecto,  Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
        ]);

        $proyecto->name = $request->get('name');
        $proyecto->link_post = $request->get('link_post');
        $proyecto->category_id = $request->get('category');
        $proyecto->save();

        return back()->with('flash', 'El proyecto ah sido guardada');
    }

    public function destroy(Elaboration $proyecto)
    {
        foreach($proyecto->photos as $photo )
        {
            $photo->delete();

            $photoPath = str_replace('storage', 'public', $photo->url);

            Storage::delete($photoPath);
        }

        $proyecto->delete();

        return redirect()->route('admin.proyectos.index')->with('flash', 'El Proyecto ah sido eliminado');
    }

}
