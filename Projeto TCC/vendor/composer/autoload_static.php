<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a50e455f5e8bae7e81deb3c5bcf78e4
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'fdf5a9cf0067da56caa50eb5e68c48bd' => __DIR__ . '/../..' . '/app/helpers.php',
        'a1aa93b208adef18ec2c8478f0ec6403' => __DIR__ . '/../..' . '/app/pdftotext.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tcc\\Views\\' => 10,
            'Tcc\\Models\\' => 11,
            'Tcc\\Controllers\\' => 16,
            'Tcc\\App\\Bases\\' => 14,
            'Tcc\\APP\\' => 8,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tcc\\Views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/views',
        ),
        'Tcc\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'Tcc\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
        'Tcc\\App\\Bases\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/bases',
        ),
        'Tcc\\APP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Smalot\\PdfParser\\' => 
            array (
                0 => __DIR__ . '/..' . '/smalot/pdfparser/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a50e455f5e8bae7e81deb3c5bcf78e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a50e455f5e8bae7e81deb3c5bcf78e4::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7a50e455f5e8bae7e81deb3c5bcf78e4::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit7a50e455f5e8bae7e81deb3c5bcf78e4::$classMap;

        }, null, ClassLoader::class);
    }
}