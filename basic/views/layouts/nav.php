<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<nav id="nav">
    <div class="top-nav">
        <!-- Start Lang_mobil widget -->
        <?= app\components\Lang_mobilWidget::widget() ?>
        <!-- End Lang_mobil widget -->
        <div class="logo-nav">
            <a class="logo" href="<?= Url::home() ?>">
                <?= Html::img('@web/img/logo.svg', ['alt' => 'логотип Бездоля и Дашко']) ?>
                <p>Адвокатская компания</p>
            </a>
        </div>

        <!-- Start Top_menu widget -->
        <?= app\components\Top_menu_ruWidget::widget() ?>
        <!-- End Top_menu widget -->

        <!--  Start hamburger-menu widget  -->
        <?= app\components\Hamburger_menu_ruWidget::widget() ?>
        <!--  End hamburger-menu widget  -->

    </div>
</nav>