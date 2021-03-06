<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc8f3a377da3deb11939978866234a9b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Suppliers\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Suppliers\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbc8f3a377da3deb11939978866234a9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbc8f3a377da3deb11939978866234a9b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbc8f3a377da3deb11939978866234a9b::$classMap;

        }, null, ClassLoader::class);
    }
}
