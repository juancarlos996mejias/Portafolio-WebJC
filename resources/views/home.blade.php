@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<!-- HERO DARK TECH -->
<section class="py-5 fade-in glass"
    style="background: rgba(13,27,42,0.55); border-radius: 24px;">
    <div class="container py-5 text-white">


        <div class="container py-5 text-white">

            <div class="row align-items-center">

                <div class="col-md-7 mb-4">

                    <div class="badge px-4 py-3 mb-3"
                        style="background:#000000; color:#F9F8F6;">
                        Analista Funcional Técnico
                    </div>

                    <h1 class="display-5 fw-bold mb-3" style="color:#e0e1dd;">
                        Traduzco necesidades del negocio
                        <br>a soluciones funcionales y técnicas.
                    </h1>

                    <p class="lead" style="color:#c8d3df;">
                        Experiencia en UML, SQL, APIs, PHP/Laravel, GIS y metodologías ágiles.
                    </p>

                    <div class="mt-4">
                        <a href="/proyectos" class="btn btn-dark mb-4" style="background:#1a3faa; color:#fff; border:none;">
                            <i class="bi bi-folder2-open me-2"></i>Ver proyectos
                        </a>



                        <a href="/sobre-mi" class="btn btn-dark mb-4" style="background:#1a3faa; color:#fff; border:none;">
                            <i class="bi bi-person-lines-fill me-2"></i>Sobre mí
                        </a>
                    </div>
                </div>

                <div class="col-md-5 text-center">
                    <img
                        src="/images/fotoHome.jpg"
                        alt="Equipo analizando datos"
                        class="img-fluid hero-img"
                        style="max-width: 100%; border-radius: 12px;">

                </div>

            </div>

        </div>
</section>




<!-- SECCIÓN 2 - RESUMEN HABILIDADES -->
<!-- SECCIÓN 2 - ¿QUÉ HAGO? -->
<section class="mt-5 fade-in">
    <h2 class="section-title text-center mb-4">
        <p>¿Qué hago?</p>
    </h2>

    <div class="row text-center">

        <div class="col-md-4 mb-4">
            <div class="card card-custom card-premium card-ultimate fade-up h-100 p-4 icon-card">
                <i class="bi bi-search"></i>
                <h4 class="fw-bold mt-3">Análisis & Relevamiento</h4>
                <p class="mt-2 text-muted" style="color:#dce3eb !important;">

                    Transformo necesidades del negocio en requerimientos claros y procesables.
                </p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-custom card-premium card-ultimate fade-up h-100 p-4 icon-card">
                <i class="bi bi-diagram-3"></i>
                <h4 class="fw-bold mt-3">Diseño UML & Procesos</h4>
                <p class="mt-2 text-muted" style="color:#dce3eb !important;">

                    Casos de uso, secuencias, flujos BPMN y documentación funcional precisa.
                </p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-custom card-premium card-ultimate fade-up h-100 p-4 icon-card">
                <i class="bi bi-code-slash"></i>
                <h4 class="fw-bold mt-3">Validación Técnica</h4>
                <p class="mt-2 text-muted" style="color:#dce3eb !important;">

                    SQL, APIs REST, testing funcional y soporte técnico a desarrollo y QA.
                </p>
            </div>
        </div>

    </div>
</section>



<!-- CTA FINAL -->
<section class="my-5 fade-in text-center">
    <h2 class="section-title">
        <p>Explora mi trabajo</p>
    </h2>
    <p class="text-muted mb-4">Conoce mis proyectos como Analista Funcional Técnico.</p>


    <a href="/proyectos" class="btn btn-dark mb-4" style="background:#1a3faa; color:#fff; border:none;">
        <i class="bi bi-rocket-takeoff me-2"></i>Ver proyectos
    </a>




</section>


@endsection