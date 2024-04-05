<?php

namespace ContainerGRi2xj9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getModStringsItemDataProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Languages\DataProvider\ModStringsItemDataProvider' shared autowired service.
     *
     * @return \App\Languages\DataProvider\ModStringsItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Languages/DataProvider/ModStringsItemDataProvider.php';

        return $container->privates['App\\Languages\\DataProvider\\ModStringsItemDataProvider'] = new \App\Languages\DataProvider\ModStringsItemDataProvider(($container->privates['App\\Languages\\LegacyHandler\\ModStringsHandler'] ?? $container->load('getModStringsHandlerService')));
    }
}