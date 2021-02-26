<?php

use yii\helpers\Html;

?>

<!-- контент о нас -->
<div class="content-epigraf">
    <p id="epigraf-content">Мы не можем изменить произошедшее, но мы можем помочь свести к минимуму негативные последствия случившегося"</p>
</div>
<div class="main-content">
    <article>
        <h1>О нас</h1>
        <div><?= Html::img('@web/img/photo-o-nas.jpg', ['class' => 'content-photo', 'alt' => 'photo-o-nas']) ?>
            <p class="content-photo-text">Мы – надёжная опора и защита для клиентов!</p>
        </div>
        <h3>Адвокатская компания Дашко & Ко. всегда готова оказать Вам профессиональную помощь</h3>
        <p class="content-text">Адвокатская компания Дашко & Ко. – это команда опытных адвокатов, любящих своё
            дело. Оказываем юридическую помощь своим клиентам уже более 20 лет: защита и представительство в судах
            всех инстанций, в правоохранительных органах, а также составление исковых заявлений, жалоб, договоров и
            других документов. Подберём наиболее оптимальный и подходящий способ и стратегию защиты Ваших прав и
            интересов.</p>
        <br>
        <div><?= Html::img('@web/img/photo-dashko.JPG', ['class' => 'content-photo', 'alt' => 'photo-dashko']) ?>
            <p class="content-photo-text">Управляющий партнёр, Адвокат<br>Член дисциплинарной комиссии адвокатуры Луганской области<br>Опыт работы в юриспруденции: с 1991 г.</p>
        </div>
        <a class="btn" href="https://erau.unba.org.ua/profile/8373" target="_blank">Проверить в ЕРАУ</a>
        <div class="o-bezdolya"><?= Html::img('@web/img/photo-bezdolya.JPG', ['class' => 'content-photo', 'alt' => 'photo-bezdolya']) ?>
            <p class="content-photo-text">Адвокат<br>Опыт работы в юриспруденции: с 2005 г.</p>
        </div>
        <a class="btn" href="https://erau.unba.org.ua/profile/57777" target="_blank">Проверить в ЕРАУ</a>

        <h3 class="pr">Адвокатская компания Дашко & Ко. - надежная защита Ваших прав и интересов!</h3>
    </article>
</div>