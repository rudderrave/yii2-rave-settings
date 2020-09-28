<?php

namespace ravesoft\settings\controllers;

/**
 * DefaultController implements General Settings page.
 *
 * @author Taras Makitra <makitrataras@gmail.com>
 */
class DefaultController extends SettingsBaseController
{
    public $modelClass = 'ravesoft\settings\models\GeneralSettings';
    public $viewPath = '@vendor/rudderrave/yii2-yee-settings/views/default/index';

}