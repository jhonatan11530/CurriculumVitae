<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramingChargesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->insert([
            array('nombre' => 'Desarrollador de software'),
            array('nombre' => 'Arquitecto de software'),
            array('nombre' => 'Analista de sistemas'),
            array('nombre' => 'Líder de equipo de desarrollo'),
            array('nombre' => 'Ingeniero de calidad de software'),
            array('nombre' => 'Gerente de proyectos de software'),
            array('nombre' => 'Especialista en seguridad de software'),
            array('nombre' => 'DevOps Engineer'),
            array('nombre' => 'Diseñador de experiencia de usuario (UX)'),
            array('nombre' => 'Desarrollador de aplicaciones móviles'),
            array('nombre' => 'Desarrollador de juegos'),
            array('nombre' => 'Especialista en inteligencia artificial y aprendizaje automático'),
            array('nombre' => 'Desarrollador de software embebido'),
            array('nombre' => 'Ingeniero de software de sistemas'),
            array('nombre' => 'Desarrollador de front-end'),
            array('nombre' => 'Desarrollador de back-end'),
            array('nombre' => 'Especialista en bases de datos'),
            array('nombre' => 'Especialista en redes y comunicaciones'),
            array('nombre' => 'Especialista en virtualización y cloud computing'),
            array('nombre' => 'Especialista en blockchain y criptomonedas'),
            array('nombre' => 'Especialista en ciberseguridad'),
            array('nombre' => 'Especialista en análisis de datos'),
            array('nombre' => 'Especialista en integración de sistemas'),
            array('nombre' => 'Especialista en automatización de pruebas'),
            array('nombre' => 'Especialista en desarrollo web'),
            array('nombre' => 'Especialista en machine learning'),
            array('nombre' => 'Especialista en IoT'),
            array('nombre' => 'Especialista en Big Data'),
            array('nombre' => 'Especialista en análisis de riesgos'),
            array('nombre' => 'Especialista en desarrollo de APIs'),
            array('nombre' => 'Especialista en programación de sistemas'),
            array('nombre' => 'Especialista en sistemas de información geográfica'),
            array('nombre' => 'Especialista en análisis de procesos de negocio'),
            array('nombre' => 'Especialista en integración de datos'),
            array('nombre' => 'Especialista en integración de aplicaciones'),
            array('nombre' => 'Especialista en análisis de rendimiento'),
            array('nombre' => 'Especialista en gestión de la configuración'),
            array('nombre' => 'Especialista en integración de datos empresariales'),
            array('nombre' => 'Especialista en integración de bases de datos'),
            array('nombre' => 'Especialista en gestión de proyectos ágiles'),
            array('nombre' => 'Especialista en gestión de proyectos de software'),
            array('nombre' => 'Especialista en lenguaje natural'),
            array('nombre' => 'Especialista en programación orientada a objetos'),
            array('nombre' => 'Especialista en programación funcional'),
            array('nombre' => 'Especialista en programación de microservicios'),
            array('nombre' => 'Especialista en programación de scripts'),
            array('nombre' => 'Especialista en programación de sistemas embebidos'),
            array('nombre' => 'Especialista en programación de sistemas de tiempo real'),
            array('nombre' => 'Especialista en programación de juegos en línea'),
            array('nombre' => 'Especialista en programación de aplicaciones de escritorio')
        ]);
    }
}
