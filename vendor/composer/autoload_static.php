<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit49f3edf3655416af1581b61f29fdf487
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mycompany\\MyLibrary\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mycompany\\MyLibrary\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit49f3edf3655416af1581b61f29fdf487::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit49f3edf3655416af1581b61f29fdf487::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit49f3edf3655416af1581b61f29fdf487::$classMap;

        }, null, ClassLoader::class);
    }
}
