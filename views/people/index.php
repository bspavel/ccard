<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PeopleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Peoples';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="people-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create People', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'surname',
            'name',
            'patronymic',
            'login',
            // 'password',
            // 'email:email',
            // 'dept_id',
            // 'job_id',
            // 'edu_lvl_id',
            // 'edu_spec_id',
            // 'listener_id',
            // 'sot',
            // 'published',
            // 'postaddress',
            // 'cellphone',
            // 'homephone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
