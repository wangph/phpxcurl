<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit086f28ed5fe8eb15480344b9608d6b37
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sunra\\PhpSimple\\HtmlDomParser' => 
            array (
                0 => __DIR__ . '/..' . '/sunra/php-simple-html-dom-parser/Src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit086f28ed5fe8eb15480344b9608d6b37::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
