<?php

namespace ravesoft\settings\controllers;

use ravesoft\controllers\admin\BaseController;
use ravesoft\helpers\RaveHelper;
use Yii;
use ravesoft\models\User;

/**
 * CacheController implements Flush Cache page.
 *
 * @author Taras Makitra <makitrataras@gmail.com>
 */
class CacheController extends BaseController
{
    /**
     * @inheritdoc
     */
    public $enableOnlyActions = ['flush'];

    public function actionFlush()
    {
        if ( User::hasPermission('changeGeneralSettings') ) {
            $frontendAssetPath = Yii::getAlias('@frontend') . '/web/assets/';
            $backendAssetPath = Yii::getAlias('@backend') . '/web/assets/';

            RaveHelper::recursiveDelete($frontendAssetPath);
            RaveHelper::recursiveDelete($backendAssetPath);

            if (!is_dir($frontendAssetPath)) {
                @mkdir($frontendAssetPath);
            }

            if (!is_dir($backendAssetPath)) {
                @mkdir($backendAssetPath);
            }

            if (Yii::$app->cache->flush()) {
                Yii::$app->session->setFlash('crudMessage', 'Cache has been flushed.');
            } else {
                Yii::$app->session->setFlash('crudMessage', 'Failed to flush cache.');
            }

            return Yii::$app->getResponse()->redirect(Yii::$app->getRequest()->referrer);
        }
        return $this->redirect('/');
    }
}