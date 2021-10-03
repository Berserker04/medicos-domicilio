@extends('layouts.admin')

@section('content')

    <div class="wrapper">

        <!--start content-->
        <main class="authentication-content">
            <div class="container">
                <div class="mt-4">
                    <div class="card rounded-0 overflow-hidden shadow-none bg-white border">
                        <div class="row g-0">
                            <div class="col-12 col-xl-12 order-xl-2">
                                <div class="card-body p-4 p-sm-5">
                                    <h5 class="card-title">Registrando doctor</h5>
                                    <form method="POST" action="{{ route('citas.update', $appointment->id) }}">
                                        @method("PUT")
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-12 ">
                                                <label for="inputName" class="form-label">Cliente</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-person-circle"></i>
                                                    </div>
                                                    <input name="direction" type="text" class="form-control radius-30 ps-5"
                                                        id="inputName" placeholder="Ingresar dirección" disabled
                                                        value="{{ $appointment->client->firstName . ' ' . $appointment->client->lastName }}">
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <label for="inputName" class="form-label">Dirección</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-person-circle"></i>
                                                    </div>
                                                    <input name="direction" type="text" class="form-control radius-30 ps-5"
                                                        id="inputName" placeholder="Ingresar dirección" disabled
                                                        value="{{ $appointment->direction }}">
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <label for="inputName" class="form-label">Celular</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-person-circle"></i>
                                                    </div>
                                                    <input name="cellPhone" type="text" class="form-control radius-30 ps-5"
                                                        id="inputName" placeholder="Ingresar celular" disabled
                                                        value="{{ $appointment->cellPhone }}">
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <label for="inputName" class="form-label">Correo electronico</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-person-circle"></i>
                                                    </div>
                                                    <input name="cellPhone" type="text" class="form-control radius-30 ps-5"
                                                        id="inputName" placeholder="Ingresar celular" disabled
                                                        value="{{ $appointment->email }}">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Descripción</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-envelope-fill"></i>
                                                    </div>
                                                    <textarea name="description" class="form-control radius-30 ps-5"
                                                        placeholder="Descripción" disabled
                                                        value="{{ $appointment->description }}"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Asignar doctor</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-envelope-fill"></i>
                                                    </div>
                                                    <select class="single-select radius-30 ps-5" name="doctor_id"
                                                        id="">
                                                        <option class="form-control" value="">Seleccionar</option>
                                                        @foreach ($doctors as $doctor)
                                                            <option class="form-control" value="{{ $doctor->id }}">
                                                                {{ $doctor->person->firstName }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <label for="inputName" class="form-label">Fecha</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="fas fa-birthday-cake"></i>
                                                    </div>
                                                    <input name="date" type="date" class="form-control radius-30 ps-5"
                                                        id="inputName" placeholder="Enter Name">
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <label for="inputName" class="form-label">Hora</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="fas fa-birthday-cake"></i>
                                                    </div>
                                                    <input name="time" type="time" class="form-control radius-30 ps-5"
                                                        id="inputName" placeholder="Enter Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="col-6">
                                                    <a href="/citas" class="btn btn-danger radius-30">Cancelar</a>
                                                    <button type="submit"
                                                        class="btn btn-primary radius-30">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
@endsection
