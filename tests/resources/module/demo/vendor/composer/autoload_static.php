<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77be78716c0a12958e9a5ba226453e15
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PsTest\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PsTest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit77be78716c0a12958e9a5ba226453e15::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77be78716c0a12958e9a5ba226453e15::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}