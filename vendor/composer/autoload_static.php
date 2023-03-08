<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaad89622c5c733f7dff910334fd3fe49
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
            'Config\\' => 7,
            'Class\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Router',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Config',
        ),
        'Class\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaad89622c5c733f7dff910334fd3fe49::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaad89622c5c733f7dff910334fd3fe49::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaad89622c5c733f7dff910334fd3fe49::$classMap;

        }, null, ClassLoader::class);
    }
}
