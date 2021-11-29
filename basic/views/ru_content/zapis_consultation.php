<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\MailerForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Заполните форму | Адвокаты Дашко и Чорнобай | Обратная связь | Северодонецк';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- контент формы обратной связи -->
<div class="main-content">
    <div class="content-innovation-servis">
        <h1>Заполните Форму И Получите Консультацию Адвоката!</h1>

        <!-- Начало формы обратной связи -->
        <div class="contactBody">
            <div class="wrapper">
                <div class="title">
                    <h2>Обратная связь</h2>
                </div>
                <?php $form = ActiveForm::begin(['id' => 'zapis_consultation-form',  'options' => ['class' => 'form']]); ?>
                <?= $form->field($model, 'fromName')->textInput(['class' => 'name entry', 'placeholder' => 'Ваше имя', 'title' => 'Ваше имя'])->label(false) ?>
                <?= $form->field($model, 'subject')->textInput(['class' => 'name entry', 'placeholder' => 'Ваш телефон', 'title' => 'Ваш телефон'])->label(false) ?>
                <?= $form->field($model, 'body')->textarea(['class' => 'message entry', 'placeholder' => 'Ваш вопрос:', 'title' => 'Ваш вопрос'])->label(false) ?>
                <div class="form-group">
                    <?= Html::submitButton($content = 'Отправить', ['class' => 'btn submit entry', 'name' => 'contact-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
                <div class="shadow"></div>
            </div>
        </div>
        <!-- Конец формы обратной связи -->
    </div>
</div>