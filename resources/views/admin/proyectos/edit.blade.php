@extends('admin.layout')
@push('styles')
    <link rel="stylesheet" href="{{ asset('/admin/plugins/dropzonejs/dropzone.css') }}">
@endpush
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
        <form action="{{ route('admin.proyectos.update', $proyecto) }}" method="post">
            @csrf {{ method_field('PUT') }}
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Crear una Publicacion</h3>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Nombre del Proyecto</label>
                            <input name="name"
                                   value ="{{ old('name', $proyecto->name) }}"
                                   type="text"
                                   class="form-control"
                                   placeholder="Ingresa el Nombre del Proyecto">
                            {!! $errors->first('name', '<span class="help-block text-red">:message</span>') !!}
                        </div>
                        <div class="form-group">
                            <label for="">Link del Post en Redes Sociales</label>
                            <textarea name="link_post" class="form-control" cols="30" rows="3">{{old('link_post', $proyecto->link_post)}}</textarea>
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
                                    <option value="{{ $category->id }}"
                                    {{ old('category', $proyecto->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            {!! $errors->first('category', '<span class="help-block text-red">:message</span>') !!}
                        </div>
                        <div class="form-group">
                            <div class="dropzone"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Guardar Proyecto</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Puedes Subir multiples fotos pero solo se mostrara el primero de izquierda a derecha</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        @foreach($proyecto->photos as $photo)
                            <form action="{{ route('admin.photos.destroy', $photo) }}" method="post">
                                @csrf
                                {{ method_field('delete') }}

                                <div class="col-md-2">
                                    <button class="btn btn-danger btn-xs" style="position: absolute"><i class="fa fa-remove"></i></button>
                                    <img src="{{ url($photo->url) }}" alt="" class="img-responsive">
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@push('scripts')
    <script src="{{ asset('/admin/plugins/dropzonejs/dropzone.js') }}"></script>

    <script>
        var myDropzone = new Dropzone('.dropzone', {
            url: '/admin/proyectos/{{ $proyecto->id }}/photos',
            acceptedFiles: 'image/*',
            maxFilesize: 2,
            maxFiles:1,
            paramName: 'photo',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            dictDefaultMessage: 'Arrastra la foto del proyecto aqui'
        });

        myDropzone.on('error', function(file, res) {
            var message = res.errors.photo[0];

            $('.dz-error-message:last > span').text(message);
        });

        Dropzone.autoDiscover = false;
    </script>
@endpush
