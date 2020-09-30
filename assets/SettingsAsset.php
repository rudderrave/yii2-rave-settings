<?php

namespace ravesoft\settings\assets;

use yii\web\AssetBundle;

/**
 * SettingsAsset.
 */
class SettingsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/rudderrave/yii2-rave-settings/assets/source';
    public $css = [
        'css/settings.css',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
        'ravesoft\assets\RaveAsset'
    ];

}