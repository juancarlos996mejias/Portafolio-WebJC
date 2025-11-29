@extends('layouts.app')

@section('title', 'Portal de Gestión Interna IDECABA — Caso de Estudio')

@section('content')

<div class="container py-5 fade-in">

    <!-- Botón volver -->
    <a href="{{ route('proyectos.index') }}" class="btn mb-4" 
       style="background:#1a3faa; color:#fff; border:none;">
        <i class="bi bi-arrow-left"></i> Volver a proyectos
    </a>

    <!-- Encabezado -->
    <h1 class="mb-3 fw-bold" style="font-size: 2.2rem; color:#1a3faa;">
        Portal de Gestión Interna IDECABA
    </h1>

    <p class="text-muted fs-5">
        El Portal Interno IDECABA es una herramienta clave utilizada por el Gobierno de la Ciudad de Buenos Aires 
        para administrar roles, usuarios y permisos asociados a la visualización de capas geoespaciales dentro del 
        visor oficial de mapas.  
        Su objetivo es garantizar un acceso controlado, seguro y segmentado a información territorial sensible 
        (transporte, catastro, ambiente, cultura, salud, red de gas, entre otros).
    </p>

    <!-- Imagen -->
   

    <!-- Sección Rol -->
    <div class="card p-4 shadow-sm border-0 mb-4">
        <h3 class="mb-3 fw-semibold">Mi Rol en el Proyecto</h3>

        <p class="text-muted fs-5" style="line-height: 1.7;">
            Me desempeñé como <strong>Analista Funcional Técnico</strong>, participando en el diseño, 
            documentación y validación integral del sistema. Mis actividades principales fueron:
        </p>

        <ul class="text-muted fs-5" style="line-height: 1.7;">
            <li>Relevamiento funcional con áreas técnicas y operativas del GCBA.</li>
            <li>Diseño de reglas de negocio para roles, permisos, perfiles y visibilidad de capas.</li>
            <li>Modelado UML (diagramas de casos de uso, secuencia, flujo y estados).</li>
            <li>Redacción de historias de usuario y criterios de aceptación para cada módulo.</li>
            <li>Especificación funcional detallada del ABM de usuarios, roles y capas temáticas.</li>
            <li>Pruebas funcionales y QA sobre flujos críticos del sistema.</li>
            <li>Acompañamiento al equipo de desarrollo durante la implementación.</li>
            <li>Validación final del sistema con stakeholders y soporte en adopción del portal.</li>
        </ul>
    </div>

    <!-- Funcionamiento -->
    <div class="card p-4 shadow-sm border-0 mb-4">
        <h3 class="mb-3 fw-semibold">Funcionamiento del Sistema</h3>

        <p class="text-muted fs-5" style="line-height: 1.7;">
            El portal permite administrar cómo cada usuario del GCBA accede y visualiza información geoespacial 
            dentro del visor oficial. Está dividido en módulos clave:
        </p>

        <br>

        <ul class="text-muted fs-5">

            <h4 class="fw-semibold">1. Módulo de Usuarios</h4>
            <br>
            <li>Alta, baja y modificación de usuarios internos.</li>
            <li>Asignación de roles y permisos según área o función.</li>
            <li>Control de accesos a información sensible.</li>

            <br>

            <h4 class="fw-semibold">2. Módulo de Roles</h4>
            <br>
            <li>Definición de perfiles: Público, Privado y Restringido.</li>
            <li>Permisos por capas, grupos temáticos o servicios específicos.</li>

            <br>

            <h4 class="fw-semibold">3. Gestión de Capas GIS</h4>
            <br>
            <li>Administración de capas geoespaciales y sus metadatos.</li>
            <li>Agrupamiento por temáticas: transporte, catastro, ambiente, salud, etc.</li>
            <li>Activación o bloqueo de capas según reglas del negocio.</li>

            <br>

            <h4 class="fw-semibold">4. Integración con el Visor GIS</h4>
            <br>
            <li>El usuario visualiza únicamente las capas asociadas a su rol.</li>
            <li>Validación dinámica de permisos en tiempo real.</li>

        </ul>
    </div>

    <!-- Tecnologías -->
    <div class="container my-5">

        <h2 class="mb-4"><p>Tecnologías Utilizadas</p></h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            <!-- SIG -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body bg-primary text-white rounded">
                        <h5 class="card-title">GIS</h5>
                        <p class="card-text">QGIS para análisis espacial y preparación de capas.</p>
                    </div>
                </div>
            </div>

            <!-- Python -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body bg-secondary text-white rounded">
                        <h5 class="card-title">Python</h5>
                        <p class="card-text">Automatización de procesos y validaciones.</p>
                    </div>
                </div>
            </div>

            <!-- GeoServer -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body bg-success text-white rounded">
                        <h5 class="card-title">GeoServer</h5>
                        <p class="card-text">Publicación de datos espaciales y servicios WMS/WFS.</p>
                    </div>
                </div>
            </div>

            <!-- React -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body bg-dark text-white rounded">
                        <h5 class="card-title">React</h5>
                        <p class="card-text text-white">Interfaz dinámica y moderna para el portal interno.</p>
                    </div>
                </div>
            </div>

            <!-- PostgreSQL -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body bg-warning rounded">
                        <h5 class="card-title">PostgreSQL + PostGIS</h5>
                        <p class="card-text">Base de datos espacial para capas y permisos.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Galería -->
    <div class="card shadow-sm p-4 border-0 mb-5">
        <h3 class="mb-3">Galería del Proyecto</h3>
        <a href="https://idecaba.buenosaires.gob.ar/" target="_blank">Ir al Portal IDECABA</a>

        <div class="gallery-placeholder mt-3 p-5 bg-light text-center border rounded">
            <img src="/images/idecaba.png" alt="Gestión interna GCBA"
                 class="img-fluid rounded shadow">
        </div>
    </div>

    <!-- Resultados -->
    <div class="card p-4 shadow-sm border-0 mb-5">
        <h3 class="mb-3 fw-semibold">Resultados y Aportes</h3>

        <ul class="text-muted fs-5" style="line-height:1.7;">
            <li>Centralización completa de la administración de roles y permisos GIS.</li>
            <li>Procesos estandarizados y documentados para todas las áreas del GCBA.</li>
            <li>Reducción de errores y mejora en la trazabilidad del acceso a capas GIS.</li>
            <li>Mayor seguridad en la visualización de información geoespacial sensible.</li>
            <li>Documentación clara y mantenible para futuros equipos de desarrollo.</li>
        </ul>
    </div>

</div>

@endsection
