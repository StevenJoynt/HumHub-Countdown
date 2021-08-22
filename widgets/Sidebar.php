<?php

namespace sij\humhub\modules\countdown\widgets;

use Yii;

class Sidebar extends \humhub\components\Widget
{

    public $contentContainer;

    public function run()
    {

        $container = $this->contentContainer;

        $targetDate =  \DateTime::createFromFormat(
            "d-m-Y",
            $container->getSetting('targetDate', 'countdown'),
            new \DateTimeZone('UTC')
        );
        if ( $targetDate === false ) return;

        $now = new \DateTime("now");

        if ( $targetDate == $now ) {
            $days = 'Now!';
            $direction = '';
        } else {
            $days = $now->diff($targetDate, true)->format('%a');
            if ( $targetDate < $now ) {
                $direction = 'days late';
            } else {
                $direction = 'days to go';
            }
        }

        return $this->render(
            'countdownPanel',
            [   'title' => $container->getSetting('title', 'countdown'),
                'targetDate' => $targetDate->format('D jS M Y'),
                'days' => $days,
                'direction' => $direction,
            ]
        );

    }

}
