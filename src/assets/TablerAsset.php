<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace lismansihotang\yii2tabler\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class TablerAsset extends AssetBundle
{
    public $basePath = '@webroot/themes/tabler/dist';
    public $baseUrl = '@web/themes/tabler/dist';
    public $css = [
        //'css/site.css',
        'css/tabler.min.css'
    ];
    public $js = [
        'js/tabler.min.js'
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}
