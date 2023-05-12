<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd09bed31e6d25e3ea99995cc6496944
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Robert\\Pdfphp\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Robert\\Pdfphp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd09bed31e6d25e3ea99995cc6496944::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd09bed31e6d25e3ea99995cc6496944::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd09bed31e6d25e3ea99995cc6496944::$classMap;

        }, null, ClassLoader::class);
    }
}
