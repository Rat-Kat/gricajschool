<?php
return [
    'name' => 'Школа психологии Ксении Грицай',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [

        'db' => require (dirname(__DIR__)."/config/db.php"),
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'pages/<view:[a-zA-Z0-9-]+>' => 'main/main/page',
                'article/<id:\d+>'=>'main/main/article',
                'news/<id:\d+>'=>'main/main/new',
                'training/<id:\d+>'=>'main/main/training',
                'vebinar/<id:\d+>'=>'main/main/vebinar',
                'psycholog/<id:\d+>'=>'main/main/psycholog',
                'psychologists'=>'main/main/psychologists',
                'multimedia'=>'main/main/multimedia',
                'consultation/family'=>'main/main/family',
                'consultation/child'=>'main/main/child',
                'consultation/individual'=>'main/main/individual',
                'trainings'=>'main/main/trainings',
                'vebinars'=>'main/main/vebinars',
                'articles'=>'main/main/articles',


            ]
        ],
    ],
];