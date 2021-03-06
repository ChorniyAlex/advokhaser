<?php

use yii\helpers\Html;
use yii\helpers\Url;

$current_url = Url::current();

?>

<div class="lang-mobil">
    <ul class="lang-mobil">
        <?php foreach ($data as $lang) : ?>
            <li>
                <?php $url = $lang->url ?>
                <?php if ($current_url == '/' || $current_url == '/web/') : ?>
                    <a href="<?= yii\helpers\Url::toRoute($url) ?>">
                    <?php elseif (str_contains($current_url, 'ua_content')) : ?>
                        <?php if ($url == 'ua_content/index') : ?>
                            <a href="<?= yii\helpers\Url::to($current_url) ?>">
                            <?php elseif ($url == '#') : ?>
                                <a href="<?= yii\helpers\Url::toRoute($url) ?>">
                                <?php elseif ($url == 'ru_content/index') : ?>
                                    <?php $url = str_replace('ua_', 'ru_', $current_url) ?>
                                    <a href="<?= yii\helpers\Url::to($url) ?>">
                                    <?php endif; ?>
                                <?php elseif (str_contains($current_url, 'ru_content')) : ?>
                                    <?php if ($url == 'ua_content/index') : ?>
                                        <?php $url = str_replace('ru_', 'ua_', $current_url) ?>
                                        <a href="<?= yii\helpers\Url::to($url) ?>">
                                        <?php elseif ($url == '#') : ?>
                                            <a href="<?= yii\helpers\Url::toRoute($url) ?>">
                                            <?php elseif ($url == 'ru_content/index') : ?>
                                                <?php $url = $current_url ?>
                                                <a href="<?= yii\helpers\Url::to($url) ?>">
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?= $lang->name ?>
                                                </a>
            </li>
        <?php endforeach ?>
    </ul>
</div>