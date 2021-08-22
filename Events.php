<?php

namespace sij\humhub\modules\countdown;

use Yii;
use yii\helpers\Url;

class Events
{

    public static function onAdminMenuInit($event)
    {
        return; # we do not have an admin menu
    }

    public static function onSpaceSidebarInit($event)
    {
        $space = $event->sender->space;
        if ( $space->isModuleEnabled('countdown') ) {
            $event->sender->addWidget(
                widgets\Sidebar::className(),
                ['contentContainer' => $space],
                ['sortOrder' => intval($space->getSetting('sortOrder', 'countdown'))]
            );
        }
    }

}
