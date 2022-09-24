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
                        
                        <table id="tableStudents" class="table table-hover">
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
    @include('app.modules.students.modals.update')
@endsection
@push('js')
    {{-- <script src="{{ asset('js/students.js') }}"></script> --}}

    <script>
        var table = $('#tableStudents').DataTable({
            processing: true, /* Muestra mensaje */
            serverSide: true, /* Carga los datos todos juntos, sin paginado, cuando se tiene en "false" */
            select: true, /* Sirve para seleccionar registros en la tabla */
            "initComplete": function (settings, json) {
                /* Una vez se termina de procesar */
                $('tbody tr').on('dblclick', function() {
                    let id = $(this).attr('id_target');
                    get_students(id);
                });
            },
            "drawCallback": function (settings) {
                /* Se ejecuta en cada cambio de pagina */
            },
            "createdRow": function (row, data, dataIndex) {
                /* Mientras se procesan los datos */
                let tr = $(row);
                tr.attr('id_target', data['id']);
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

        $('#btnUpdateStudents').on('click', function() {
            let tbody = $('#tableStudents tbody');/* Obtener el objeto del row */
            let tr = tbody.find('.selected');/* Obtener el select si existe */

            if (tr.length >= 1) {/* Validar si hay registros seleccionados */
                // console.log(true);
                let id = tr.attr('id_target');

                /* Realizamos la petisión hey al servidor */
                // axios.get('/get_student', {
                //     params: {
                //     ID: id
                //     }
                // })
                // .then(function (response) {
                //     let data = response.data;
                //     // console.table(data);
                //     $('#uPid').val(data[0].id); /* Se pone [0] porque solo es una cadena de datos la que regresa */
                //     $('#uPname').val(data[0].name);
                //     $('#uPage').val(data[0].age);
                //     $('#uPnum').val(data[0].num);
                //     $('#uPgrade').val(data[0].grade);
                //     $('#uPgroup').val(data[0].group);
                //     $('#updateModalStudents').modal('show');
                // })
                // .catch(function (error) {
                //     console.log(error);
                // })
                // .finally(function () {
                //     // always executed
                // });

                get_students(id);
            } else {
                // console.log(false);
                alert('Seleccione un registro');
            }
        });

        function get_students(id) {
            axios.get('/get_student', {
                params: {
                ID: id
                }
            })
            .then(function (response) {
                let data = response.data;
                // console.table(data);
                $('#uPid').val(data[0].id); /* Se pone [0] porque solo es una cadena de datos la que regresa */
                $('#uPname').val(data[0].name);
                $('#uPage').val(data[0].age);
                $('#uPnum').val(data[0].num);
                $('#uPgrade').val(data[0].grade);
                $('#uPgroup').val(data[0].group);
                $('#updateModalStudents').modal('show');
            })
            .catch(function (error) {
                console.log(error);
            })
            .finally(function () {
                // always executed
            });
        }
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
    {{-- @if (session('status-students') == 'success')
        <script>
            alert("Usuario agregado con éxito");
        </script>
    @endif --}}
@endpush