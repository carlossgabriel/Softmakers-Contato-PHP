<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContatoModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contato-model-form">

    <?php $form = ActiveForm::begin([
        
    ]); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sobrenome')->textInput(['maxlength' => true]) ?>

    
    <?= $form->field($model, 'telefone')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'endereco')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'foto')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Voltar', ['view', 'id' => $model->idContato], ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
