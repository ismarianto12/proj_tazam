<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd192485362c9d59d8d567b33081cb750
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Nasabah\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Nasabah\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd192485362c9d59d8d567b33081cb750::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd192485362c9d59d8d567b33081cb750::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd192485362c9d59d8d567b33081cb750::$classMap;

        }, null, ClassLoader::class);
    }
}
