@extends('layouts.app')

@section('title', 'IKE Servicios | Portafolio')

@section('content')

<div class="container py-5">

<a href="{{ route('proyectos.index') }}" class="btn mb-4" 
       style="background:#1a3faa; color:#fff; border:none;">
        <i class="bi bi-arrow-left"></i> Volver a proyectos
    </a>

    <!-- TÍTULO PRINCIPAL -->

    <h1 class="mb-3 fw-bold" style="font-size: 2.2rem; color:#1a3faa;">
        IKE – Plataforma Web de Gestión de Servicios Multiasistencia
    </h1>
    
        
    <!-- DESCRIPCIÓN GENERAL -->
    <section class="mb-5">
        <h2 class="fw-semibold mb-3"><p>Descripción General</p></h2>

        <p>
            IKE es una plataforma integral de servicios de asistencia orientada a resolver imprevistos del 
            hogar, salud, viajes, mascotas, asistencia vial, temas legales y soporte tecnológico. 
            Los usuarios pueden solicitar servicios directamente desde la web o a través de convenios con 
            entidades bancarias y aseguradoras.
        </p>

        <p>
            El sistema gestiona la interacción entre usuarios y prestadores de servicio (veterinarias, técnicos,
            cerrajeros, grúas, especialistas médicos, etc.), permitiendo administrar solicitudes, derivaciones,
            turnos, historial y seguimiento de casos en tiempo real.
        </p>

        <p>
            Una de las verticales más importantes es <strong>Vetify</strong>, plataforma de atención para mascotas que 
            conecta usuarios con veterinarias y operadores especializados.
        </p>
    </section>

    <!-- MI ROL EN EL PROYECTO -->
    <section class="mb-5">
        <h2 class="fw-semibold mb-3"><p>Mi Rol en el Proyecto</p></h2>

        <p>Participé como Analista Funcional y responsable de mejoras operativas en los módulos principales. Mis tareas incluyeron:</p>

        <ul>
            <li>Relevamiento de procesos y definición de mejoras en los flujos de solicitud de servicios.</li>
            <li>Optimización de formularios de afiliación para IKE y Vetify (hogar, mascotas, viajes, legal, etc.).</li>
            <li>Revisión funcional del panel de prestadores y mejora de la administración de turnos y casos.</li>
            <li>Redacción de historias de usuario, casos de uso y criterios de aceptación.</li>
            <li>Diseño de flujos UML para procesos de solicitud, derivación y atención.</li>
            <li>Testing funcional para validar nuevos módulos, correcciones y mejoras.</li>
            <li>
                Análisis de UX y sugerencias para simplificar la interacción del usuario final y reducir fricción en
                el proceso de carga de datos.
            </li>
            <li>Acompañamiento al equipo de desarrollo para asegurar correcta implementación.</li>
        </ul>
    </section>

    <!-- FUNCIONAMIENTO DEL SISTEMA -->
    <section class="mb-5">
        <h2 class="fw-semibold mb-3"><p>Funcionamiento del Sistema</p></h2>

        <p>El sistema opera a través de módulos que conectan usuarios, operadores internos y prestadores:</p>

        <ul>
            <li><strong>Portal de usuarios:</strong> afiliación online, solicitud de servicios y seguimiento del caso.</li>
            <li><strong>Motor de derivación:</strong> asigna automáticamente un prestador según servicio, zona y disponibilidad.</li>
            <li><strong>Panel de prestadores:</strong> recepción de solicitudes, confirmación, derivaciones y cierre de casos.</li>
            <li><strong>Servicios incluidos:</strong>
                <ul>
                    <li>Hogar (electricidad, gas, cerrajería, plomería)</li>
                    <li>Asistencia médica y legal</li>
                    <li>Asistencia en viajes</li>
                    <li>Soporte tecnológico</li>
                    <li>Asistencia vial</li>
                    <li>Mascotas (Vetify)</li>
                </ul>
            </li>
            <li>
                <strong>Vetify:</strong> módulo especializado para atención veterinaria con turnos, historial, derivaciones 
                a centros asociados y seguimiento post atención.
            </li>
        </ul>

        <p>
            El sistema permite centralizar toda la operación, asegurando trazabilidad, control y respuesta rápida 
            para emergencias o servicios programados.
        </p>
    </section>

    <!-- RESULTADOS Y APORTES -->
    <section class="mb-5">
        <h2 class="fw-semibold mb-3"><p>Resultados y Aportes</p></h2>

        <ul>
            <li>Mejora en la experiencia del usuario final, reduciendo pasos en la solicitud de servicios.</li>
            <li>Optimización de la carga y procesamiento de datos en Vetify.</li>
            <li>Reducción de errores operativos mediante reglas claras y validaciones funcionales.</li>
            <li>Documentación funcional completa del flujo entre clientes y prestadores.</li>
            <li>Aumento de eficiencia en el área de soporte técnico y atención al usuario.</li>
            <li>Mayor fluidez en el proceso de derivación hacia prestadores asociados.</li>
        </ul>

        <p>
            Estos aportes permitieron mejorar significativamente la operación interna y la experiencia tanto de 
            usuarios finales como prestadores asociados.
        </p>

    </section>

<!-- GALERÍA -->
    <div class="card shadow-sm p-4 border-0 mb-5">
        <h3 class="mb-3">Galería del Proyecto</h3>

        <a href="https://www.ikeargentina.com.ar/institucional/homeview.aspx" target="_blank">
            Ir a ikeargentina
        </a>

        <div class="gallery-placeholder mt-3 p-5 bg-light text-center border rounded">
            <img src="/images/ikeArgentina.png" alt="Visor IDECABA" class="img-fluid rounded shadow">
        </div>
    </div>




</div>

@endsection
