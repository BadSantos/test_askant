<?
use yii\helpers\ArrayHelper;
 
return [
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'db'=>[
			'class' => 'yii\db\Connection',
			'dsn' => 'pgsql:host=127.0.0.1 port=5432 dbname=askant',
			'username' => 'askant',
			'password' => 'QJs~$y',
			'charset' => 'utf8',
		],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'class' => 'yii\log\Dispatcher',
        ],
		'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
		'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
	'modules' => [
        
    ],
    'params' => ArrayHelper::merge(
		require(__DIR__ . '/params.php'),
		require(__DIR__ . '/params-local.php')
	),
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'debug';
    $config['bootstrap'][] = 'gii';
    
    $config['modules']['debug'] = 'yii\debug\Module';
	$config['modules']['gii'] = 'yii\gii\Module';
}
?>