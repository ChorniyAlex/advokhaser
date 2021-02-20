<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="header-mobil">
    <header>
        <a class="logo" href="<?= \yii\helpers\Url::home() ?>">
            <?= Html::img('@web/img/logo.svg', ['alt' => 'логотип Бездоля и Дашко']) ?>
            <p>Адвокатская компания</p>
        </a>
        <div class="phone-headers">+38(050) 929-46-24<br>+38(066) 073-97-61</div>
    </header>
</div>