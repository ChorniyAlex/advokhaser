<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Заполните форму | Адвокаты Бездоля и Дашко | Обратная связь | Северодонецк';
$this->params['breadcrumbs'][] = $this->title;

?>

<!-- контент формы обратной связи -->
<div class="main-content">
    <div class="content-innovation-servis">
        <h1>Заповніть Форму І Отримайте Консультацію Адвоката!</h1>

        <!-- Начало формы обратной связи -->
        <div class="contactBody">
            <div class="wrapper">
                <div class="title">
                    <h2>Зворотній зв’язок</h2>
                </div>
                <?= $form = Html::beginForm(['id' => 'mailer-form'], 'post', ['class' => 'form']); ?>
                <?= Html::input('text', 'fromName', $model->fromName, ['class' => 'name entry', 'placeholder' => 'Ваше ім’я']); ?>
                <?= Html::input('text', 'fromEmail', $model->fromEmail, ['class' => 'email entry', 'placeholder' => 'Ваш e-mail']); ?>
                <?= Html::input('text', 'subject', $model->subject, ['class' => 'email entry', 'placeholder' => 'Ваш телефон']); ?>
                <?= Html::textarea('body', $model->body, $options = ['class' => 'message entry', 'placeholder' => 'Ваше питання:']); ?>
                <?= Html::button($content = 'Відправити', $options = ['class' => 'submit entry', 'type' => 'submit', 'name' => 'contact-button']); ?>
                <?= Html::endForm() ?>
                <div class="shadow"></div>
            </div>
        </div>
    </div>
</div>