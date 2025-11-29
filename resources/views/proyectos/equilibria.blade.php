@extends('layouts.app')

@section('title', 'E-commerce Suplementos')

@section('content')

<div class="container py-5 fade-in">

    <!-- Botón volver -->
   <a href="{{ route('proyectos.index') }}" class="btn mb-4" 
       style="background:#1a3faa; color:#fff; border:none;">
        <i class="bi bi-arrow-left"></i> Volver a proyectos
    </a>

    <!-- Encabezado -->
    <h1 class="mb-3 fw-bold" style="font-size: 2.2rem; color:#1a3faa;">
        E-commerce de Suplementos Dietéticos
    </h1>

    <p class="text-muted" style="font-size: 1.1rem;">
        Desarrollo completo de una plataforma e-commerce orientada a la venta de suplementos dietéticos,
        diseñada e implementada desde cero utilizando HTML, CSS, Bootstrap, PHP/Laravel y MySQL.
        La solución incluye catálogo dinámico, carrito, gestión de usuarios, panel administrador,
        control de stock y una arquitectura escalable para incorporar nuevos productos.
    </p>

    

    <!-- Descripción General -->
    <div class="card p-4 shadow-sm border-0 mb-4">
        <h3 class="mb-3">Descripción General del Proyecto</h3>
        <p style="color:#444; line-height:1.7;">
            El proyecto consistió en crear un e-commerce totalmente funcional para la venta de productos
            nutricionales, permitiendo a los clientes navegar el catálogo, gestionar su cuenta,
            consultar detalles de productos, agregar ítems al carrito y realizar compras de forma sencilla.
            Del lado administrativo, el sistema permite gestionar productos, categorías, precios, imágenes,
            usuarios y estadísticas de ventas.
        </p>
    </div>

    <!-- Mi Rol -->
    <div class="card p-4 shadow-sm border-0 mb-4">
        <h3 class="mb-3">Mi Rol en el Proyecto</h3>

        <ul style="color:#444; font-size:1.05rem; line-height:1.7;">
            <li>Diseño completo de la interfaz de usuario y experiencia visual.</li>
            <li>Implementación del frontend utilizando HTML, CSS, Bootstrap y diseño responsive.</li>
            <li>Desarrollo backend con PHP/Laravel para el manejo del catálogo, usuarios y carrito.</li>
            <li>Diseño y modelado de la base de datos MySQL (productos, stock, ventas, usuarios).</li>
            <li>Implementación de autenticación (login, registro, recuperación).</li>
            <li>Creación del panel administrador con ABM de productos y categorías.</li>
            <li>Integración de validaciones, filtros, paginación y búsquedas avanzadas.</li>
            <li>Pruebas funcionales completas para garantizar estabilidad y correcto flujo de compra.</li>
        </ul>
    </div>

    <!-- Funcionamiento del sistema -->
    <div class="card p-4 shadow-sm border-0 mb-4">
        <h3 class="mb-3">Funcionamiento del Sistema</h3>

        <p style="color:#444; line-height:1.7;">
            El e-commerce está dividido en dos grandes módulos: el área pública orientada al cliente y el panel
            administrativo para gestión de productos. Las principales funcionalidades incluyen:
        </p>

        <ul style="color:#444; font-size:1.05rem;">
            <li><strong>Catálogo dinámico</strong> con productos filtrados por categoría.</li>
            <li><strong>Carrito de compras</strong> con actualización en tiempo real.</li>
            <li><strong>Panel Admin</strong> para gestionar productos, fotos, precios y stock.</li>
            <li><strong>Gestión de usuarios</strong>: registro, login, recuperación.</li>
            <li><strong>Buscador inteligente</strong> con autocomplete.</li>
            <li>Páginas de detalle de producto con información ampliada.</li>
            <li>Validaciones avanzadas en formularios y flujo de compra.</li>
            <li><strong>Base de datos optimizada</strong> para crecimiento escalable.</li>
        </ul>
    </div>

    <!-- Tecnologías -->
    <div class="container my-5">
        <h2 class="mb-4"><p>Tecnologías Utilizadas</p></h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body bg-primary text-white">
                        <h5 class="card-title">Frontend</h5>
                        <p class="card-text">
                            HTML5, CSS3, Bootstrap 5 — Diseño responsive y UI moderna.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body bg-dark text-white">
                        <h5 class="card-title">Backend</h5>
                        <p class="card-text text-white">
                            PHP 8 + Laravel — Autenticación, lógica de negocio y seguridad.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body bg-warning">
                        <h5 class="card-title">Base de Datos</h5>
                        <p class="card-text">
                            MySQL — Manejo de productos, stock, ventas y usuarios.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Resultados -->
    <div class="card p-4 shadow-sm border-0 mb-4">
        <h3 class="mb-3">Resultados y Aportes</h3>

        <ul style="color:#444; font-size:1.05rem; line-height:1.7;">
            <li>Plataforma completa lista para operar con ventas reales.</li>
            <li>Interfaz moderna y optimizada para dispositivos móviles.</li>
            <li>Reducción de tiempos operativos gracias al panel administrador.</li>
            <li>Estructura escalable para incorporar nuevas categorías y funciones.</li>
            <li>Base sólida para evolucionar a un marketplace o sistema más robusto.</li>
        </ul>
    </div>

<!-- GALERÍA -->
    <div class="card shadow-sm p-4 border-0 mb-5">
        <h3 class="mb-3">Galería del Proyecto</h3>

        <a href="https://visualizador-idecaba.buenosaires.gob.ar/#/" target="_blank">
            Ir a Equilibria
        </a>

        <div class="gallery-placeholder mt-3 p-5 bg-light text-center border rounded">
            <img src="/images/equilibria1.png" alt="Visor IDECABA" class="img-fluid rounded shadow">
        </div>
    </div>



</div>

@endsection
