<?php
use yii\helpers\ArrayHelper;

Yii::setAlias('@tests', dirname(__DIR__) . '/tests');

return [
    'id' => 'console-app',
    'controllerNamespace' => 'app\commands',
];
