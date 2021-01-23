<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ContatoModel */

$this->title = $model->nome." ".$model->sobrenome;
\yii\web\YiiAsset::register($this);
?>
<div class="contato-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'foto',
            //'idContato',
            'nome',
            'sobrenome',
            'telefone',
            'email:email',
            'endereco',
            'instagram',
        ],
        ]) ?>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->idContato], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->idContato], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Voltar', ['index'], ['class' => 'btn btn-primary']) ?>
    </p>

</div>
