<div class="modal fade" id="elaborationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{ route('admin.proyectos.store') }}" method="post">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" >Ingresa el Nombre del Proyecto</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Ingresa el Nombre del Proyecto" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
    </form>
</div>
