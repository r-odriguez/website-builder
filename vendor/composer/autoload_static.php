<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97fd66e97bac1224a179df5f6ce5fc7c
{
    public static $files = array (
        '2b9d0f43f9552984cfa82fee95491826' => __DIR__ . '/..' . '/sabre/event/lib/coroutine.php',
        'd81bab31d3feb45bfe2f283ea3c8fdf7' => __DIR__ . '/..' . '/sabre/event/lib/Loop/functions.php',
        'a1cce3d26cc15c00fcd0b3354bd72c88' => __DIR__ . '/..' . '/sabre/event/lib/Promise/functions.php',
        'caf3abc48ff070873ebdd8b0b3e3ed61' => __DIR__ . '/..' . '/felixfbecker/language-server/src/utils.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpDocumentor\\Reflection\\' => 25,
        ),
        'W' => 
        array (
            'Webmozart\\Assert\\' => 17,
        ),
        'S' => 
        array (
            'Sabre\\Event\\' => 12,
        ),
        'P' => 
        array (
            'PhpParser\\' => 10,
        ),
        'L' => 
        array (
            'LanguageServer\\' => 15,
        ),
        'A' => 
        array (
            'AdvancedJsonRpc\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpDocumentor\\Reflection\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpdocumentor/reflection-common/src',
            1 => __DIR__ . '/..' . '/phpdocumentor/reflection-docblock/src',
            2 => __DIR__ . '/..' . '/phpdocumentor/type-resolver/src',
        ),
        'Webmozart\\Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/webmozart/assert/src',
        ),
        'Sabre\\Event\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabre/event/lib',
        ),
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'LanguageServer\\' => 
        array (
            0 => __DIR__ . '/..' . '/felixfbecker/language-server/src',
        ),
        'AdvancedJsonRpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/felixfbecker/advanced-json-rpc/lib',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JsonMapper' => 
            array (
                0 => __DIR__ . '/..' . '/netresearch/jsonmapper/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97fd66e97bac1224a179df5f6ce5fc7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97fd66e97bac1224a179df5f6ce5fc7c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit97fd66e97bac1224a179df5f6ce5fc7c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit97fd66e97bac1224a179df5f6ce5fc7c::$classMap;

        }, null, ClassLoader::class);
    }
}
