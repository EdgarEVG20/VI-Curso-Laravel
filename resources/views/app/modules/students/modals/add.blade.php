<div class="modal fade" id="addModalStudents" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Estudiante</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('students.add') }}" method="POST">
            @csrf
            <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Edad</label>
                        <input type="number" min="10" class="form-control" id="age" name="age">
                    </div>
                    <div class="mb-3">
                        <label for="num" class="form-label">Numero de Cuenta</label>
                        <input type="text" class="form-control" id="num" name="num">
                    </div>
                    <div class="mb-3">
                        <label for="grade" class="form-label">Grado</label>
                        <input type="text" class="form-control" id="grade" name="grade">
                    </div>
                    <div class="mb-3">
                        <label for="group" class="form-label">Grupo</label>
                        <input type="text" class="form-control" id="group" name="group">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
