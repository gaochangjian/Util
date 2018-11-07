<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9767f9d2e4ddc78a146d83e6b8c5201
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Util\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Util\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPExcel' => 
            array (
                0 => __DIR__ . '/..' . '/phpoffice/phpexcel/Classes',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb9767f9d2e4ddc78a146d83e6b8c5201::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb9767f9d2e4ddc78a146d83e6b8c5201::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb9767f9d2e4ddc78a146d83e6b8c5201::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}