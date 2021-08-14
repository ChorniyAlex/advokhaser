<?php

use yii\helpers\Html;
use yii\helpers\Url;

$current_url = Url::current();

?>

<footer>
    <div class="foot">
        <div class="foot-contacti">
            <div class="fb-ig">
                <div>
                    <a href="<?= yii\helpers\Url::to('https://www.facebook.com/profile.php?id=100049339031333') ?>" target="_blank"><?= Html::img('@web/img/icon-28.svg', ['alt' => 'fb']) ?></a>
                    <a href="<?= yii\helpers\Url::to('https://www.instagram.com/advokatdashko/') ?>" target="_blank"><?= Html::img('@web/img/icon-29.svg', ['alt' => 'ig']) ?></a>
                </div>
            </div>
            <?php if ($current_url == '/' || $current_url == "/web/" || str_contains($current_url, 'ua_content')) : ?>
                <p>Луганська обл., м. Сєвєродонецьк,<br>бул. Дружби Народів, 14 оф.21<br>тел. (066) 073-97-61; (095) 459-69-83<br>(Viber, WhatsApp, Telegram)<br>e-mail: ur_dashko@ukr.net</p>
            <?php else : ?>
                <p>Луганская обл., г. Северодонецк,<br>бул. Дружбы Народов, 14 оф.21<br>тел. (066) 073-97-61; (095) 459-69-83<br>(Viber, WhatsApp, Telegram)<br>e-mail: ur_dashko@ukr.net</p>
            <?php endif; ?>
        </div>
        <?php if ($current_url == '/' || $current_url == '/web/' || str_contains($current_url, 'ua_content')) : ?>
            <a class="logo-foot" href="<?= \yii\helpers\Url::home() ?>">
            <?php else : ?>
                <a class="logo-foot" href="<?= yii\helpers\Url::toRoute('ru_content/index') ?>">
                <?php endif; ?>
                <?= Html::img('@web/img/logo.svg', ['alt' => 'логотип Дашко и Ко. адвокатская компания']) ?>
                <?php if ($current_url == '/' || $current_url == "/web/" || str_contains($current_url, 'ua_content')) : ?>
                    <p>Адвокатська компанія</p>
                <?php else : ?>
                    <p>Адвокатская компания</p>
                <?php endif; ?>
                <p>&copy; <?php $today = getdate(); ?>
                    <?= $today['year'] ?> Advokhaser group yuralex
                </p>
                </a>
                <div class="developer">
                    <?php if ($current_url == '/' || $current_url == "/web/" || str_contains($current_url, 'ua_content')) : ?>
                        <p class="developer-text">web-розробка і техпідтримка сайту:<br>Олександр Чорнобай<br>e-mail:
                            web.comp.alex@gmail.com
                        </p>
                    <?php else : ?>
                        <p class="developer-text">web-разработка и техподдержка сайта:<br>Александр Чорнобай<br>e-mail:
                            web.comp.alex@gmail.com
                        </p>
                    <?php endif; ?>
                </div>
    </div>
</footer>