<?php

use sij\humhub\modules\countdown\Events;
use sij\humhub\modules\countdown\Module;

use humhub\modules\space\widgets\Menu;
use humhub\modules\user\widgets\ProfileMenu;
use humhub\modules\user\widgets\ProfileSidebar;
use humhub\modules\space\widgets\Sidebar;

return [
  'id' => 'countdown',
  'class' => 'sij\humhub\modules\countdown\Module',
  'namespace' => 'sij\humhub\modules\countdown',
  'events' => [
    [   'class' => Sidebar::className(),
        'event' => Sidebar::EVENT_INIT,
        'callback' => [Events::class, 'onSpaceSidebarInit'],
    ],
  ],
];
