<?php

namespace ContainerGRi2xj9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBatchedStatisticsItemDataProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Statistics\DataProvider\BatchedStatisticsItemDataProvider' shared autowired service.
     *
     * @return \App\Statistics\DataProvider\BatchedStatisticsItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Statistics/DataProvider/BatchedStatisticsItemDataProvider.php';

        return $container->privates['App\\Statistics\\DataProvider\\BatchedStatisticsItemDataProvider'] = new \App\Statistics\DataProvider\BatchedStatisticsItemDataProvider(($container->privates['App\\Statistics\\Service\\StatisticsManager'] ?? $container->load('getStatisticsManagerService')));
    }
}