<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/emil/Documents/code/lundbergsab/user/config/plugins/email.yaml',
    'modified' => 1491210004,
    'data' => [
        'enabled' => true,
        'from' => 'mail@example.com',
        'to' => 'mail@example.com',
        'mailer' => [
            'engine' => 'none',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
