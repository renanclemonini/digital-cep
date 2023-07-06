<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf14c11bf7ad6be4b4c6e3e77119150d
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rclemon93\\DigitalCep\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rclemon93\\DigitalCep\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Search' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf14c11bf7ad6be4b4c6e3e77119150d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf14c11bf7ad6be4b4c6e3e77119150d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitbf14c11bf7ad6be4b4c6e3e77119150d::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitbf14c11bf7ad6be4b4c6e3e77119150d::$classMap;

        }, null, ClassLoader::class);
    }
}