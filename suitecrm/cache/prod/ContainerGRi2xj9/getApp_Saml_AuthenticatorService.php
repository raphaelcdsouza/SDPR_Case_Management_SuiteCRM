<?php

namespace ContainerGRi2xj9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApp_Saml_AuthenticatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'app.saml.authenticator' shared autowired service.
     *
     * @return \App\Security\Saml\AppSamlAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 3).'/vendor/hslavich/oneloginsaml-bundle/Security/Http/Authenticator/SamlAuthenticator.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Security/Saml/AppSamlAuthenticator.php';

        return $container->privates['app.saml.authenticator'] = new \App\Security\Saml\AppSamlAuthenticator(($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), ($container->privates['OneLogin\\Saml2\\Auth'] ?? $container->load('getAuthService')), ($container->privates['security.authentication.success_handler.main.saml'] ?? $container->load('getSecurity_Authentication_SuccessHandler_Main_SamlService')), ($container->privates['security.authentication.failure_handler.main.saml'] ?? $container->load('getSecurity_Authentication_FailureHandler_Main_SamlService')), ['username_attribute' => $container->getEnv('SAML_USERNAME_ATTRIBUTE'), 'use_attribute_friendly_name' => $container->getEnv('bool:SAML_USE_ATTRIBUTE_FRIENDLY_NAME'), 'check_path' => 'saml_acs', 'login_path' => 'saml_login', 'success_handler' => 'Hslavich\\OneloginSamlBundle\\Security\\Http\\Authentication\\SamlAuthenticationSuccessHandler', 'use_forward' => false, 'require_previous_session' => false, 'user_factory' => NULL, 'token_factory' => NULL, 'persist_user' => false], NULL, ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}