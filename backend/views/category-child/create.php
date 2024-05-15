<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\CategoryChild $model */

$this->title = 'Create Category Child';
$this->params['breadcrumbs'][] = ['label' => 'Category Children', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-child-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
