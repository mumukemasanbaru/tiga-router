<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c194a93880f716613b02f0b7c7dacd8
{
    public static $prefixesPsr0 = array (
        'V' => 
        array (
            'Viocon' => 
            array (
                0 => __DIR__ . '/..' . '/usmanhalalit/viocon/src',
            ),
        ),
        'P' => 
        array (
            'Pixie' => 
            array (
                0 => __DIR__ . '/..' . '/usmanhalalit/pixie/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit1c194a93880f716613b02f0b7c7dacd8::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
