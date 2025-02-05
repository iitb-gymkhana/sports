<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class IndexAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/timer.css',
    ];
    public $js = [
        'js/jquery.min.js',
    ];
    public $depends = [
    	'frontend\assets\LayoutAsset'
    ];
}
