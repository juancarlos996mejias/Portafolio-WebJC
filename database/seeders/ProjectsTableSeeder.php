<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        $projects = [
            [
                'slug' => 'portal-gis-caba',
                'title' => 'Portal de Información Geoespacial (GIS)',
                'subtitle' => 'Portal público con visualizador de capas y consultas territoriales',
                'summary' => 'Portal web para consulta de datos geoespaciales, capas y análisis territorial.',
                'role' => 'Analista Funcional Técnico',
                'responsibilities' => 'Relevamiento, documentación funcional, especificación de endpoints GIS, diseño de casos de uso y diagramas UML, testing funcional.',
                'tech_stack' => 'PHP/Laravel, GeoServer/ArcGIS, PostgreSQL/PostGIS, APIs REST, JavaScript (Leaflet/Mapbox)',
                'user_stories' => "HU-01: Consultar capas\nHU-02: Aplicar filtros territoriales",
                'code_snippet' => "<?php\n// Ejemplo: consulta simple a API GIS\npublic function getLayerAttributes(\$layer){\$url = \"https://gis-server/api/layers/\".\$layer.\"/attributes\"; \$response = Http::get(\$url); return \$response->json();}",
                'cover_image' => 'projects/gis_cover.jpg',
                'gallery' => json_encode([
                    'projects/gis_usecase.png',
                    'projects/gis_erd.png'
                ]),
            ],
            [
                'slug' => 'plataforma-gestion-datos-pgd',
                'title' => 'Plataforma de Gestión de Datos (PGD)',
                'subtitle' => 'Sistema interno para carga, validación y publicación de datasets',
                'summary' => 'Gestión de datasets con workflow de aprobación, validaciones y publicación.',
                'role' => 'Analista Funcional Técnico',
                'responsibilities' => 'Diseño de workflow, definición de metadatos, endpoints de carga masiva, pruebas y validaciones con SQL.',
                'tech_stack' => 'PHP, PostgreSQL, APIs REST, Jobs/Queues',
                'user_stories' => "HU-01: Cargar dataset\nHU-02: Publicar dataset",
                'code_snippet' => "-- Ejemplo SQL de validación\nSELECT COUNT(*) FROM dataset_registros WHERE (campo_a IS NULL OR campo_b IS NULL);",
                'cover_image' => 'projects/pgd_cover.jpg',
                'gallery' => json_encode([
                    'projects/pgd_flow.png',
                    'projects/pgd_erd.png'
                ]),
            ],
            [
                'slug' => 'plataforma-servicios-hogar',
                'title' => 'Plataforma de Servicios Hogar & Mascotas',
                'subtitle' => 'Marketplace para prestadores de servicios',
                'summary' => 'Marketplace con buscador, agenda, panel de prestador y reservas.',
                'role' => 'Analista Funcional Técnico',
                'responsibilities' => 'Relevamiento de reglas de negocio, modelado UML, diseño de flujos de reserva y validación E2E.',
                'tech_stack' => 'PHP/Laravel, MySQL, APIs de notificaciones',
                'user_stories' => "HU-01: Buscar prestador\nHU-02: Reservar servicio",
                'code_snippet' => "// Fragmento migración servicios\nSchema::create('servicios', function (Blueprint $table) { \$table->id(); \$table->string('nombre'); \$table->decimal('precio',8,2); \$table->integer('stock'); \$table->timestamps(); });",
                'cover_image' => 'projects/interinnova_cover.jpg',
                'gallery' => json_encode([
                    'projects/inter_usecase.png',
                    'projects/inter_erd.png'
                ]),
            ],
            [
                'slug' => 'equilibria-ecommerce',
                'title' => 'E-commerce Equilibria (proyecto personal)',
                'subtitle' => 'Tienda de suplementos dietéticos (local)',
                'summary' => 'E-commerce completo en entorno local: registro, catálogo, carrito, checkout y panel admin.',
                'role' => 'Analista Funcional Técnico / Desarrollador Laravel',
                'responsibilities' => 'Relevamiento funcional, diseño del flujo de compra, migraciones, controladores y testing funcional.',
                'tech_stack' => 'PHP/Laravel, MySQL, Eloquent, Bootstrap',
                'user_stories' => "HU-01: Agregar producto al carrito\nHU-02: Finalizar compra",
                'code_snippet' => "// Rutas ejemplo\nRoute::get('/productos', [ProductoController::class,'index']); Route::post('/carrito/agregar', [CarritoController::class,'agregar']);",
                'cover_image' => 'projects/equilibria_cover.jpg',
                'gallery' => json_encode([
                    'projects/equi_catalog.png',
                    'projects/equi_cart.png'
                ]),
            ],
        ];

        foreach ($projects as $p) {
            Project::create($p);
        }
    }
}
