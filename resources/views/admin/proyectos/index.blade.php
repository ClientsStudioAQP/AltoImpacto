@extends('admin.layout')
@push('styles')
    <link rel="stylesheet" href="{{asset('/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endpush

@section('header')
    <h1>
        Listado de
        <small>Proyectos</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Listado de Proyectos</li>
    </ol>
@stop
@section('content')
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Registro de Proyectos</h3>
            <button class="btn btn-success pull-right" data-toggle="modal" data-target="#elaborationModal"><i class="fa fa-plus"></i> Agregar Nuevo Proyecto</button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="post-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo del Proyecto</th>
                    <th>Publicacion</th>
                    <th>Actualizacion</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($proyectos as $proyecto)
                    <tr>
                        <td>
                            {{ $proyecto->id }}
                        </td>
                        <td>
                            {{ $proyecto->name }}
                        </td>
                        <td>
                            {{ $proyecto->created_at }}
                        </td>
                        <td>
                            {{ $proyecto->updated_at }}
                        </td>
                        <td>
                            <a href="{{ route('inicio') }}" class="btn btn-xs btn-warning"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('admin.proyectos.edit', $proyecto) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                            <form method="post" action="{{ route('admin.proyectos.destroy', $proyecto) }}" style="display: inline">
                                @csrf
                                {{ method_field('delete') }}
                                <button class="btn btn-xs btn-danger">
                                    <i class="fa fa-times"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Titulo del Proyecto</th>
                    <th>Publicacion</th>
                    <th>Actualizacion</th>
                    <th>Acciones</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@stop

@push('scripts')
    <script src="{{ asset('/admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $('#post-table').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endpush

