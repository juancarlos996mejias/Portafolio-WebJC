@extends('layouts.app')

@section('title', 'FiberGIS | Portafolio')

@section('content')

<div class="container py-5 fade-in">

<a href="{{ route('proyectos.index') }}" class="btn mb-4" 
       style="background:#1a3faa; color:#fff; border:none;">
        <i class="bi bi-arrow-left"></i> Volver a proyectos
    </a>
    {{-- TÍTULO PRINCIPAL --}}


    <h1 class="mb-3 fw-bold" style="font-size: 2.2rem; color:#1a3faa;">
        FiberGIS – Infraestructura de Fibra Óptica
    </h1>

        <p class="text-muted fs-5">Geosystems S.A – Sistema Web de Gestión y Visualización de Red de Fibra</p>
    

  

    {{-- DESCRIPCIÓN GENERAL --}}
    <section class="mb-5">
        <h2 class="fw-semibold mb-3"><p>Descripción General</p></h2>
        <p>
            FiberGIS es una plataforma desarrollada por Geosystems S.A para el relevamiento, gestión y 
            visualización de la infraestructura de fibra óptica en la Ciudad Autónoma de Buenos Aires. 
            El sistema permite administrar trazas, nodos, cámaras, empalmes y componentes de la red,
            ofreciendo un visor web interactivo que facilita el análisis técnico y operativo.
        </p>
        <p>
            La solución está orientada a empresas de telecomunicaciones y áreas técnicas que requieren 
            acceder rápidamente a información geoespacial precisa para tareas de mantenimiento, 
            planificación de ampliaciones y resolución de incidentes.
        </p>
    </section>

    <hr>

    {{-- MI ROL EN EL PROYECTO --}}
    <section class="mb-5">
        <h2 class="fw-semibold mb-3"><p>Mi Rol en el Proyecto</p></h2>
        <p>
            Participé en el proyecto como parte del equipo funcional, con foco en la experiencia del usuario, 
            documentación y mejoras de usabilidad dentro del sistema. Mis responsabilidades principales fueron:
        </p>

        <ul>
            <li>Relevamiento funcional del uso real de cada módulo para identificar puntos críticos de aprendizaje.</li>
            <li>Creación del <strong>manual de usuario completo</strong> para técnicos, analistas y operadores.</li>
            <li>
                Diseño e implementación del <strong>tutorial dinámico contextual</strong>, que guía a usuarios nuevos 
                mediante modales explicativos y pasos interactivos dentro de la plataforma.
            </li>
            <li>
                Producción de <strong>videos explicativos cortos</strong> para módulos complejos (como creación de trazas, 
                edición de empalmes o carga de nodos).
            </li>
            <li>
                Definición de flujos de uso, casos de uso y redacción de criterios de aceptación para validar el onboarding interactivo.
            </li>
            <li>
                Pruebas funcionales (QA) del onboarding, evaluando claridad, tiempo de aprendizaje y comprensión de los usuarios nuevos.
            </li>
            <li>
                Acompañamiento al equipo técnico para asegurar la correcta integración del tutorial y su activación en escenarios específicos.
            </li>
        </ul>
    </section>

    {{-- FUNCIONAMIENTO DEL SISTEMA --}}
    <section class="mb-5">
        <h2 class="fw-semibold mb-3"><p>Funcionamiento del Sistema</p></h2>
        <p>
            FiberGIS se compone de un visor web geoespacial especializado en la representación de redes de fibra óptica. 
            Entre sus principales funcionalidades se encuentran:
        </p>

        <ul>
            <li>Visualización detallada de trazas, empalmes, cámaras y nodos geolocalizados.</li>
            <li>Gestión de componentes con modelos de datos avanzados (atributos técnicos, estados, capacidad).</li>
            <li>Interacción dinámica con capas técnicas para análisis y planificación.</li>
            <li>Consulta y trazabilidad de rutas, recorridos y conexiones entre puntos.</li>
            <li>Herramientas avanzadas: identificar, medir, buscar, explorar y analizar dependencias.</li>
        </ul>

        <p>
            Para usuarios nuevos, el sistema incorpora un <strong>tutorial interactivo</strong> que se activa al acceder por primera vez 
            o desde el menú de ayuda. Este tutorial se adapta a cada módulo y explica brevemente su propósito, herramientas 
            principales y flujo correcto de uso.
        </p>
    </section>

    {{-- RESULTADOS Y APORTES --}}
    <section class="mb-5">
        <h2 class="fw-semibold mb-3"><p>Resultados y Aportes</p></h2>
        <p>
            La incorporación de manuales, tutoriales y guías dinámicas permitió mejorar significativamente la experiencia 
            de usuarios nuevos y técnicos recién incorporados a la empresa. Algunos de los resultados clave fueron:
        </p>

        <ul>
            <li><strong>Reducción del tiempo de capacitación</strong> de nuevos usuarios en un 60%.</li>
            <li>
                <strong>Mayor autonomía</strong> en tareas complejas gracias a los tutoriales con videos integrados.
            </li>
            <li>
                Disminución de consultas internas al equipo técnico y mesa de ayuda.
            </li>
            <li>
                Documentación funcional completa que facilitó mejoras futuras y mantenimiento del software.
            </li>
            <li>
                Incremento en la adopción de módulos que anteriormente eran poco utilizados por falta de guía.
            </li>
        </ul>

        <p>
            Estos aportes fortalecieron el valor del producto y mejoraron la accesibilidad del sistema para todos los 
            perfiles de usuario dentro de la organización.
        </p>
    </section>

</div>


<div class="card shadow-sm p-4 border-0 mb-5">
        <h3 class="mb-3">Galería del Proyecto</h3>


        <div class="gallery-placeholder mt-3 p-5 bg-light text-center border rounded">
            <img src="/images/pgd_3.jpg" alt="Visor IDECABA" class="img-fluid rounded shadow">
        </div>

 <div class="gallery-placeholder mt-3 p-5 bg-light text-center border rounded">
            <img src="/images/pgd_2.jpg" alt="Visor IDECABA" class="img-fluid rounded shadow">
        </div>




    </div>

</div>

@endsection
