<?php

use dee\angular\Angular;
use biz\client\ModuleAsset;

/* @var $this yii\web\View */

ModuleAsset::register($this);
?>
<?=
Angular::widget([
    'requires' => ['app.angular', 'ui.bootstrap',],
    'routes' => [
        '/site' => [
            'view' => 'site/index'
        ],
        '/purchase' => [
            'view' => 'purchase/index',
            'di' => ['Purchase',],
        ],
        '/purchase/view/:id' => [
            'view' => 'purchase/view',
            'di' => ['Purchase',],
        ],
        '/purchase/update/:id' => [
            'view' => 'purchase/update',
            'di' => ['Purchase',],
        ],
        '/purchase/create' => [
            'view' => 'purchase/create',
            'di' => ['Purchase',],
        ],
        '/movement' => [
            'view' => 'movement/index',
            'di' => ['Movement',],
        ],
        '/movement/view/:id' => [
            'view' => 'movement/view',
            'di' => ['Movement',],
        ],
        '/movement/update/:id' => [
            'view' => 'movement/update',
            'di' => ['Movement',],
        ],
        '/movement/create/:reff/:id' => [
            'view' => 'movement/create',
            'di' => ['Movement',],
        ],
    ],
    'defaultPath' => '/site',
    'jsFile' => 'main.js',
    'useNgApp' => false,
]);
?>