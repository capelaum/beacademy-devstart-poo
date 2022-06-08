<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4b59f52d6607d23fcb1c74688e19da6
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Theca\\ProjetoFinal\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Theca\\ProjetoFinal\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita4b59f52d6607d23fcb1c74688e19da6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita4b59f52d6607d23fcb1c74688e19da6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita4b59f52d6607d23fcb1c74688e19da6::$classMap;

        }, null, ClassLoader::class);
    }
}
