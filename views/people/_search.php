<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PeopleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="people-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'surname') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'patronymic') ?>

    <?= $form->field($model, 'login') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'dept_id') ?>

    <?php // echo $form->field($model, 'job_id') ?>

    <?php // echo $form->field($model, 'edu_lvl_id') ?>

    <?php // echo $form->field($model, 'edu_spec_id') ?>

    <?php // echo $form->field($model, 'listener_id') ?>

    <?php // echo $form->field($model, 'sot') ?>

    <?php // echo $form->field($model, 'published') ?>

    <?php // echo $form->field($model, 'postaddress') ?>

    <?php // echo $form->field($model, 'cellphone') ?>

    <?php // echo $form->field($model, 'homephone') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
