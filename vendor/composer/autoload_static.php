<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b0ed1a0cd0e2c2154f6b4974460f29d
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '463da38cd3b0cc1fa9f7dfe33b244971' => __DIR__ . '/..' . '/cmb2/cmb2/init.php',
        '6efe1f9f7b9493aac84c8a0a8172b5a2' => __DIR__ . '/..' . '/webdevstudios/cmb2-post-search-field/cmb2_post_search_field.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Contracts\\Service\\' => 26,
            'Symfony\\Component\\Stopwatch\\' => 28,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Contracts\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/service-contracts',
        ),
        'Symfony\\Component\\Stopwatch\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/stopwatch',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'Redbit\\SimpleShop\\WpPlugin\\Access' => __DIR__ . '/../..' . '/src/Access.php',
        'Redbit\\SimpleShop\\WpPlugin\\Admin' => __DIR__ . '/../..' . '/src/Admin.php',
        'Redbit\\SimpleShop\\WpPlugin\\Cron' => __DIR__ . '/../..' . '/src/Cron.php',
        'Redbit\\SimpleShop\\WpPlugin\\Group' => __DIR__ . '/../..' . '/src/Group.php',
        'Redbit\\SimpleShop\\WpPlugin\\Gutenberg' => __DIR__ . '/../..' . '/src/Gutenberg.php',
        'Redbit\\SimpleShop\\WpPlugin\\Helpers' => __DIR__ . '/../..' . '/src/Helpers.php',
        'Redbit\\SimpleShop\\WpPlugin\\Loader' => __DIR__ . '/../..' . '/src/Loader.php',
        'Redbit\\SimpleShop\\WpPlugin\\Membership' => __DIR__ . '/../..' . '/src/Membership.php',
        'Redbit\\SimpleShop\\WpPlugin\\Metaboxes' => __DIR__ . '/../..' . '/src/Metaboxes.php',
        'Redbit\\SimpleShop\\WpPlugin\\Plugin' => __DIR__ . '/../..' . '/src/Plugin.php',
        'Redbit\\SimpleShop\\WpPlugin\\Rest' => __DIR__ . '/../..' . '/src/Rest.php',
        'Redbit\\SimpleShop\\WpPlugin\\Settings' => __DIR__ . '/../..' . '/src/Settings.php',
        'Redbit\\SimpleShop\\WpPlugin\\Shortcodes' => __DIR__ . '/../..' . '/src/Shortcodes.php',
        'Redbit\\SimpleShop\\WpPlugin\\SimpleShop' => __DIR__ . '/../..' . '/src/SimpleShop.php',
        'Redbit\\SimpleShop\\WpPlugin\\Stopwatch' => __DIR__ . '/../..' . '/src/Stopwatch.php',
        'Redbit\\SimpleShop\\WpPlugin\\Vyfakturuj\\VyfakturujAPI' => __DIR__ . '/../..' . '/src/Vyfakturuj/VyfakturujAPI.php',
        'Symfony\\Component\\Stopwatch\\Section' => __DIR__ . '/..' . '/symfony/stopwatch/Section.php',
        'Symfony\\Component\\Stopwatch\\Stopwatch' => __DIR__ . '/..' . '/symfony/stopwatch/Stopwatch.php',
        'Symfony\\Component\\Stopwatch\\StopwatchEvent' => __DIR__ . '/..' . '/symfony/stopwatch/StopwatchEvent.php',
        'Symfony\\Component\\Stopwatch\\StopwatchPeriod' => __DIR__ . '/..' . '/symfony/stopwatch/StopwatchPeriod.php',
        'Symfony\\Contracts\\Service\\Attribute\\Required' => __DIR__ . '/..' . '/symfony/service-contracts/Attribute/Required.php',
        'Symfony\\Contracts\\Service\\Attribute\\SubscribedService' => __DIR__ . '/..' . '/symfony/service-contracts/Attribute/SubscribedService.php',
        'Symfony\\Contracts\\Service\\ResetInterface' => __DIR__ . '/..' . '/symfony/service-contracts/ResetInterface.php',
        'Symfony\\Contracts\\Service\\ServiceCollectionInterface' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceCollectionInterface.php',
        'Symfony\\Contracts\\Service\\ServiceLocatorTrait' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceLocatorTrait.php',
        'Symfony\\Contracts\\Service\\ServiceMethodsSubscriberTrait' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceMethodsSubscriberTrait.php',
        'Symfony\\Contracts\\Service\\ServiceProviderInterface' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceProviderInterface.php',
        'Symfony\\Contracts\\Service\\ServiceSubscriberInterface' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceSubscriberInterface.php',
        'Symfony\\Contracts\\Service\\ServiceSubscriberTrait' => __DIR__ . '/..' . '/symfony/service-contracts/ServiceSubscriberTrait.php',
        'VyfakturujAPI' => __DIR__ . '/..' . '/vyfakturuj/vyfakturuj-api-php/libs/VyfakturujAPI.php',
        'VyfakturujAPIException' => __DIR__ . '/..' . '/vyfakturuj/vyfakturuj-api-php/libs/VyfakturujAPIException.php',
        'VyfakturujEnum' => __DIR__ . '/..' . '/vyfakturuj/vyfakturuj-api-php/libs/VyfakturujEnum.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b0ed1a0cd0e2c2154f6b4974460f29d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b0ed1a0cd0e2c2154f6b4974460f29d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6b0ed1a0cd0e2c2154f6b4974460f29d::$classMap;

        }, null, ClassLoader::class);
    }
}