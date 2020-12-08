<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8563a4c7627f292b1b654e7d418958f1
{
    public static $prefixLengthsPsr4 = array (
        'f' => 
        array (
            'fia\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'fia\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/test',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8563a4c7627f292b1b654e7d418958f1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8563a4c7627f292b1b654e7d418958f1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
