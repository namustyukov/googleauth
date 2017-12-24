<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use budyaga\users\components\AuthChoice;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \budyaga\users\models\forms\LoginForm */

$this->title = Yii::t('users', 'LOGIN');

?>
<div class="site-login">
    <h3 class="text-center"><?= Yii::t('users', 'YOU_CAN_ENTER_VIA_SOCIAL_NETWORKS')?></h3>

    <div class="row">
        <div class="col-lg-12">
            <?= AuthChoice::widget([
                'baseAuthUrl' => ['/user/auth/index'],
                'clientCssClass' => 'col-xs-12'
            ]) ?>
        </div>
    </div>
</div>
