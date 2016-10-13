<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Mural */

$this->title = 'Create Mural';
$this->params['breadcrumbs'][] = ['label' => 'Murals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mural-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
