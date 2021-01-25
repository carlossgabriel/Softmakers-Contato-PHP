<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContatoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contatos';
?>
<div class="contato-model-index">

    <div class="jumbotron">
        <h1>Agenda</h1>
    </div>

    <p>
        <?= Html::a('Adicionar contato', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //'idContato',
            'nome',
            'sobrenome',
            'telefone',
            'email:email',
            //'endereco',
            //'instagram',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
