<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент контакты -->
<div class="main-content">
    <main>
        <article>
            <h1>Контакти</h1>
            <h3 class="contact-podzagolovok">Наш офіс розташований за адресою:</h3>
            <p class="content-text text-contact">93404, Луганська область, м. Сєвєродонецьк<br>бульвар Дружби Народів, 14 офіс 21
            </p>
            <iframe width="600" height="380" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=38.479662537574775%2C48.94984107085199%2C38.48604619503022%2C48.95242682552267&amp;layer=mapnik&amp;marker=48.95113396493873%2C38.48285436630249" style="border: 1px solid rgb(0, 15, 185)"></iframe><br /><small><a href="https://www.openstreetmap.org/?mlat=48.95113&amp;mlon=38.48285#map=18/48.95113/38.48285">Подивитися більшу карту</a></small>
        </article>
        <a class="btn btn_contacti" href="<?= Url::toRoute(['ru_content/zapis_consultation']) ?>">Отримати консультацію</a>
    </main>
    <aside>
        <h2 class="contact">Керівник:</h2>
        <div class="side-content">
            <h2 class="side-podzagolovok">Дашко Юрій Іванович</h2>
            <?= Html::img('@web/img/photo-dashko.JPG', ['class' => 'side-photo', 'alt' => 'photo-dashko']) ?>
            <p class="side-photo-text">моб. 066-073-97-61<br>(Viber, WhatsApp, Telegram)<br>e-mail: ur_dashko@ukr.net</p>
        </div>
        <hr class="line-content">
    </aside>
</div>