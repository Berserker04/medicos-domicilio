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
                                    <form method="POST" action="{{ route('citas.store') }}">
                                        @csrf
                                        <input type="text" name="email" value="{{ $person->email }}" hidden>
                                        <div class="row g-3">
                                            <div class="col-12 ">
                                                <label for="inputName" class="form-label">Dirección</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="fas fa-route"></i>
                                                    </div>
                                                    <input name="direction" type="text" class="form-control radius-30 ps-5"
                                                        id="inputName" placeholder="Ingresar dirección">
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <label for="inputName" class="form-label">Celular</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="fas fa-phone-alt"></i>
                                                    </div>
                                                    <input name="cellPhone" type="text" class="form-control radius-30 ps-5"
                                                        id="inputName" placeholder="Ingresar celular">
                                                </div>
                                            </div>
                                            {{-- <div class="col-12 ">
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
                                            </div> --}}
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Descripción</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-envelope-fill"></i>
                                                    </div>
                                                    <textarea name="description" class="form-control radius-30 ps-5"
                                                        placeholder="Ingresa tu diagnostico"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="col-6">
                                                    <a href="/citas" class="btn btn-danger radius-30">Cancelar</a>
                                                    <button type="submit"
                                                        class="btn btn-primary radius-30">Registrar</button>
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

        <!--end page main-->

        
    </div>
@endsection
