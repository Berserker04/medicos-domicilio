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
                                    <form method="POST" action="{{ route('doctores.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" name="role_id" value="2" hidden>
                                        <div class="row g-3">
                                            <div class="col-12 ">
                                                <label for="inputName" class="form-label">Nombre</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-person-circle"></i>
                                                    </div>
                                                    <input name="firstName" type="text" class="form-control radius-30 ps-5"
                                                        id="inputName" placeholder="Enter Name">
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <label for="inputName" class="form-label">Apellidos</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-person-circle"></i>
                                                    </div>
                                                    <input name="lastName" type="text" class="form-control radius-30 ps-5"
                                                        id="inputName" placeholder="Enter Name">
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <label for="inputName" class="form-label">Documento</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="fas fa-address-card"></i>
                                                    </div>
                                                    <input name="document" type="text" class="form-control radius-30 ps-5"
                                                        id="inputName" placeholder="Enter Name">
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <label for="inputName" class="form-label">Fecha de nacimiento</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="fas fa-birthday-cake"></i>
                                                    </div>
                                                    <input name="birthDate" type="date" class="form-control radius-30 ps-5"
                                                        id="inputName" placeholder="Enter Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Foto</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="fas fa-image"></i>
                                                    </div>
                                                    <input accept="image/*" name="image" type="file"
                                                        class="form-control radius-30 ps-5" id="inputEmailAddress"
                                                        placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Tipo de
                                                    profesión</label>
                                                <div class="ms-auto position-relative">
                                                    {{-- {{dd($typeProfessions)}} --}}
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="fas fa-user-tie"></i>
                                                    </div>
                                                    <select class="single-select radius-30 ps-5" name="typeProfession_id" id="">
                                                        <option class="form-control" value="">Seleccionar</option>
                                                        @foreach ($typeProfessions as $typeProfession)
                                                            <option class="form-control" value="{{ $typeProfession->id }}">
                                                                {{ $typeProfession->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Correo</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-envelope-fill"></i>
                                                    </div>
                                                    <input name="email" type="email" class="form-control radius-30 ps-5"
                                                        id="inputEmailAddress" placeholder="Email">
                                                </div>
                                                {{-- {{dd}} --}}
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Contraseña</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-lock-fill"></i>
                                                    </div>
                                                    <input name="password" type="password"
                                                        class="form-control radius-30 ps-5" id="inputChoosePassword"
                                                        placeholder="Password">
                                                </div>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Confirmar
                                                    contraseña</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-lock-fill"></i>
                                                    </div>
                                                    <input name="password_confirmation" type="password"
                                                        class="form-control radius-30 ps-5" id="inputChoosePassword"
                                                        placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="col-6">
                                                    <a href="/doctores" class="btn btn-danger radius-30">Cancelar</a>
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

        <footer class="bg-white border-top p-3 text-center">
            <p class="mb-0">Copyright © 2021. All right reserved.</p>
        </footer>

    </div>
@endsection
