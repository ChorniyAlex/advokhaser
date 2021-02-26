<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="home-ekran-1-container">
    <section>
        <div class="innovation-head">
            <h1>Правова допомога<br>юридичні послуги</h1>
            <div class="innovation-content">
                <a href="<?= Url::toRoute(['ru_content/innovation']) ?>" target="_blank">
                    <p class="innovation-text">спецпроект: інноваційний IT-сервіс online 24/7</p>
                    <?= Html::img('@web/img/photo-innovation.jpg', ['alt' => 'инновационный сервис']) ?>
                    <p class="innovation-photo-text">Всього кілька кліків дозволять вам: скористуватися нашою
                        унікальною IT-технологією і легко скласти заяву про розірвання шлюбу, про стягнення
                        аліментів...</p>
                </a>
            </div>
            <a class="btn" href="<?= Url::toRoute(['ru_content/innovation']) ?>" target="_blank">Скласти заяву</a>
        </div>
        <div id="epigraf">
            <p class="epigraph-text">"Своєчасне звернення до адвоката вирішить Ваші проблеми швидче,
                дешевше, і допоможе уникнути зайвого ускладнення справи"</p>
        </div>
    </section>
</div>