<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\search\CoursesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="courses-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'keywords') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'category_child_id') ?>

    <?php // echo $form->field($model, 'sum') ?>

    <?php // echo $form->field($model, 'teacher') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
