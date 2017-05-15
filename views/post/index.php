<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'title',
            'description:ntext',
            [
                'attribute' => 'username',
                'value' => function ($model, $key, $index, $widget)
                {
                    if ($model->user_id == 1) {
                        return $model->user_name . ' (anonimous)';
                    }

                    $user = dektrium\user\models\User::findIdentity($model->user_id);
                    return $user->username;
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
                'visible' => (Yii::$app->user->getIdentity() && Yii::$app->user->getIdentity()->status === 'A'),
            ],
        ],
    ]); ?>
</div>
