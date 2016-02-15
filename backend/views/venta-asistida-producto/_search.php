<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\VentaAsistidaProductoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="venta-asistida-producto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'observaciones') ?>

    <?= $form->field($model, 'cantidad_producto') ?>

    <?= $form->field($model, 'venta_asistida_id') ?>

    <?= $form->field($model, 'producto_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>