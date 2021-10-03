@extends('layouts.admin')

@section('content')
    @if (Auth::user()->role_id == 3)
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-xl-2">
                        <a href="/citas/create" class="btn btn-primary mb-3 mb-lg-0"><i class="bi bi-plus-square-fill"></i>
                            Agregar cita</a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Citas</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Dirección</th>
                            <th>Celular</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Cliente</th>
                            <th>Doctor</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{dd($appointments[0])}} --}}
                        @foreach ($appointments as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->direction }}</td>
                                <td>{{ $item->cellPhone }}</td>
                                <td>{{ $item->date }}</td>
                                <td>{{ $item->time }}</td>
                                <td>{{ $item->client->firstName . $item->client->lastName }}</td>
                                <td>{{ isset($item->doctor) ? $item->doctor->firstName : '' }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->state }}</td>
                                <td>
                                    {{-- <a href="/doctores/1/edit" class="btn btn-sm btn-outline-primary"><i
                                            class="bi bi-pencil-fill"></i>
                                        Editar</a> --}}
                                    @if ($item->state != 'Cancelada')
                                        <button {{ $item->state == 'Cancelada' ? 'disabled' : '' }} form="form-delete"
                                            class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i>
                                            Cancelar</button>
                                        <form id="form-delete" method="POST" action="/citas/{{ $item->id }}">
                                            @method("DELETE")
                                            @csrf
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Dirección</th>
                            <th>Celular</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Cliente</th>
                            <th>Doctor</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
