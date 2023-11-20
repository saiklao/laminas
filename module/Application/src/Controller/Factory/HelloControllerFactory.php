<?php
// module/Application/src/Controller/Factory/HelloControllerFactory.php

namespace Application\Controller\Factory;

use Interop\Container\ContainerInterface;
use Laminas\Db\Adapter\AdapterInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Application\Controller\HelloController;
use Application\Service\UserManager;

class HelloControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // // Retrieve the database adapter from the service manager
        // $dbAdapter = $container->get(AdapterInterface::class);

        // // Instantiate the controller and inject the database adapter
        // return new HelloController($dbAdapter);

        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        
        $userManager = $container->get(UserManager::class);

        // Instantiate the controller and inject dependencies
        return new HelloController($entityManager, $userManager);
    }
}
?>