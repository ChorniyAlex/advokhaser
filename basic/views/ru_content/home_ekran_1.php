<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="home-ekran-1">
    <div class="head-innovation">
        <h2>Правовая помощь, юридические услуги</h2>
        <h3>спецпроект: инновационный IT-сервис online 24/7</h3>
        <br>
        <p class="head-innovation-text">Всего несколько кликов позволят вам:<br>воспользоваться нашей
            уникальной IT-технологией и легко составить заявление о расторжении брака, о взыскании
            алиментов...
        </p>
        <br>
        <a class="btn" href="<?= Url::toRoute(['ru_content/innovation']) ?>" target="_blank">Составить заявление</a>
    </div>
    <div class="head-side">
        <p class="head-anons">защита в суде</p>
        <br>
        <p class="head-anons">юридические консультации<br>по всем отраслям права</p>
        <br>
        <p class="head-anons">правовая помощь участникам ДТП</p>
        <br>
        <p class="head-anons">составление процессуальных документов</p>
        <a class="btn" href="<?= Url::toRoute(['ru_content/zapis_consultation']) ?>">Получить консультацию</a>
    </div>
</div>