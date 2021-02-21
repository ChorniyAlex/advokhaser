<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<footer>
    <div class="foot">
        <div class="foot-contacti">
            <div class="fb-ig">
                <div>
                    <a href="<?= yii\helpers\Url::to('https://uk-ua.facebook.com/') ?>" target="_blank"><?= Html::img('@web/img/icon-28.svg', ['alt' => 'fb']) ?></a>
                    <a href="<?= yii\helpers\Url::to('https://www.instagram.com/') ?>" target="_blank"><?= Html::img('@web/img/icon-29.svg', ['alt' => 'ig']) ?></a>
                </div>
            </div>
            <p>Луганская обл., г. Северодонецк,<br>бул. Дружбы Народов, 14 оф.21<br>тел. моб. (066) 073-97-61 <br>(Viber, WhatsApp, Telegram)<br>e-mail: ur_dashko@ukr.net</p>
        </div>
        <a class="logo-foot" href="<?= \yii\helpers\Url::home() ?>">
            <?= Html::img('@web/img/logo.svg', ['alt' => 'логотип Бездоля и Дашко адвокатская компания']) ?>
            <p>Адвокатская компания</p>
            <p>&copy; <?php $today = getdate(); ?>
                <?= $today['year'] ?> Advokhaser group yuralex
            </p>
        </a>
        <div class="developer">
            <p class="developer-text">web разработка и техподдержка сайта:<br>Александр Чорнобай<br>e-mail:
                web.comp.alex@gmail.com
            </p>
        </div>
    </div>
</footer>