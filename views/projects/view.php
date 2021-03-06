<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\components\L;

/* @var $this yii\web\View */
/* @var $model app\models\Projects */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => L::t('Projects'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(L::t('Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(L::t('Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => L::t('Are you sure you want to delete this item?', 'models/projects'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description:ntext',
            'price',
            'kurs',
            'date_pochatoc',
            'date_kinetc',
            'days',
            'status',
            'valuta',
            [
              'label' => L::t('Link Site', 'models/projects'),
              'value' => $model->link_site,
            ],
        ],
    ]) ?>

</div>
