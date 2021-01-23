<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ContatoModel */

$this->title = 'Adicionar Contato';
?>
<div class="contato-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
