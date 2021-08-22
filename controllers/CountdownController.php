<?php

namespace sij\humhub\modules\countdown\controllers;

use Yii;
use yii\web\HttpException;
use humhub\modules\user\models\User;
use humhub\modules\space\models\Space;
use humhub\modules\content\components\ContentContainerController;
use sij\humhub\modules\countdown\models\ConfigureForm;

class CountdownController extends ContentContainerController
{

    /**
     * Configuration Action for Space Admins
     */
    public function actionConfig()
    {
        $container = $this->contentContainer;
        $form = new ConfigureForm();
        $form->targetDate = $container->getSetting('targetDate', 'countdown');
        $form->title = $container->getSetting('title', 'countdown');
        $form->sortOrder = $container->getSetting('sortOrder', 'countdown');
        if ( $form->load(Yii::$app->request->post()) && $form->validate() ) {
            $container->setSetting('targetDate', $form->targetDate, 'countdown');
            $container->setSetting('title', $form->title, 'countdown');
            $container->setSetting('sortOrder', $form->sortOrder, 'countdown');
            return $this->redirect($container->createUrl('/countdown/countdown/config'));
        }
        return $this->render('config', array('model' => $form));
    }

}
