<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b6aa0e995217d32bb1e6733cc3c0b25
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spatie\\OpeningHours\\' => 20,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spatie\\OpeningHours\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/opening-hours/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b6aa0e995217d32bb1e6733cc3c0b25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b6aa0e995217d32bb1e6733cc3c0b25::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
