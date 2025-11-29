@extends('layouts.app')

@section('title', 'Plataforma de Gestión de Datos (PGD) | Portafolio JC')

@section('content')
<div class="container py-5">

    {{-- Encabezado --}}
   

      <a href="{{ route('proyectos.index') }}" class="btn mb-4" 
       style="background:#1a3faa; color:#fff; border:none;">
        <i class="bi bi-arrow-left"></i> Volver a proyectos
    </a>

    <h1 class="mb-4 fw-bold"><p>Plataforma de Gestión de Datos (PGD)</p></h1>
    <p class="lead text-muted">
        Sistema interno orientado a la administración integral de usuarios, permisos, roles y manipulación segura de datos institucionales, sin necesidad de acceder directamente a la base de datos.
    </p>

    {{-- Sección: Descripción General --}}
    <section class="mt-5">
        <h2 class="fw-semibold mb-3"><p>Descripción General</p></h2>
        <p>
            La Plataforma de Gestión de Datos (PGD) fue diseñada para centralizar y simplificar la administración de información crítica utilizada por diferentes áreas internas. 
            Antes de su implementación, los equipos necesitaban ingresar directamente a la base de datos para modificar registros, asignar roles o actualizar valores operativos, 
            generando riesgos, demoras y falta de trazabilidad.
        </p>
        <p>
            PGD introduce una capa segura y auditable para gestionar entidades, catálogos, tablas operativas, perfiles, permisos y configuraciones del ecosistema digital de la organización. 
            Permite que administradores y equipos autorizados puedan modificar la información mediante una interfaz intuitiva, estructurada y protegida.
        </p>
    </section>

    {{-- Sección: Mi Rol --}}
    <section class="mt-5">
        <h2 class="fw-semibold mb-3"><p>Mi Rol en el Proyecto</p></h2>
        <p>
            Participé en el proyecto como responsable funcional y analista de procesos, asegurando que los requerimientos de las distintas áreas se vieran correctamente reflejados en la plataforma. 
            Mi participación incluyó:
        </p>
        <ul>
            <li>Relevamiento funcional con equipos internos para definir flujos, restricciones y necesidades de administración.</li>
            <li>Diseño de historias de usuario, casos de uso y criterios de aceptación orientados al desarrollo incremental.</li>
            <li>Definición del modelo de permisos, roles y relaciones jerárquicas dentro del sistema.</li>
            <li>Análisis y diseño de ABM complejos para manipular datos sensibles con validaciones y trazabilidad.</li>
            <li>Elaboración de diagramas UML (casos de uso, actividades, modelos de dominio) para apoyar el desarrollo técnico.</li>
            <li>Testing funcional y validación QA sobre módulos nuevos y existentes.</li>
            <li>Acompañamiento al equipo de desarrollo para garantizar coherencia entre lo planificado y lo implementado.</li>
        </ul>
    </section>

    {{-- Sección: Funcionamiento del Sistema --}}
    <section class="mt-5">
        <h2 class="fw-semibold mb-3"><p>Funcionamiento del Sistema</p></h2>
        <p>
            La plataforma permite administrar datos operativos sin necesidad de acceso directo a la base de datos. 
            Entre sus principales funcionalidades se encuentran:
        </p>
        <ul>
            <li>Administración de usuarios, roles y permisos con control granular.</li>
            <li>ABM de entidades, catálogos y tablas auxiliares utilizadas por sistemas internos.</li>
            <li>Asignación dinámica de permisos por usuario o por grupo.</li>
            <li>Historial y auditoría de modificaciones.</li>
            <li>Validaciones, restricciones y controles para evitar errores en la manipulación de datos.</li>
            <li>Interfaz clara que guía al usuario y reduce el margen de error.</li>
        </ul>
    </section>

    {{-- Sección: Resultados y Aportes --}}
    <section class="mt-5">
        <h2 class="fw-semibold mb-3"><p>Resultados y Aportes</p></h2>
        <p>
            La implementación del PGD permitió un salto significativo en la gestión interna de datos. 
            Entre los principales resultados se destacan:
        </p>
        <ul>
            <li>Reducción total del acceso directo a la base de datos por parte de usuarios no técnicos.</li>
            <li>Aumento de la seguridad y trazabilidad en cada modificación realizada.</li>
            <li>Optimización del flujo de trabajo de áreas que antes dependían del equipo técnico.</li>
            <li>Disminución de errores operativos en la actualización de información crítica.</li>
            <li>Mayor autonomía y empoderamiento de los administradores funcionales.</li>
        </ul>
        <p>
            Mi aporte clave fue convertir procesos complejos en herramientas accesibles, seguras y alineadas a los criterios de calidad requeridos para su operación diaria.
        </p>
    </section>

    {{-- Tecnologías --}}
<h2 class="fw-semibold mb-3"><p>Tecnologías Utilizadas</p></h2>
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body bg-primary text-white">
                        <h5 class="card-title">QGIS</h5>
                        <p class="card-text">Software GIS de escritorio para análisis espacial y creación de capas.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body bg-secondary text-white">
                        <h5 class="card-title">Python</h5>
                        <p class="card-text">Utilizado para procesos geoespaciales y automatización de datos.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body bg-success text-white">
                        <h5 class="card-title">GeoServer</h5>
                        <p class="card-text">Servidor para publicar capas geográficas en el visor.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body bg-dark text-white">
                        <h5 class="card-title">React</h5>
                        <p class="card-text text-white">Biblioteca JavaScript empleada por el equipo técnico para la interfaz del visor.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body bg-warning">
                        <h5 class="card-title">PostgreSQL + PostGIS</h5>
                        <p class="card-text">Base de datos espacial para almacenar y consultar información territorial.</p>
                    </div>
                </div>
            </div>

        </div>
</div>

 <!-- GALERÍA -->
    <div class="card shadow-sm p-4 border-0 mb-5">
        <h3 class="mb-3">Galería del Proyecto</h3>

        <a href="https://visualizador-idecaba.buenosaires.gob.ar/#/" target="_blank">
            Ir al Visor de Mapas
        </a>

        <div class="gallery-placeholder mt-3 p-5 bg-light text-center border rounded">
            <img src="/images/pgd.webp" alt="Visor IDECABA" class="img-fluid rounded shadow">
        </div>
    </div>

</div>

@endsection
