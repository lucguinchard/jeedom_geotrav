<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit085434c367c5257e2b517eec43d167d8
{
    public static $prefixesPsr0 = array (
        'L' => 
        array (
            'Location' => 
            array (
                0 => __DIR__ . '/..' . '/mjaschen/phpgeo/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit085434c367c5257e2b517eec43d167d8::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}