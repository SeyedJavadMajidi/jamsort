<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a258e2de1417857271fff978ce86e54
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a258e2de1417857271fff978ce86e54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a258e2de1417857271fff978ce86e54::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2a258e2de1417857271fff978ce86e54::$classMap;

        }, null, ClassLoader::class);
    }
}
