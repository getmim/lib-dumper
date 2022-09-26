<?php

return [
    '__name' => 'lib-dumper',
    '__version' => '0.0.2',
    '__git' => 'git@github.com:getmim/lib-dumper.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Rian',
        'email' => 'godamri@gmail.com',
        'website' => '-'
    ],
    '__files' => [
        'modules/lib-dumper' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'Symfony\\Component\\VarDumper' => [
                'type' => 'psr4',
                'base' => 'modules/lib-dumper/third-party/symfony-var-dumper'
            ],
            'Symfony\Polyfill\Mbstring' => [
                'type' => 'psr4',
                'base' => 'modules/lib-dumper/third-party/symfony-polyfill-mbstring'
            ],
        ],
        'files' => [
            'modules/lib-dumper/third-party/symfony-var-dumper/Resources/functions/dump.php' => TRUE
        ]
    ]
];