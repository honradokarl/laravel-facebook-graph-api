<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5853008b909be42a6dbac03dfdfc23a3
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Honradokarl\\LaravelFacebookGraphApi\\' => 36,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Honradokarl\\LaravelFacebookGraphApi\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5853008b909be42a6dbac03dfdfc23a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5853008b909be42a6dbac03dfdfc23a3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5853008b909be42a6dbac03dfdfc23a3::$classMap;

        }, null, ClassLoader::class);
    }
}
