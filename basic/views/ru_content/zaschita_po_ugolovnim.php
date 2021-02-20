<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент защита по уголовным делам -->
<div class="content-epigraf">
    <p id="epigraf-content">"Один несправедливый приговор приносит большее горе, чем многочисленные преступления, совершенные частными лицами: последние портят только ручьи, тогда как несправедливый судья портит весь источник"
    </p>
</div>
<div class="main-content">
    <article>
        <h1>Защита по уголовным делам</h1>
        <div><?= Html::img('@web/img/photo-zaschita-po-ugolovnim.jpg', ['class' => 'content-photo', 'alt' =>           'photo-zaschita-po-ugolovnim']) ?>
            <p class="content-photo-text">Мы – надёжная опора и защита для клиентов!</p>
        </div>
        <h3>Адвокатская компания Бездоля & Дашко всегда готова оказать Вам профессиональную помощь</h3>
        <p class="content-text">Мы осуществляем защиту прав, свобод и законных интересов подозреваемого,
            обвиняемого, подсудимого, осужденного, оправданного, лица, в отношении которого предполагается
            применение принудительных мер медицинского или воспитательного характера или решается вопрос об их
            применении в уголовном производстве, лица, в отношении которого рассматривается вопрос о выдаче
            иностранному государству ( экстрадиции), а также лица, привлекаемого к административной ответственности
            при рассмотрении дела об административном правонарушении.
        </p>
        <p class="content-text">Кроме того, оказываем правовую помощь свидетелю в уголовном производстве.</p>
        <p class="content-text">А также можем представлять интересы потерпевшего при рассмотрении дела об
            административном правонарушении, прав и обязанностей потерпевшего, гражданского истца, гражданского
            ответчика в уголовном производстве.</p>
        <h3 class="pr">Адвокатская компания Бездоля & Дашко - надежная защита Ваших прав и интересов!</h3>
        <a class="btn" href="<?= Url::toRoute(['ru_content/zapis_consultation']) ?>">Получить консультацию</a>
    </article>
</div>