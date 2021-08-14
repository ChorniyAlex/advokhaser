<?php

use yii\helpers\Html;
use yii\helpers\Url;

$current_url = Url::current();

?>

<nav id="nav">
    <div class="top-nav">
        <!-- Start Lang_mobil widget -->
        <?= app\components\Lang_mobilWidget::widget() ?>
        <!-- End Lang_mobil widget -->
        <div class="logo-nav">
            <?php if ($current_url == '/' || $current_url == '/web/' || str_contains($current_url, 'ua_content')) : ?>
                <a class="logo" href="<?= Url::home() ?>">
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
        </div>

        <!-- Start Top_menu widget -->
        <?= app\components\Top_menuWidget::widget() ?>
        <!-- End Top_menu widget -->

        <!--  Start hamburger-menu widget  -->
        <?= app\components\Hamburger_menuWidget::widget() ?>
        <!--  End hamburger-menu widget  -->
    </div>
</nav>