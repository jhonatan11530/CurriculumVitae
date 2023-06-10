<?php

namespace App\Listeners;

use App\Events\InstallComposerEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPodcastNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  InstallComposerEvent  $event
     * @return void
     */
    public function handle(InstallComposerEvent $event)
    {
        // Crear la base de datos si no existe
        exec('php artisan db:create');

        // Ejecutar migraciones
        exec('php artisan migrate');

        // Ejecutar semillas (seeds)
        exec('php artisan db:seed');

        // Crear la llave del env
        exec('php artisan key:generate');

        // Ejecutar el storage de los archivos
        exec('php artisan storage:link');

        // Ejecutar y guardar en cache la api
        exec('php artisan fetch:country');

        // Ejecutar y guardar en cache la api
        exec('php artisan fetch:states');

        // Ejecutar y guardar en cache la api
        exec('php artisan fetch:city');
    }
}
