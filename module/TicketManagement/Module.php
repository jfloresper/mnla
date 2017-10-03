<?php

namespace TicketManagement;

use Zend\Db\Adapter\Adapter;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface {

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getServiceConfig() {
        return [
            'factories' => [
//                Model\IncidentTable::class        => function ($container) {
//                    $tableGateway = $container->get('Model\IncidentTableGateway');
//
//                    return new Model\IncidentTable($tableGateway);
//                },
//                'Model\IncidentTableGateway' => function ($container) {
//                    $dbAdapter          = $container->get(AdapterInterface::class);
//                    $resultSetPrototype = new ResultSet();
//                    $resultSetPrototype->setArrayObjectPrototype(new Model\Incident());
//
//                    return new TableGateway('album', $dbAdapter, null, $resultSetPrototype);
//                },
            ],
        ];
    }

    public function getControllerConfig() {
        return [
            'factories' => [
                Controller\TicketController::class => function ($container) {
                    return new Controller\TicketController(
//                        $container->get(Model\IncidentTable::class)
                            );
                },
            ],
        ];
    }

}
