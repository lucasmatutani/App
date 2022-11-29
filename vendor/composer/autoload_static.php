<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fd8d618a0c3a6842719e1575fd64f65
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2fd8d618a0c3a6842719e1575fd64f65::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2fd8d618a0c3a6842719e1575fd64f65::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2fd8d618a0c3a6842719e1575fd64f65::$classMap;

        }, null, ClassLoader::class);
    }
}