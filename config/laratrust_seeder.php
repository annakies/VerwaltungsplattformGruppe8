<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'administrator' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'verwaltung' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'mitarbeiter' => [
            'profile' => 'r,u',
        ],
        'kunde' => [
            'profile' => 'c,r,u,d',
        ],
        'lieferant' => [
            'profile' => 'c,r,u,d',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
