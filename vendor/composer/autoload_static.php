<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7635d5e5a68d44cee9354d3eb5b938eb
{
    public static $prefixLengthsPsr4 = array (
        'j' => 
        array (
            'juno_okyo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'juno_okyo\\' => 
        array (
            0 => __DIR__ . '/..' . '/juno_okyo/php-chatfuel-class/src/juno_okyo',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7635d5e5a68d44cee9354d3eb5b938eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7635d5e5a68d44cee9354d3eb5b938eb::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7635d5e5a68d44cee9354d3eb5b938eb::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
