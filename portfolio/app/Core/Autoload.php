<?php

class Autoloader
{
    public static function register(): void
    {
        spl_autoload_register(function (string $class) {

            // Dossiers susceptibles de contenir la classe demandée.
            $directories = [
                __DIR__ . '/../Models/',
                __DIR__ . '/../controller/',
                __DIR__ . '/',
            ];

            foreach ($directories as $directory) {
                $file = $directory . $class . '.php';

                if (is_file($file)) {
                    require_once $file;

                    return;
                }
            }
        });
    }
}
