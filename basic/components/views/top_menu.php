<?php

use yii\helpers\Html;
use yii\helpers\Url;

$current_url = Url::current();

?>

<ul class="top-menu">
    <?php foreach ($tree as $menu) : ?>
        <li>
            <?php if ($current_url == '/' || $current_url == '/web/' || str_contains($current_url, 'ua_content')) : ?>
                <?php $url = $menu['url_ua'] ?>
                <a href="<?= yii\helpers\Url::toRoute($url) ?>">
                    <?= $menu['name_ua'] ?>
                </a>
                <?php if (isset($menu['childs'])) : ?>
                    <ul class="<?= ($menu['class']) ?>">
                        <?php foreach ($menu['childs'] as $submenu) : ?>
                            <li>
                                <?php $url_sub = $submenu['url_ua'] ?>
                                <a href="<?= yii\helpers\Url::toRoute($url_sub) ?>">
                                    <?= $submenu['name_ua'] ?>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                <?php endif; ?>
            <?php endif; ?>
            <?php if (str_contains($current_url, 'ru_content')) : ?>
                <?php $url = $menu['url_ru'] ?>
                <a href="<?= yii\helpers\Url::toRoute($url) ?>">
                    <?= $menu['name_ru'] ?>
                </a>
                <?php if (isset($menu['childs'])) : ?>
                    <ul class="<?= ($menu['class']) ?>">
                        <?php foreach ($menu['childs'] as $submenu) : ?>
                            <li>
                                <?php $url_sub = $submenu['url_ru'] ?>
                                <a href="<?= yii\helpers\Url::toRoute($url_sub) ?>">
                                    <?= $submenu['name_ru'] ?>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                <?php endif; ?>
            <?php endif; ?>
        </li>
    <?php endforeach ?>
</ul>