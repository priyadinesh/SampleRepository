<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e7b710d7071039d2e88246e084cb417
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yii\\swiftmailer\\' => 16,
            'yii\\httpclient\\' => 15,
            'yii\\gii\\' => 8,
            'yii\\faker\\' => 10,
            'yii\\debug\\' => 10,
            'yii\\composer\\' => 13,
            'yii\\codeception\\' => 16,
            'yii\\bootstrap\\' => 14,
            'yii\\authclient\\' => 15,
            'yii\\' => 4,
        ),
        's' => 
        array (
            'sweelix\\postmark\\' => 17,
        ),
        'm' => 
        array (
            'moonland\\phpexcel\\' => 18,
        ),
        'k' => 
        array (
            'kartik\\typeahead\\' => 17,
            'kartik\\select2\\' => 15,
            'kartik\\base\\' => 12,
        ),
        'c' => 
        array (
            'cebe\\markdown\\' => 14,
        ),
        'a' => 
        array (
            'amnah\\yii2\\user\\' => 16,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yii\\swiftmailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-swiftmailer',
        ),
        'yii\\httpclient\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-httpclient',
        ),
        'yii\\gii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-gii',
        ),
        'yii\\faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-faker',
        ),
        'yii\\debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-debug',
        ),
        'yii\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-composer',
        ),
        'yii\\codeception\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-codeception',
        ),
        'yii\\bootstrap\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-bootstrap',
        ),
        'yii\\authclient\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-authclient',
        ),
        'yii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2',
        ),
        'sweelix\\postmark\\' => 
        array (
            0 => __DIR__ . '/..' . '/sweelix/yii2-postmark/src',
        ),
        'moonland\\phpexcel\\' => 
        array (
            0 => __DIR__ . '/..' . '/moonlandsoft/yii2-phpexcel',
        ),
        'kartik\\typeahead\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-widget-typeahead',
        ),
        'kartik\\select2\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-widget-select2',
        ),
        'kartik\\base\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-krajee-base',
        ),
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
        'amnah\\yii2\\user\\' => 
        array (
            0 => __DIR__ . '/..' . '/amnah/yii2-user',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Postmark\\' => 
            array (
                0 => __DIR__ . '/..' . '/wildbit/postmark-php/src',
            ),
            'PHPExcel' => 
            array (
                0 => __DIR__ . '/..' . '/phpoffice/phpexcel/Classes',
            ),
        ),
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
        'D' => 
        array (
            'Diff' => 
            array (
                0 => __DIR__ . '/..' . '/phpspec/php-diff/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e7b710d7071039d2e88246e084cb417::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e7b710d7071039d2e88246e084cb417::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4e7b710d7071039d2e88246e084cb417::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
