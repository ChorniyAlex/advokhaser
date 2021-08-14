<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\MailerForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Письмо отправлено | Адвокаты Дашко и Чорнобай | Обратная связь | Северодонецк';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- контент формы обратной связи -->
<div class="main-content">
    <div class="content-innovation-servis">
        <h1>Ваше письмо отправлено!</h1>

        <!-- Начало формы обратной связи -->
        <div class="contactBody">
            <div class="wrapper">
                <div class="title">
                    <h2>Обратная связь</h2>
                </div>
                <?php $form = ActiveForm::begin(['id' => 'zapis_consultation-form',  'options' => ['class' => 'form']]); ?>
                <h3>Ожидайте, мы скоро свяжемся с вами.</h2>
            </div>
            <?php ActiveForm::end(); ?>
            <div class="shadow"></div>
        </div>
    </div>
    <!-- Конец формы обратной связи -->
</div>
</div>