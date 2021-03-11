<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Task */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php if (!Yii::$app->user->isGuest) {
        if (Yii::$app->user->identity->username == 'admin') { ?>
            <p style="font-size: 17px">
                Task for: <br>
                username: <?=$model->username?> <br>
                email: <?=$model->email?> <br>
            </p>
    <?php
        }
    } else { ?>
        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?php } ?>

    <?= $form->field($model, 'task_text')->textarea(['rows' => 6]) ?>

    <?php if (!$model->isNewRecord) { ?>
        <?= $form->field($model, 'is_completed')->checkbox() ?>
    <?php } ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
