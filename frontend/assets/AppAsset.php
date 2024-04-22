<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    "css/bootstrap.min.css",
    "css/style.css",
    "css/responsive.css"
    ];
    public $js = [
"js/jquery-3.3.1.js",
"js/jquery-migrate-3.0.0.min.js",
"js/popper.min.js",
"js/bootstrap.min.js",
"js/jquery.mmenu.all.js",
"js/ace-responsive-menu.js",
"js/bootstrap-select.min.js",
"js/isotop.js",
"js/snackbar.min.js",
"js/simplebar.js",
"js/parallax.js",
"js/scrollto.js",
"js/jquery-scrolltofixed-min.js",
"js/jquery.counterup.js",
"js/wow.min.js",
"js/progressbar.js",
"js/slider.js",
"js/timepicker.js",
"js/script.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
