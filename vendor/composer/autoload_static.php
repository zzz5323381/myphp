<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91ab4dab656b780ba4230e0684feed9e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Administrator\\Demo8\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Administrator\\Demo8\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit91ab4dab656b780ba4230e0684feed9e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91ab4dab656b780ba4230e0684feed9e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit91ab4dab656b780ba4230e0684feed9e::$classMap;

        }, null, ClassLoader::class);
    }
}
