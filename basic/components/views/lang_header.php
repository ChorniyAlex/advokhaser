<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<ul class="lang-header">
    <?php foreach ($data as $lang) : ?>
        <li>
            <?php $url = $lang->url ?>
            <a href="<?= yii\helpers\Url::toRoute($url) ?>">
                <?= $lang->name ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>