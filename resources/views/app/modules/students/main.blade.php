@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col md-12">
                <div class="card">
                    <div class="card-header">
                        <button id="btnAddStudents" class="btn btn-success btn-sm">Agregar</button>
                        <button id="btnUpdateStudents" class="btn btn-primary btn-sm">Actualizar</button>
                        <button id="btnDeleteStudents" class="btn btn-danger btn-sm">Eliminar</button>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center my-2">Estudiantes</h3>
                        
                        <table id="tableStudents" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Folio</th>
                                    <th>Nombre</th>
                                    <th>Edad</th>
                                    <th>No. Cuenta</th>
                                    <th>Grado</th>
                                    <th>Grupo</th>
                                </tr>
                            </thead>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('app.modules.students.modals.add')
@endsection
@push('js')
    {{-- <script src="{{ asset('js/students.js') }}"></script> --}}

    <script>
        var table = $('#tableStudents').DataTable({
            processing: true, /* Muestra mensaje */
            serverSide: true, /* Carga los datos todos juntos, sin paginado, cuando se tiene en "false" */
            "initComplete": function (settings, json) {
                /* Una vez se termina de procesar */
            },
            "drawCallback": function (settings) {
                /* Se ejecuta en cada cambio de pagina */
            },
            "createdRow": function (row, data, dataIndex) {
                /* Mientras se procesan los datos */
            },
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
            ajax: "table_students",
            columns: [
                {data: 'id', name: 'id', className: 'id_students'},
                {data: 'name', name: 'name', className: 'name_students'},
                {data: 'age', name: 'age', className: 'age_students'},
                {data: 'num', name: 'num', className: 'num_students'},
                {data: 'grade', name: 'grade', className: 'grade_students'},
                {data: 'group', name: 'group', className: 'group_students'},
            ]
        });

        $('#btnAddStudents').on('click', function() {
            $('#addModalStudents').modal('show');
        });
    </script>

    {{-- @if (session('status-students') == 'error')
        <script>
            $(document).ready(function () {
                $('#addModalStudents').modal('show');
            });
        </script>
    @endif --}}
    @if ($errors->any())
        <script>
            $(document).ready(function () {
                $('#addModalStudents').modal('show');
            });
        </script>
    @endif
    @if (session('status-students') == 'success')
        <script>
            alert("Usuario agregado con éxito");
        </script>
    @endif
@endpush