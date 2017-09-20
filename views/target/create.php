<?php
use yii\bootstrap\ActiveForm;
?>
<div class="row">
    <div class="col-md-6">
        <?php $form = ActiveForm::begin();?>
        <?= $form->field($model, 'year');?>
        <?= $form->field($model, 'title');?>
        <?= \yii\bootstrap\Button::widget(['label'=>'新建','options' => ['class' => 'btn-primary'],]);?>
        <?php ActiveForm::end();?>

    </div>
</div>

