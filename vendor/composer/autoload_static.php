<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita6f8a309df6dc2df0b827e5492541ee4
{
    public static $prefixLengthsPsr4 = array (
        'q' => 
        array (
            'qiyuesuo\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'qiyuesuo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita6f8a309df6dc2df0b827e5492541ee4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita6f8a309df6dc2df0b827e5492541ee4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}