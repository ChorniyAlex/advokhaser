<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="home-ekran-1-container">
    <section>
        <div class="innovation-head">
            <h1>Правовая помощь<br>юридические услуги</h1>
            <div class="innovation-content">
                <a href="<?= Url::toRoute(['ru_content/innovation']) ?>" target="_blank">
                    <p class="innovation-text">спецпроект: инновационный IT-сервис online 24/7</p>
                    <?= Html::img('@web/img/photo-innovation.jpg', ['alt' => 'инновационный сервис']) ?>
                    <p class="innovation-photo-text">Всего несколько кликов позволят вам: воспользоваться нашей
                        уникальной IT-технологией и легко составить заявление о расторжении брака, о взыскании
                        алиментов...
                    </p>
                </a>
            </div>
            <a class="btn" href="<?= Url::toRoute(['ru_content/innovation']) ?>" target="_blank">Составить заявление</a>
        </div>
        <div id="epigraf">
            <p class="epigraph-text">"Своевременное обращение к адвокату решит Ваши проблемы быстрее,
                дешевле, и поможет избежать излишнего усложнения дела"</p>
        </div>
    </section>
</div>