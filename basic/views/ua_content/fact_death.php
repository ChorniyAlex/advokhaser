<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\MailerForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Заява факт смерті | Адвокати Дашко і Чорнобай | Складання заяв | Сєвєродонецьк';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- контент сервиса установление факта смерти -->
<div class="main-content">
    <div class="content-innovation-servis it">
        <h1>Складання заяви про встановлення факту смерті</h1>
        <div class="title">
            <br>
            <h2>Дійте згідно нижче розміщеним підказкам і уважно заповнюйте поля українською мовою (всі поля обов'язкові для заповнення), а також завантажте інструкцію (відкриється в новому вікні) і перейдіть назад на цю сторінку для продовження</h2>
            <br>
            <h4>Вартість - 500 грн, оплата онлайн через банківську платіжну систему по закінченню складання заяви</h4>
        </div>
        <div class="home-ekran-2">
            <div class="container-icon">
                <a href="<?= Url::toRoute(['ua_content/fact_death_instruction']) ?>" target="_blank">
                    <div class="icon"><?= Html::img('@web/img/icon-5.svg', ['title' => 'Відкриє згенерований PDF-файл в новому вікні']) ?>
                        <p>інструкція<br><span><span>(безкоштовно)<br>завантажити</span></p>
                    </div>
                </a>
            </div>
        </div>
        <div class="main-content">
            <article>
                <h4>Перш ніж приступати до написання заяви, вам необхідно зібрати наступні документи та інформацію:</h4>
                <ul class="spisok">
                    <li>Свій паспорт та ідентифікаційний код</li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <h4>Тож, починаємо:</h4>
            </article>
        </div>

        <!-- Начало формы сервиса установление факта смерти -->
        <br>
        <p>На даний час сервіс не доступний у зв'язку з проведенням технічних робіт.<br> Орієнтовний час доступності сервісу - вересень 2021 року.</p>
        <!-- Конец формы сервиса установление факта смерти -->
    </div>
</div>