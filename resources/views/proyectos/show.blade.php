@extends('layouts.app')

@section('title', $proyecto['nombre'])

@section('content')

<div class="container py-5 fade-in">

    <!-- Botón volver -->
    <a href="{{ route('proyectos.index') }}" 
    class="btn btn-dark mb-4"
        style="background:#1a3faa; color:#fff; border:none;">
        ← Volver a proyectos
    </a>

    <!-- Título principal -->
   <h1 class="mb-3" style="color:#1a3faa;">
    {{ $proyecto['nombre'] }}
</h1>


    <p class="text-muted">{{ $proyecto['descripcion'] }}</p>

    <!-- Tecnologías -->
    @if (!empty($proyecto['tecnologias']))
        <div class="mb-4">
            @foreach ($proyecto['tecnologias'] as $tech)
                <span 
                    class="badge rounded-pill px-3 py-2 me-2" 
                    style="background:#eef3ff; color:#1a3faa; font-size:0.9rem;"
                >
                    {{ $tech }}
                </span>
            @endforeach
        </div>
    @endif

    <!-- Imagen -->
    <div class="mb-4">
        <img src="{{ $proyecto['imagen'] }}" 
             alt="{{ $proyecto['nombre'] }}" 
             class="img-fluid rounded shadow">
    </div>

    <!-- Detalles -->
    <div class="card p-4 shadow-sm border-0 mb-4">
        <h3 class="mb-3">Detalles del proyecto</h3>

        <p style="color:#444; line-height:1.7;">
            {{ $proyecto['detalles'] }}
        </p>
    </div>

    <!-- Botón para visita al sitio -->
    @if (!empty($proyecto['url']))
        <a href="{{ $proyecto['url'] }}" target="_blank" 
        class="btn btn-dark mb-4" style="background:#1a3faa; color:#fff; border:none;">
        
            Ver proyecto en producción
        </a>





    @endif

</div>

@endsection
