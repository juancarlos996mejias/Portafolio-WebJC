@extends('layouts.app')

@section('title', 'IDECABA – Sistema GIS')

@section('content')

<!-- BANNER -->
<section class="project-banner fade-in"
         style="background: linear-gradient(135deg, #0B141D 0%, #0A6BDD 100%); 
                border-radius: 22px; padding: 50px;">

    <h1 class="fw-bold text-white">IDECABA – Sistema GIS</h1>
    <p class="text-light" style="max-width: 700px;">
        Plataforma de visualización geoespacial para el Gobierno de la Ciudad (GCBA),
        integrando datos públicos y herramientas de análisis territorial.
    </p>

    <div class="mt-3">
        <span class="tag">GIS</span>
        <span class="tag">UML</span>
        <span class="tag">APIs</span>
        <span class="tag">SQL</span>
        <span class="tag">Relevamiento</span>
    </div>
</section>



<!-- CONTENIDO PRINCIPAL -->
<section class="mt-5 fade-in">

    <!-- CONTEXTO -->
    <h3 class="sec-title">Contexto del Cliente</h3>
    <p>
        IDECABA es la Infraestructura de Datos Espaciales del Gobierno de la Ciudad de Buenos Aires.
        Permite consultar información territorial y visualizar capas geográficas estratégicas.
    </p>


    <!-- PROBLEMA -->
    <h3 class="sec-title">Problema / Necesidad</h3>
    <p>
        El GCBA necesitaba modernizar la plataforma para mejorar la accesibilidad de datos,
        optimizar la experiencia de usuarios técnicos y ciudadanos,
        y permitir nuevas integraciones con APIs geoespaciales.
    </p>


    <!-- MI ROL -->
    <h3 class="sec-title">Mi Rol en el Proyecto</h3>
    <ul>
        <li>Relevamiento funcional con áreas de GCBA.</li>
        <li>Análisis y definición de requerimientos funcionales y técnicos.</li>
        <li>Diseño UML de casos de uso, flujos y entidades.</li>
        <li>Validación técnica con el equipo GIS y desarrollo.</li>
        <li>Testing funcional de integraciones y visualizador GIS.</li>
        <li>Documentación funcional completa del sistema.</li>
    </ul>


    <!-- SOLUCIÓN FUNCIONAL -->
    <h3 class="sec-title">Solución Funcional</h3>
    <p>
        Diseño de una plataforma que permite:
    </p>
    <ul>
        <li>Visualizar capas geoespaciales filtradas por categorías.</li>
        <li>Consultar detalles de cada punto, polígono o línea.</li>
        <li>Integración con motores GIS como GeoServer.</li>
        <li>Gestión de metadatos y catálogo de datasets.</li>
    </ul>


    <!-- SOLUCIÓN TÉCNICA -->
    <h3 class="sec-title">Solución Técnica</h3>
    <ul>
        <li>Arquitectura cliente–servidor con APIs REST.</li>
        <li>Consumo de servicios GIS (WMS / WFS).</li>
        <li>Bases de datos espaciales y consultas optimizadas.</li>
        <li>Implementación de patrones de diseño.</li>
    </ul>


    <!-- DIAGRAMAS -->
    <h3 class="sec-title">Diagramas UML</h3>

    <p class="mb-2">Caso de Uso Principal</p>
    <img src="/images/uml/idecaba-caso-uso.png" class="uml-img mb-4" alt="Caso de uso IDECABA">

    <p class="mb-2">Modelo de Datos</p>
    <img src="/images/uml/idecaba-erd.png" class="uml-img" alt="ERD IDECABA">



    <!-- RESULTADOS -->
    <h3 class="sec-title mt-5">Resultados del Proyecto</h3>
    <ul>
        <li>Mejor experiencia de usuario para técnicos y ciudadanos.</li>
        <li>Reducción de tiempos de acceso a información geográfica.</li>
        <li>Plataforma escalable para futuras integraciones GIS.</li>
    </ul>


    <!-- CTA FINAL -->
    <div class="mt-4">
        <a href="/proyectos" class="btn btn-primary px-4">
            
            Volver a proyectos
        </a>
    </div>

</section>

@endsection
