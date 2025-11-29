@extends('layouts.app')

@section('title', 'Proyectos')

@section('content')
<div class="container fade-in">

    <h1 class="text-center mb-4 section-title">
        <p>Mis Proyectos</p>
    </h1>

    <p class="text-center mb-5" style="color:#777;">
        Aquí encontrarás una selección de mis proyectos más relevantes.
        Cada uno representa desafíos reales y resultados concretos.
    </p>

    <div class="row justify-content-center">

        @foreach ($projects as $project)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="project-card glass p-3 h-100 d-flex flex-column">

                <div class="project-img-wrapper">
                    <img src="{{ $project['imagen'] }}" class="project-img" alt="{{ $project['nombre'] }}">
                </div>

                <h3 class="mt-3" style="color:#44444E !important;">{{ $project['nombre'] }}</h3>




                <a href="{{ route('proyectos.show', $project['slug']) }}"
                    class="btn w-100 mt-3"
                    style="background:#1a3faa; color:#fff; border:none;">
                    Ver proyecto
                </a>


            </div>
        </div>
        @endforeach

    </div>

</div>
@endsection