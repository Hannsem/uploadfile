<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc17455675f653d850490c68eedad2923
{
    public static $prefixLengthsPsr4 = array (
        'h' => 
        array (
            'hansem\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'hansem\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc17455675f653d850490c68eedad2923::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc17455675f653d850490c68eedad2923::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
