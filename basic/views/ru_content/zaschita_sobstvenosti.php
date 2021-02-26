<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент защита права собственности -->
<div class="content-epigraf">
    <p id="epigraf-content">Своевременное обращение к адвокату решит Ваши проблемы быстрее, дешевле, и поможет избежать излишнего усложнения дела"</p>
</div>
<div class="main-content">
    <article>
        <h1>Защита права собственности</h1>
        <div><?= Html::img('@web/img/photo-nasled-sobstv-nalog.jpg', ['class' => 'content-photo', 'alt' =>           'photo-nasled-sobstv-nalog']) ?>
            <p class="content-photo-text">Выигрываем там, где другие отступают</p>
        </div>
        <h3>Адвокатская компания Дашко & Ко. всегда готова оказать Вам профессиональную помощь</h3>
        <p class="content-text">Дела по защите права собственности являются наиболее распространенными в категориях
            гражданских и хозяйственных дел.</p>
        <p class="content-text">К спорам, возникающим по поводу права собственности, относятся, в частности, споры о
            признании права на имущество, об истребовании имущества из чужого незаконного владения, об устранении
            препятствий в осуществлении права пользования и распоряжения имуществом, не связанных с лишением
            владения, исключение имущества из-под ареста, признания сделки недействительной (независимо от заявления
            требования о применении последствий недействительности сделки) и др.</p>
        <p class="content-text">Мы имеем огромный опыт в данной категории дел и позитивные результаты.</p>
        <h3 class="pr">Адвокатская компания Дашко & Ко. - надежная защита Ваших прав и интересов!</h3>
        <a class="btn" href="<?= Url::toRoute(['ru_content/zapis_consultation']) ?>">Получить консультацию</a>
    </article>
</div>