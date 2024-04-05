<?php

namespace ContainerGRi2xj9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_FailureHandler_Main_SamlService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.authentication.failure_handler.main.saml' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php';

        $container->privates['security.authentication.failure_handler.main.saml'] = $instance = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(($container->services['http_kernel'] ?? $container->getHttpKernelService()), ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), [], ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')));

        $instance->setOptions(['login_path' => 'saml_login', 'failure_path' => 'logged-out', 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $instance;
    }
}