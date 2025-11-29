@extends('layouts.app')

@section('title', 'Sobre mí')

@section('content')

<!-- HERO -->
<section class="about-hero glass fade-in p-5 mb-5"
    style="border-radius: 22px;">

    <div class="row align-items-center">

        <!-- FOTO -->
        <div class="col-md-4 text-center mb-4">
            <img src="/images/logojc.png"
                alt="Foto Juan"
                class="about-photo">
        </div>

        <!-- TEXTO -->
        <div class="col-md-8">
            <h1 class="fw-bold mb-3">
                <p>Hola, soy Juan Carlos Mejías</p>
            </h1>

            <p class="lead mb-4">
                Analista Funcional Técnico especializado en traducir necesidades del negocio
                en soluciones claras, escalables y técnicamente viables. Conecto equipos de negocio,
                desarrollo y QA para asegurar entregables de alta calidad.
            </p>

            <!-- KPIs -->
            <div class="row text-center mt-4">
                <div class="col-md-4 mb-3">
                    <div class="kpi-card glass">
                        <h2 class="kpi-number">+12</h2>
                        <p class="kpi-text">Años de experiencia</p>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="kpi-card glass">
                        <h2 class="kpi-number">+5</h2>
                        <p class="kpi-text">Proyectos funcionales</p>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="kpi-card glass">
                        <h2 class="kpi-number">+7</h2>
                        <p class="kpi-text">Diagramas y procesos</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>


<!-- SKILL CARDS (3 categorías) -->
<section class="fade-in">

    <h2 class="section-title text-center mb-4">
        <p>Mis habilidades</p>
    </h2>

    <div class="row g-4">

        <!-- CARD 1 -->
        <div class="col-md-4">
            <div class="skill-card">
                <i class="bi bi-search skill-icon"></i>
                <h4 class="skill-title">Análisis Funcional</h4>
                <ul class="skill-list-premium">
                    <li>Relevamiento</li>
                    <li>Casos de uso</li>
                    <li>Historias de usuario</li>
                    <li>Documentación funcional</li>
                </ul>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4">
            <div class="skill-card">
                <i class="bi bi-diagram-3 skill-icon"></i>
                <h4 class="skill-title">Modelado & Diseño</h4>
                <ul class="skill-list-premium">
                    <li>UML</li>
                    <li>BPMN</li>
                    <li>Arquitectura lógica</li>
                    <li>Diagramas ERD</li>
                </ul>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4">
            <div class="skill-card glass">
                <i class="bi bi-cpu skill-icon"></i>
                <h4 class="skill-title">Técnico</h4>
                <ul class="skill-list-premium">
                    <li>SQL</li>
                    <li>APIs REST</li>
                    <li>Testing funcional</li>
                    <li>Laravel / PHP</li>
                </ul>
            </div>
        </div>

    </div>
</section>

<!-- ============================= -->
<!--  TECNOLOGÍAS Y HERRAMIENTAS  -->
<!-- ============================= -->

<section class="mt-5 fade-in">


    <h2 class="section-title text-center mb-4">
        <p>Tecnologías y Herramientas</p>
    </h2>

    <!-- CHIPS -->
    <div class="d-flex flex-wrap justify-content-center gap-3">

        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalUML">UML</button>
        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalVisio">Visio</button>
        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalbpmn">BPMN</button>
        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalTeams">Microsoft Teams</button>
        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalERD">Diagramas ERD</button>
        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalSQL">SQL</button>
        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalLaravel">Php/Laravel</button>
        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalVisual">Visio Studio Code</button>
        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalAPIs">APIs REST</button>
       

        <!-- NUEVOS -->
        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalFigma">Figma</button>
        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalJira">Jira</button>
        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalclickUp">ClickUp</button>
        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalPostman">Postman</button>
        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalGit">Git</button>
        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalDrawio">Draw.io</button>
        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalnotebooklm">notebooklm</button>
        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalplantuml">PlantUml</button>
        <button class="tech-chip" data-bs-toggle="modal" data-bs-target="#modalgpt">ChatGpt</button>

    </div>
</section>



<!-- ====================================== -->
<!--         MODALES DE CADA TECNOLOGÍA     -->
<!-- ====================================== -->

