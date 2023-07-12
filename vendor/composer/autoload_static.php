<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6eb9bad4167ef093b41be5966e26fff3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Models\\' => 11,
            'App\\Controllers\\' => 16,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controllers',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6eb9bad4167ef093b41be5966e26fff3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6eb9bad4167ef093b41be5966e26fff3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6eb9bad4167ef093b41be5966e26fff3::$classMap;

        }, null, ClassLoader::class);
    }
}
