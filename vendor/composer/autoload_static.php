<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit70e54ba5321b31f65dfdd7c9b040991d
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BelajarComposerLibrary\\Belajar\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BelajarComposerLibrary\\Belajar\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit70e54ba5321b31f65dfdd7c9b040991d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit70e54ba5321b31f65dfdd7c9b040991d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit70e54ba5321b31f65dfdd7c9b040991d::$classMap;

        }, null, ClassLoader::class);
    }
}
