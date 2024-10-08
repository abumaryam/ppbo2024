<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ef93974773dee87996a9f62d71fa076
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ef93974773dee87996a9f62d71fa076::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ef93974773dee87996a9f62d71fa076::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5ef93974773dee87996a9f62d71fa076::$classMap;

        }, null, ClassLoader::class);
    }
}
