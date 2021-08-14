<?php

use yii\helpers\Html;
use yii\helpers\Url;

$current_url = Url::current();

?>

<div class="header-mobil">
    <header>
        <?php if ($current_url == '/' || $current_url == '/web/' || str_contains($current_url, 'ua_content')) : ?>
            <a class="logo" href="<?= \yii\helpers\Url::home() ?>">
            <?php else : ?>
                <a class="logo" href="<?= yii\helpers\Url::toRoute('ru_content/index') ?>">
                <?php endif; ?>
                <?= Html::img('@web/img/logo.svg', ['alt' => 'логотип Дашко и Ко.']) ?>
                <?php if ($current_url == '/' || $current_url == '/web/' || str_contains($current_url, 'ua_content')) : ?>
                    <p>Адвокатська компанія</p>
                <?php else : ?>
                    <p>Адвокатская компания</p>
                <?php endif; ?>
                </a>
                <div class="phone-headers">+38(066) 073-97-61<br>+38(095) 459-69-83</div>
    </header>
</div>