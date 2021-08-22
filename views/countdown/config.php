<?php
use humhub\compat\CActiveForm;
use yii\helpers\Html;
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Countdown Module Configuration
    </div>
    <div class="panel-body">

        <?php $form = CActiveForm::begin(); ?>
        <?php echo $form->errorSummary($model); ?>

        <div class="form-group">
            <?php echo $form->field($model, 'targetDate')->widget(
                \yii\jui\DatePicker::className(), [
                'options' => ['class' => 'form-control'],
                'dateFormat' => 'php:d-m-Y',
                ]); ?>
            <?php echo $form->error($model, 'targetDate'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->field($model, 'title'); ?>
            <?php echo $form->error($model, 'title'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->field($model, 'sortOrder'); ?>
            <?php echo $form->error($model, 'sortOrder'); ?>
        </div>

        <hr>

        <?php echo Html::submitButton('Save', array('class' => 'btn btn-primary')); ?>
        <?php CActiveForm::end(); ?>

    </div>
</div>
