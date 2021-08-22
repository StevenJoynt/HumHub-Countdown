<?php

namespace sij\humhub\modules\countdown;

use Yii;
use yii\helpers\Url;
use humhub\modules\content\components\ContentContainerActiveRecord;
use humhub\modules\content\components\ContentContainerModule;
use humhub\modules\space\models\Space;

class Module extends ContentContainerModule
{

    public function getContentContainerTypes()
    {
        return [
            Space::class,
        ];
    }

    public function getContentContainerConfigUrl(ContentContainerActiveRecord $container)
    {
        return $container->createUrl('/countdown/countdown/config');
    }

    public function enableContentContainer(ContentContainerActiveRecord $container)
    {
        $targetDate = new \DateTime('now', new \DateTimeZone('UTC'));
        $targetDate->add(new \DateInterval("P1W"));
        $container->setSetting('targetDate', $targetDate->format("d-m-Y"), 'countdown');
        $container->setSetting('title', 'Deadline', 'countdown');
        $container->setSetting('sortOrder', 0, 'countdown');
        parent::enableContentContainer($container);
    }

    public function getContentContainerName(ContentContainerActiveRecord $container)
    {
        return 'Countdown';
    }

    public function getContentContainerDescription(ContentContainerActiveRecord $container)
    {
        return 'Displays the number of days before a scheduled event';
    }

}
