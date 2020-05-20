<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcbf3c09428ac45b618138fab1369e554
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'App\\Controller\\AnimalController' => __DIR__ . '/../..' . '/src/controller/AnimalController.php',
        'App\\Controller\\AnimalZooController' => __DIR__ . '/../..' . '/src/controller/AnimalZooController.php',
        'App\\Controller\\ArticlesController' => __DIR__ . '/../..' . '/src/controller/ArticlesController.php',
        'App\\Controller\\ZooController' => __DIR__ . '/../..' . '/src/controller/ZooController.php',
        'App\\Model\\Animal' => __DIR__ . '/../..' . '/src/model/Animal.php',
        'App\\Model\\AnimalZoo' => __DIR__ . '/../..' . '/src/model/AnimalZoo.php',
        'App\\Model\\Zoo' => __DIR__ . '/../..' . '/src/model/Zoo.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcbf3c09428ac45b618138fab1369e554::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcbf3c09428ac45b618138fab1369e554::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitcbf3c09428ac45b618138fab1369e554::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitcbf3c09428ac45b618138fab1369e554::$classMap;

        }, null, ClassLoader::class);
    }
}
