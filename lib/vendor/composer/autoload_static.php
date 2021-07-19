<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit21ff9b845d6753af1683c2ac64106eca
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit21ff9b845d6753af1683c2ac64106eca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit21ff9b845d6753af1683c2ac64106eca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit21ff9b845d6753af1683c2ac64106eca::$classMap;

        }, null, ClassLoader::class);
    }
}
