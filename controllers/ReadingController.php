<?php

namespace ravesoft\settings\controllers;

/**
 * ReadingController implements Reading Settings page.
 *
 * @author Taras Makitra <makitrataras@gmail.com>
 */
class ReadingController extends SettingsBaseController
{
    public $modelClass = 'ravesoft\settings\models\ReadingSettings';
    public $viewPath = '@vendor/rudderrave/yii2-rave-settings/views/reading/index';

}