<?php

namespace TicketManagement;

use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [
            'ticket-management' => [
                'type' => Segment::class,
                'options' => [
                    'route' => '/ticket-management[/:action[/:id]].html',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\TicketController::class,
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'ticket-management' => __DIR__ . '/../view',
        ],
        'strategies' => [
            'ViewJsonStrategy',
        ],
    ],
];
