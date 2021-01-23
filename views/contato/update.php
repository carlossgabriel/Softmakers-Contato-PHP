<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ContatoModel */

$this->title = 'Update Contato Model: ' . $model->idContato;
$this->params['breadcrumbs'][] = ['label' => 'Contato Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idContato, 'url' => ['view', 'id' => $model->idContato]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contato-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
