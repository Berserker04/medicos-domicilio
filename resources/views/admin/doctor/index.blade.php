@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-lg-3 col-xl-2">
                    <a href="/doctores/create" class="btn btn-primary mb-3 mb-lg-0"><i class="bi bi-plus-square-fill"></i>
                        Agregar
                        doctor</a>
                </div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-header py-3">
            <div class="row g-3 align-items-center">
                {{-- <div class="col-lg-3 col-md-6 me-auto">
                    <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                                class="bi bi-search"></i></div>
                        <input class="form-control ps-5" type="text" placeholder="Buscar doctor">
                    </div>
                </div> --}}
                {{-- <div class="col-lg-2 col-6 col-md-3">
                    <select class="form-select">
                        <option>Todas las ocupaciones</option>
                        <option>Fashion</option>
                        <option>Electronics</option>
                        <option>Furniture</option>
                        <option>Sports</option>
                    </select>
                </div> --}}
            </div>
        </div>

        <div class="card-body">
            <div class="product-grid">
                <div class="row row-cols-1 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-3">
                    @foreach ($doctors as $doctor)
                        {{-- {{ dd($doctor) }} --}}
                        <div class="col">
                            <div class="card border shadow-none mb-0">
                                <div class="card-body text-center">
                                    <img src="/uploads/{{ $doctor->person['image'] }}" class="img-fluid mb-3" alt="" />
                                    <h6 class="product-title">{{ $doctor->person['firstName'] }}</h6>
                                    <p class="product-price fs-5 mb-1"><span>{{ $doctor->typeProfession['name'] }}</span>
                                    </p>
                                    {{-- <div class="rating mb-0">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </div>
                                    <small>74 Reviews</small> --}}
                                    <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3">
                                        <a href="/doctores/{{ $doctor->id }}/edit"
                                            class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i>
                                            Edit</a>
                                        <button form="form-delete" href="/doctores/{{ $doctor->id }}/delete"
                                            class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i>
                                            Delete</button>
                                        <form id="form-delete" method="POST" action="/doctores/{{ $doctor->id }}">
                                            @method("DELETE")
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
