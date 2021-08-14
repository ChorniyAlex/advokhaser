<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент хозяйственные споры -->
<div class="content-epigraf">
    <p id="epigraf-content">"Своевременное обращение к адвокату решит Ваши проблемы быстрее, дешевле, и поможет избежать излишнего усложнения дела"</p>
</div>
<div class="main-content">
    <article>
        <h1>Хозяйственные споры</h1>
        <div><?= Html::img('@web/img/photo-hoz-business.jpg', ['class' => 'content-photo', 'alt' => 'photo-hoz-business']) ?>
            <p class="content-photo-text">Выигрываем там, где другие отступают</p>
        </div>
        <h3>Адвокатская компания Дашко и Чорнобай всегда готова оказать Вам профессиональную помощь</h3>
        <p class="content-text">Хозяйственные споры возникают у субьектов хозяйствования во время осуществления ими своей хозяйственной деятельности. Такие споры могут быть как с другими субьектами хозяйствования, так и с государственными органами, органами местного самоуправления, а также с физическими лицами.</p>
        <p class="content-text">Наше задание, как адвокатов, в таких спорах – это своевременное предоставление правовой помощи, подготовка необходимых документов (в основном претензионного характера) и устранение негативных последствий, для клиента наименее затратным путем.</p>
        <p class="content-text">Конечно, результат для клиента – наша прерогатива, а потому для более своевременной и полной защиты интересов клиента, Вы должны обратиться к нам не отлагательно.</p>
        <h3 class="pr">Адвокатская компания Дашко&Чорнобай - надежная защита Ваших прав и интересов!</h3>
        <a class="btn" href="<?= Url::toRoute(['ru_content/zapis_consultation']) ?>">Получить консультацию</a>
    </article>
</div>