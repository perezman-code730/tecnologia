<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit40060ccc7aeda6707731caa2632bf54a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit40060ccc7aeda6707731caa2632bf54a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit40060ccc7aeda6707731caa2632bf54a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit40060ccc7aeda6707731caa2632bf54a::$classMap;

        }, null, ClassLoader::class);
    }
}