<!-- UML -->
<div class="modal fade" id="modalUML" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">UML - Modelado Visual</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p>Casos de uso, diagramas de secuencia, actividades y definiciones funcionales.</p>
                <img src="/images/uml.webp" alt="UML Ejemplo">
            </div>

        </div>
    </div>
</div>


<!-- SQL -->
<div class="modal fade" id="modalSQL" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">SQL - Consultas y Modelado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p>Validación de datos, diseño de modelos relacionales y consultas avanzadas.</p>
                <img src="/images/sql.png" alt="SQL Ejemplo">
            </div>

        </div>
    </div>
</div>


<!-- Laravel -->
<div class="modal fade" id="modalLaravel" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Laravel / PHP</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p>MVC, controladores, rutas, migraciones y desarrollo funcional.</p>
                <img src="/images/php.webp" alt="Laravel Ejemplo">
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="modalTeams" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Microsoft Teams</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p>MVC, controladores, rutas, migraciones y desarrollo funcional.</p>
                <img src="/images/teams.webp" alt="Laravel Ejemplo">
            </div>

        </div>
    </div>
</div>


<!-- APIs REST -->
<div class="modal fade" id="modalAPIs" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">APIs REST</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p>Pruebas con Postman, validación de endpoints y análisis de flujos JSON.</p>
                <img src="/images/api.webp" alt="APIs Ejemplo">
            </div>

        </div>
    </div>
</div>




<!-- FIGMA -->

<div class="modal fade" id="modalFigma" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Figma — Prototipos y Diseño UI</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Creación de prototipos funcionales, wireframes y diseños para validar flujos de usuario.</p>
                <img src="/images/figma.webp" alt="Figma Ejemplo">
            </div>
        </div>
    </div>
</div>

<!--JIRA -->

<div class="modal fade" id="modalJira" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Jira — Gestión Ágil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Gestión de historias de usuario, sprints y seguimiento de avances en metodologías ágiles.</p>
                <img src="/images/jira.webp" alt="Jira Ejemplo">
            </div>
        </div>
    </div>
</div>
<!-- CLIKUP -->
<div class="modal fade" id="modalclickUp" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ClickUp</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Gestión de historias de usuario, sprints y seguimiento de avances en metodologías ágiles.</p>
                <img src="/images/click.png" alt="Jira Ejemplo">
            </div>
        </div>
    </div>
</div>

<!-- POSTMAN -->

<div class="modal fade" id="modalPostman" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Postman — QA Testing</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Creación de casos de pruebas para optimización de software de calidad.</p>
                <img src="/images/postman.webp" alt="Notion Ejemplo">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalVisio" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Visio — Organización - Diagramas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Casos de uso, diagramas de secuencia, actividades y definiciones funcionales.</p>
                <img src="/images/visio.webp" alt="Notion Ejemplo">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalERD" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Diagramas Entidad — Relación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Creación de modelado para la creación de base de datos.</p>
                <img src="/images/der.jpg" alt="Notion Ejemplo">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalGit" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Git — GitHub</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Control de versiones distribuido ampliamente utilizado en el desarrollo de software.</p>
                <img src="/images/git.webp" alt="Notion Ejemplo">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDrawio" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Drawio — Diagramación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Draw.io es un software utilizado para diseñar diagramas.</p>
                <img src="/images/draw.webp" alt="Notion Ejemplo">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalnotebooklm" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Notebook LM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Documentación de procesos, análisis, entregables y seguimiento de tareas.</p>
                <img src="/images/notebook.webp" alt="Notion Ejemplo">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalgpt" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Notion — Organización y Documentación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Documentación de procesos, análisis, entregables y seguimiento de tareas.</p>
                <img src="/images/gpt.webp" alt="Notion Ejemplo">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalVisual" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Visual Studio Code</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Editor de código.</p>
                <img src="/images/code.webp" alt="Notion Ejemplo">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalbpmn" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">BPMN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Editor de código.</p>
                <img src="/images/bpmn.webp" alt="Notion Ejemplo">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalplantuml" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">BPMN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Editor de código.</p>
                <img src="/images/plant.webp" alt="Notion Ejemplo">
            </div>
        </div>
    </div>
</div>


</section>

@endsection