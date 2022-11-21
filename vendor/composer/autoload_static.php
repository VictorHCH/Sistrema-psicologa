<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteec027a887b30d3b50db88639d5f0e26
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rakit\\Validation\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rakit\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/rakit/validation/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteec027a887b30d3b50db88639d5f0e26::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteec027a887b30d3b50db88639d5f0e26::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteec027a887b30d3b50db88639d5f0e26::$classMap;

        }, null, ClassLoader::class);
    }
}
