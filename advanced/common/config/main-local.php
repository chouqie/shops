<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=orangelala',
            'username' => 'root',
            'password' => 'root',
            'charset'  => 'utf8',
            'tablePrefix'  => 'shop_',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];
