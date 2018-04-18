<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace material;
use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MaterialAsset extends AssetBundle {

//    public $basePath = '@webroot';
//    public $baseUrl = '@web';
    public $sourcePath = '@material/';
    public $css = [
        'dist/plugins/fullPage/jquery.fullPage.css',
        'dist/plugins/bootstrap-3.3.0/css/bootstrap.min.css',
        'dist/plugins/material-design-iconic-font-2.2.0/css/material-design-iconic-font.min.css',
        'dist/plugins/waves-0.7.5/waves.min.css',
        'dist/plugins/bootstrap-table-1.11.0/bootstrap-table.min.js',
        'dist/plugins/bootstrap-table-1.11.0/locale/bootstrap-table-zh-CN.min.js',
        'dist/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css',
        'dist/css/admin.css',
    ];
    public $js = [
        'dist/plugins/jquery.1.12.4.min.js',
        'dist/plugins/bootstrap-3.3.0/js/bootstrap.min.js',
        'dist/plugins/waves-0.7.5/waves.min.js',
        'dist/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js',
        'dist/plugins/bootstrap-table-1.11.0/locale/bootstrap-table-zh-CN.min.js',
        'dist/plugins/BootstrapMenu.min.js',
        'dist/plugins/device.min.js',
        'dist/plugins/fullPage/jquery.fullPage.min.js',
        'dist/plugins/fullPage/jquery.jdirk.min.js',
        'dist/plugins/jquery.cookie.js',
        'dist/js/admin.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
//        'romdim\bootstrap\material\BootMaterialCssAsset',
//        'romdim\bootstrap\material\BootMaterialJsAsset'
    ];

}
