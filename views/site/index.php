<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContatoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Softmakers Agenda';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Agenda</h1>
    </div>

    <div class="contato-model-index">

    <p>
        <?= Html::a('Adicionar contato', ['/contato/create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a('Listar contatos', ['/contato/index'], ['class' => 'btn btn-primary']) ?>
    </p>

</div>
