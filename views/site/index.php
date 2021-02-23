<?php

/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;

$this->title = 'My Yii Application';

$script = <<< JS
   jQuery(function($){
   $("#orders-phone").mask("+7(999)999-99-99");
});
JS;
$this->registerJs($script, $position = \yii\web\View::POS_READY);

?>
<div class="d-flex justify-content-center">
    <h1>Пожалуйста, введите данные!</h1>
    <div class="col-lg-4">
        <?php Pjax::begin() ?>
        <?php $form = \yii\widgets\ActiveForm::begin([
            'id' => 'my-form-id',
            'options' => [
                'class' => 'form-horizontal',
                'data-pjax' => true,
            ],
        ]); ?>
        <?= $form->field($model, 'name')->textInput(); ?>
        <?= $form->field($model, 'phone')->textInput(); ?>
        <?= $form->field($model, 'email')->textInput(); ?>
        <?= Html::submitButton('Отправить'); ?>
        <?php $form->end(); ?>
        <?php Pjax::end(); ?>
    </div>
</div>
