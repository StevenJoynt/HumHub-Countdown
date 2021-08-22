<?php
use humhub\libs\Html;
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <strong>Countdown</strong>
    </div>
    <div class="panel-body" style="text-align:center;">
        <div style="font-size:150%;font-weight:bold;"><?= Html::encode($title); ?></div>
        <?= Html::encode($targetDate); ?>
        <div style="font-size:400%;font-weight:bold;"><?= Html::encode($days); ?></div>
        <div style="font-size:150%;font-weight:bold;"><?= Html::encode($direction); ?></div>
    </div>
</div>
