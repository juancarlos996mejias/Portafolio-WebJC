@extends('layouts.app')

@section('title', 'Soluciones GIS GCBA — Caso de Estudio')

@section('content')

<div class="container py-5 fade-in">

    <!-- Volver -->
  
    <a href="{{ route('proyectos.index') }}" class="btn mb-4" 
       style="background:#1a3faa; color:#fff; border:none;">
        <i class="bi bi-arrow-left"></i> Volver a proyectos
    </a>

<!-- TÍTULO PRINCIPAL -->
    <h1 class="mb-3 fw-bold" style="font-size: 2.2rem; color:#1a3faa;">
        Visor de Mapas IDECABA
    </h1>

    
    

    <!-- DESCRIPCIÓN GENERAL -->
    <p class="text-muted fs-5">
        Como <strong>Analista Funcional Técnico</strong>, lideré todo el proceso de especificación, documentación y validación funcional del sistema, asegurando que la plataforma cumpliera con las necesidades de usuarios públicos, técnicos y administrativos del GCBA. Mi trabajo combinó análisis funcional, diseño de experiencias GIS, definición de reglas de negocio y aseguramiento de calidad.
        <br><br>
        Mi trabajo se enfocó en analizar, definir y validar el comportamiento interactivo del visor: visualización de capas, herramientas de medición, dibujo, impresión, búsqueda avanzada y experiencia del usuario en la navegación geográfica. El objetivo fue garantizar un visor ágil, intuitivo y alineado a los requerimientos de uso ciudadano y técnico.
    </p>

    <!-- MI ROL -->
    <!-- Mi Rol -->
<div class="card shadow-sm p-4 border-0 mb-4">
    <h3 class="mb-3">Mi Rol en el Proyecto</h3>

    <p class="text-muted fs-5" style="font-size: 1.05rem;">
        Como Analista Funcional Técnico GIS dentro de GeoSystems, participé en la definición integral del comportamiento del Visor de Mapas IDECABA, colaborando con equipos técnicos, producto y usuarios finales. Mis tareas abarcaron análisis, diseño funcional, documentación y validación de la experiencia del usuario dentro del mapa.
    </p>

    <ul class="text-muted fs-5" style="line-height: 1.8;">

        <li><strong>Relevamiento funcional completo</strong> con áreas operativas, ciudadanos y equipos técnicos para comprender necesidades reales de uso del visor.</li>

        <li><strong>Construcción de Historias de Usuario</strong> orientadas a perfiles diferenciados (usuarios públicos, técnicos y administrativos) describiendo objetivos, acciones esperadas y valor funcional.</li>

        <li><strong>Elaboración de Casos de Uso</strong> detallando cómo cada usuario interactúa con el mapa: encender y apagar capas, consultar información, usar herramientas de análisis y navegar por el visor.</li>

        <li><strong>Definición de Criterios de Aceptación</strong> para cada funcionalidad clave del visor: identificación en capas, medición, dibujo, impresión, búsqueda, rendimiento, carga de capas y experiencia de usuario.</li>

        <li><strong>Documentación UML</strong> de flujos principales (diagramas de actividad, casos de uso y secuencia) para estandarizar la lógica del visor y alinear a desarrollo y QA.</li>

        <li><strong>Especificación funcional de herramientas del visor</strong>: medir superficies/distancias, dibujar geometrías, imprimir el mapa, identificar objetos y navegar con controles dinámicos.</li>

        <li><strong>Diseño y validación del buscador geográfico</strong> (capas, direcciones, entidades) incluyendo reglas de autocompletado, jerarquías y relevancia de resultados.</li>

        <li><strong>Pruebas funcionales</strong> en escenarios reales y de carga, asegurando rendimiento fluido, estabilidad del visor y correcta visualización de múltiples capas simultáneas.</li>

        <li><strong>Acompañamiento al equipo de desarrollo</strong> para validar la correcta implementación de la lógica definida para capas, herramientas y comportamiento visual.</li>
    </ul>
</div>


    <!-- PROBLEMA -->
    <div class="card shadow-sm p-4 border-0 mb-4">
        <h3 class="mb-3">El Problema</h3>
        <p class="text-muted fs-5" style="line-height: 1.7;">
            El Gobierno de la Ciudad necesitaba un visor GIS moderno y funcional que permitiera a los usuarios interactuar de manera sencilla con información territorial. 
            <br><br>
            El visor anterior presentaba limitaciones en organización de capas, rendimiento, herramientas de análisis y facilidad de uso, dificultando la consulta clara y dinámica de los datos geoespaciales.
        </p>
    </div>

    <!-- SOLUCIÓN -->
    <div class="card shadow-sm p-4 border-0 mb-4">
        <h3 class="mb-3">La Solución</h3>
        <p class="text-muted fs-5">
            A partir del análisis funcional, se definió una experiencia más intuitiva y robusta para los usuarios del Visor IDECABA:
        </p>

        <ul class="text-muted fs-5" style="line-height: 1.8; margin-top: 1rem;">

            <h4>1. Visualización dinámica de capas</h4>
            <li>Activación y desactivación de capas con respuesta inmediata en el mapa.</li>
            <li>Organización por temáticas (Ambiente, Cultura, Catastro, Transporte, etc.).</li>
            <li>Control del orden de visualización y superposición.</li>

            <br><h4>2. Panel informativo de capas</h4>
            <li>Consultas de metadatos, atributos y descripciones.</li>
            <li>Acciones rápidas: ver información, abrir servicios, descargar datos.</li>

            <br><h4>3. Buscador geográfico avanzado</h4>
            <li>Búsqueda por capas disponibles.</li>
            <li>Direcciones, calles y lugares de referencia.</li>
            <li>Entidades geográficas con autocompletado validado.</li>

            <br><h4>4. Herramientas de análisis interactivo</h4>
            <li>Medición de distancias, áreas y coordenadas.</li>
            <li>Dibujo de puntos, líneas y polígonos sobre el mapa.</li>
            <li>Identificación de elementos mediante clic sobre la capa activa.</li>
            <li>Impresión del mapa con configuraciones personalizadas.</li>

            <br><h4>5. Navegación y experiencia del usuario</h4>
            <li>Zoom, paneo y ajuste automático a la extensión de las capas.</li>
            <li>Validación del rendimiento al cargar múltiples capas simultáneamente.</li>
        </ul>
    </div>

    <!-- RESULTADOS -->
    <div class="card shadow-sm p-4 border-0 mb-4">
        <h3 class="mb-3">Resultados del Proyecto</h3>

        <ul class="text-muted fs-5" style="line-height: 1.8;">
            <li>Un visor más ágil, intuitivo y accesible para todo tipo de usuarios.</li>
            <li>Interacción clara y dinámica con información geográfica compleja.</li>
            <li>Herramientas GIS más completas y fáciles de usar.</li>
            <li>Procesos de consulta de datos territoriales más rápidos y precisos.</li>
        </ul>
    </div>

    <!-- TECNOLOGÍAS -->
    <div class="container my-5">
        <h2 class="mb-4"><p>Tecnologías Utilizadas</p></h2>

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
            <img src="/images/visorMapa.png" alt="Visor IDECABA" class="img-fluid rounded shadow">
        </div>
    </div>

</div>

@endsection
