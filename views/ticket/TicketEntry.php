<?php

/* @var $this yii\web\View */
/* @var $model app\models\Ticket[] */


use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number') ?>

    <div class="form-group">
        <?= Html::submitButton('Check number', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>


