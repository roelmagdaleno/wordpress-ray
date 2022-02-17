<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0431709f7fea504a9f95b79fd41a76c1
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '3074abeef0bacf5811f59e9dee6311d1' => __DIR__ . '/..' . '/spatie/ray/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spatie\\WordPressRay\\Symfony\\Polyfill\\Php80\\' => 43,
            'Spatie\\WordPressRay\\Symfony\\Polyfill\\Php72\\' => 43,
            'Spatie\\WordPressRay\\Symfony\\Polyfill\\Mbstring\\' => 46,
            'Spatie\\WordPressRay\\Symfony\\Contracts\\Service\\' => 46,
            'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\' => 48,
            'Spatie\\WordPressRay\\Symfony\\Component\\Stopwatch\\' => 48,
            'Spatie\\WordPressRay\\Spatie\\Ray\\' => 31,
            'Spatie\\WordPressRay\\Spatie\\Macroable\\' => 37,
            'Spatie\\WordPressRay\\Spatie\\Backtrace\\' => 37,
            'Spatie\\WordPressRay\\Ramsey\\Uuid\\' => 32,
            'Spatie\\WordPressRay\\Psr\\Container\\' => 34,
            'Spatie\\WordPressRay\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spatie\\WordPressRay\\Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Spatie\\WordPressRay\\Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Spatie\\WordPressRay\\Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Spatie\\WordPressRay\\Symfony\\Contracts\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/service-contracts',
        ),
        'Spatie\\WordPressRay\\Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Spatie\\WordPressRay\\Symfony\\Component\\Stopwatch\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/stopwatch',
        ),
        'Spatie\\WordPressRay\\Spatie\\Ray\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/ray/src',
        ),
        'Spatie\\WordPressRay\\Spatie\\Macroable\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/macroable/src',
        ),
        'Spatie\\WordPressRay\\Spatie\\Backtrace\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/backtrace/src',
        ),
        'Spatie\\WordPressRay\\Ramsey\\Uuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/uuid/src',
        ),
        'Spatie\\WordPressRay\\Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Spatie\\WordPressRay\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Spatie\\WordPressRay\\Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Spatie\\WordPressRay\\ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0431709f7fea504a9f95b79fd41a76c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0431709f7fea504a9f95b79fd41a76c1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0431709f7fea504a9f95b79fd41a76c1::$classMap;

        }, null, ClassLoader::class);
    }
}
