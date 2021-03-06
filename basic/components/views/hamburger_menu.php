<?php

use yii\helpers\Html;
use yii\helpers\Url;

$current_url = Url::current();

?>

<div class="hamburger-menu">
    <input id="menu-toggle" type="checkbox" />
    <label class="menu-btn" for="menu-toggle">
        <span></span>
    </label>
    <ul class="menu-box">
        <?php foreach ($data as $menu) : ?>
            <li>
                <?php if ($current_url == '/' || $current_url == "/web/" || str_contains($current_url, 'ua_content')) : ?>
                    <?php $url = $menu->url_ua ?>
                    <?php $class = $menu['class'] ?>
                    <a class="<?= $menu->class ?>" href="<?= yii\helpers\Url::toRoute($url) ?>">
                        <?= $menu->name_ua ?>
                    </a>
                <?php endif; ?>
                <?php if (str_contains($current_url, 'ru_content')) : ?>
                    <?php $url = $menu->url_ru ?>
                    <?php $class = $menu['class'] ?>
                    <a class="<?= $menu->class ?>" href="<?= yii\helpers\Url::toRoute($url) ?>">
                        <?= $menu->name_ru ?>
                    </a>
                <?php endif; ?>
            </li>
        <?php endforeach ?>
    </ul>
</div>