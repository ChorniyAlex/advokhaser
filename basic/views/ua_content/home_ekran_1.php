<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="home-ekran-1">
    <div class="head-innovation">
        <h2>Правова допомога, юридичні послуги</h2>
        <h3>спецпроект: інноваційний IT-сервіс online 24/7</h3>
        <br>
        <p class="head-innovation-text">Всього кілька кліків дозволять вам:<br>скористуватися нашою унікальною IT-технологією і легко скласти заяву про розірвання шлюбу, про стягнення аліментів...</p>
        <br>
        <a class="btn" href="<?= Url::toRoute(['ua_content/innovation']) ?>" target="_blank">Скласти заяву</a>
    </div>
    <div class="head-side">
        <p class="head-anons">Захист в суді</p>
        <br>
        <p class="head-anons">Юридичні консультації<br>по всіх галузях права</p>
        <br>
        <p class="head-anons">Правова допомога учасникам ДТП</p>
        <br>
        <p class="head-anons">Складання процесуальних документів</p>
        <a class="btn" href="<?= Url::toRoute(['ua_content/zapis_consultation']) ?>">Отримати консультацію</a>
    </div>
</div>