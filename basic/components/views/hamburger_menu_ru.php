<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="hamburger-menu">
    <input id="menu-toggle" type="checkbox" />
    <label class="menu-btn" for="menu-toggle">
        <span></span>
    </label>
    <ul class="menu-box">
        <?php foreach ($data as $menu) : ?>
            <li>
                <?php $url = $menu->url_ru ?>
                <?php $class = $menu['class'] ?>
                <a class="<?= $menu->class ?>" href="<?= yii\helpers\Url::toRoute($url) ?>">
                    <?= $menu->name ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</div>