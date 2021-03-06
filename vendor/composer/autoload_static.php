<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1d6101de1a58d07148a944435088b99
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'avaliacao\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'avaliacao\\' => 
        array (
            0 => __DIR__ . '/..' . '/avaliacao/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1d6101de1a58d07148a944435088b99::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1d6101de1a58d07148a944435088b99::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd1d6101de1a58d07148a944435088b99::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd1d6101de1a58d07148a944435088b99::$classMap;

        }, null, ClassLoader::class);
    }
}
