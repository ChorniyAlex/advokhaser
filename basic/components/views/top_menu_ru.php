<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<ul class="top-menu">
    <?php foreach ($tree as $menu) : ?>
        <li>
            <?php $url = $menu['url_ru'] ?>
            <a href="<?= yii\helpers\Url::toRoute($url) ?>">
                <?= $menu['name'] ?>
            </a>
            <?php if (isset($menu['childs'])) : ?>
                <ul class="<?= ($menu['class']) ?>">
                    <?php foreach ($menu['childs'] as $submenu) : ?>
                        <li>
                            <?php $url_sub = $submenu['url_ru'] ?>
                            <a href="<?= yii\helpers\Url::toRoute($url_sub) ?>">
                                <?= $submenu['name'] ?>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            <?php endif; ?>
        </li>
    <?php endforeach ?>
</ul>