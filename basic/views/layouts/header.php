<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<header id="header">
    <div class="header-top">
        <p class="phone-headersTop"><span class="top-contact">контакты:</span> +38(066) 073-97-61</p>
        <div class="language">
            <!-- Start Lang_header widget -->
            <?= app\components\Lang_headerWidget::widget() ?>
            <!-- End Lang_header widget -->
        </div>
    </div>
</header>