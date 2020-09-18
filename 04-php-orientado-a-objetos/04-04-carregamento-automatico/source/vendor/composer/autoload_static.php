<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit595e91d49d69ae6d87c19e519c3121ab
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit595e91d49d69ae6d87c19e519c3121ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit595e91d49d69ae6d87c19e519c3121ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit595e91d49d69ae6d87c19e519c3121ab::$classMap;

        }, null, ClassLoader::class);
    }
}
