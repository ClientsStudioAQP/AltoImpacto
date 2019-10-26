@extends('admin.layout')
@section('header')
    <h1>
        Nuevo
        <small>Proyecto</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Nuevo Proyecto</li>
    </ol>
@stop
@section('content')
    <div class="row">
        <form action="{{ route('admin.proyectos.store') }}" method="post">
            @csrf
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Crear una Publicacion</h3>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Nombre del Proyecto</label>
                            <input name="name" type="text" class="form-control" placeholder="Ingresa el Nombre del Proyecto">
                        </div>
                        <div class="form-group">
                            <label for="">Link de la Publicacion en redes sociales</label>
                            <textarea name="link_post" class="form-control" cols="30" rows="4"></textarea>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Categoria</label>
                            <select name="category" id="" class="form-control">
                                <option value="">Selecciona una Categoria</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Guardar Proyecto</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@stop
