<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\MailerForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Заявление расторжение брака | Адвокаты Дашко и Чорнобай | Составление заявления | Северодонецк';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- контент сервиса расторжение брака -->
<div class="main-content">
    <div class="content-innovation-servis it">
        <h1>Составление искового заявления о расторжении брака</h1>
        <div class="title">
            <br>
            <h2>Следуйте нижеуказанным подсказкам и внимательно заполняйте поля на украинском языке (все поля обязательны для заполнения), а также скачайте инструкцию</h2>
            <br>
            <h4>Стоимость - 500 грн, оплата онлайн через банковскую платёжную систему по окончанию составления заявления</h4>
        </div>
        <div class="home-ekran-2">
            <div class="container-icon">
                <a href="<?= Url::toRoute(['ru_content/divorce']) ?>" target="_blank">
                    <div class="icon"><?= Html::img('@web/img/icon-5.svg', ['alt' => 'сервис онлайн заявлений']) ?>
                        <p>инструкция<br><span>(бесплатно)<br><span>скачать</span></p>
                    </div>
                </a>
            </div>
        </div>
        <div class="main-content">
            <article>
                <h4>Прежде чем приступать к составлению заявления, вам необходимо собрать следующие документы и информацию:</h4>
                <ul class="spisok">
                    <li>Свой паспорт и идентификационный код</li>
                    <li>Свидетельство о браке</li>
                    <li>Свидетельство о рождении ребёнка (детей)</li>
                    <li>Адрес проживания и номер телефона ответчика (супруг, супруга)</li>
                </ul>
                <h4>Итак, начинаем:</h4>
            </article>
        </div>

        <!-- Начало формы сервиса расторжение брака -->
        <br>
        <p>В данный момент сервис не доступен в связи с проведением технических работ.<br>Ориентировочное время доступности сервиса - октябрь 2021 года.</p>
        <!-- Конец формы сервиса расторжение брака -->
    </div>
</div>