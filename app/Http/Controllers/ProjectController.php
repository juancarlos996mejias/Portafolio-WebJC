<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Mostrar todos los proyectos.
     */
    public function index()
    {
        $projects = [
            [
                'slug' => 'gcba-gis',
                'nombre' => 'Visor de Mapa IDECABA',
                'descripcion' => 'Relevamiento funcional y diseño de soluciones GIS.',
                'imagen' => '/images/visorMapa.png',
            ],
            [
                'slug' => 'gcba-procesos',
                'nombre' => 'Portal IDECABA',
                'descripcion' => 'Sistema de procesos internos.',
                'imagen' => '/images/idecaba.png',
            ],
            [
                'slug' => 'pgd',
                'nombre' => 'Plataforma Gestión de Datos',
                'descripcion' => 'Plataforma orientada a salud mental.',
                'imagen' => '/images/PGD1.webp',
            ],
             [
                'slug' => 'fiber',
                'nombre' => 'FiberGis',
                'descripcion' => 'Plataforma orientada a salud mental.',
                'imagen' => '/images/fiberGis.png',
            ],
            [
                'slug' => 'ike',
                'nombre' => 'Prestación servicios',
                'descripcion' => 'Sitios web funcionales.',
                'imagen' => '/images/ikeArgentina.png',
            ],
            [
                'slug' => 'equilibria',
                'nombre' => 'Equilibria',
                'descripcion' => 'Plataforma orientada a salud mental.',
                'imagen' => '/images/equilibria1.png',
            ],
        ];

        return view('proyectos.index', compact('projects'));
    }

    /**
     * Mostrar detalles de un proyecto según su slug.
     */
    public function show($slug)
    {
        // 1. Si es el proyecto especial, mostrar su vista personalizada
        if ($slug === 'gcba-gis') {
            return view('proyectos.gcba-gis');
        }

        if ($slug === 'gcba-procesos') {
            return view('proyectos.gcba-procesos');
        }

          if ($slug === 'pgd') {
            return view('proyectos.pgd');
        }

           if ($slug === 'fiber') {
            return view('proyectos.fiber');
        }

        if ($slug === 'ike') {
    return view('proyectos.ike');
}

   if ($slug === 'equilibria') {
            return view('proyectos.equilibria');
        }


        // 2. Base de datos de los otros proyectos
        $proyectos = [
            'gcba-procesos' => [
                'nombre' => 'Gestión interna GCBA',
                'descripcion' => 'Sistema de procesos internos.',
                'detalles' => 'Detalles completos…',
                'imagen' => '/images/pgd.webp',
                'url' => null,
                'tecnologias' => ['PHP', 'MySQL', 'Bootstrap'],
            ],

            'ike' => [
                'nombre' => 'Sistema de servicios internos',
                'descripcion' => 'Sitios web funcionales.',
                'detalles' => 'Detalles completos…',
                'imagen' => '/images/ike.png',
                'url' => null,
                'tecnologias' => ['Laravel', 'Blade', 'Bootstrap'],
            ],

            'equilibria' => [
                'nombre' => 'Equilibria',
                'descripcion' => 'Plataforma orientada a salud mental.',
                'detalles' => 'Explicación técnica del proyecto…',
                'imagen' => '/images/equilibria.jpg',
                'url' => 'https://equilibria.com.ar',
                'tecnologias' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'],
            ],
            'equilibria' => [
                'nombre' => 'Equilibria',
                'descripcion' => 'Plataforma orientada a salud mental.',
                'detalles' => 'Explicación técnica del proyecto…',
                'imagen' => '/images/equilibria.jpg',
                'url' => 'https://equilibria.com.ar',
                'tecnologias' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'],
            ],
            'Fiber' => [
                'nombre' => 'FiberGis',
                'descripcion' => 'Plataforma orientada a salud mental.',
                'detalles' => 'Explicación técnica del proyecto…',
                'imagen' => '/images/.jpg',
                'url' => null,
                'tecnologias' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'],
            ],
            'pgd' => [
                'nombre' => 'Plataforma Gestión de Datos',
                'descripcion' => 'Plataforma orientada a salud mental.',
                'detalles' => 'Explicación técnica del proyecto…',
                'imagen' => '/images/.jpg',
                'url' => null,
                'tecnologias' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'],
            ],
        ];

        // 3. Validar slug
        if (!array_key_exists($slug, $proyectos)) {
            abort(404);
        }

        // 4. Enviar datos a la vista genérica
        $proyecto = $proyectos[$slug];

        return view('proyectos.show', compact('proyecto'));
    }
}
