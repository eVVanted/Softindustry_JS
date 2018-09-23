<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\City */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'country_id')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'title')->textInput(['placeholder' => 'City','maxlength' => true])->label(false) ?>

    <?= $form->field($model, 'desc')->textarea(['placeholder' => 'Description','rows' => 3])->label(false) ?>

    <div class="form-group">
        <button type="button" id="btn-submit" class="submit btn btn-primary">Submit </button>
        <button type="button" id="btn-cancel" class="btn btn-default">Cancel </button>
    </div>

    <?php ActiveForm::end(); ?>

</div>
