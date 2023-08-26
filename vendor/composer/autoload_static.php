<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0960a2058518ca1cef90e362bb3ae83
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mike42\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mike42\\' => 
        array (
            0 => __DIR__ . '/..' . '/mike42/escpos-php/src/Mike42',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita0960a2058518ca1cef90e362bb3ae83::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0960a2058518ca1cef90e362bb3ae83::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0960a2058518ca1cef90e362bb3ae83::$classMap;

        }, null, ClassLoader::class);
    }
}
