<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9b2474036b822a585558437604722fc9
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Braintree\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Braintree\\' => 
        array (
            0 => __DIR__ . '/..' . '/braintree/braintree_php/lib/Braintree',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Braintree' => 
            array (
                0 => __DIR__ . '/..' . '/braintree/braintree_php/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9b2474036b822a585558437604722fc9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9b2474036b822a585558437604722fc9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9b2474036b822a585558437604722fc9::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9b2474036b822a585558437604722fc9::$classMap;

        }, null, ClassLoader::class);
    }
}
