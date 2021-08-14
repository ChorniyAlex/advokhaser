<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент спооры по кредитам -->
<div class="content-epigraf">
    <p id="epigraf-content">"Своевременное обращение к адвокату решит Ваши проблемы быстрее, дешевле, и поможет избежать излишнего усложнения дела"</p>
</div>
<div class="main-content">
    <article>
        <h1>Споры по кредитам</h1>
        <div><?= Html::img('@web/img/photo-hoz-business.jpg', ['class' => 'content-photo', 'alt' => 'photo-hoz-business']) ?>
            <p class="content-photo-text">Мы – надёжная опора и защита для клиентов!</p>
        </div>
        <h3>Адвокатская компания Дашко и Чорнобай всегда готова оказать Вам профессиональную помощь</h3>
        <p class="content-text">На данное время кредитные споры между клиентом и банком являются очень актуальными, поскольку постепенная потеря гражданами доходов в связи с экономической ситуацией в стране – является основной причиной возникновения споров по кредитам. В связи с этим возникают обязательства перед банками, а банки, в свою очередь, используя ситуацию, пытаются заработать себе сверхдоходы.</p>
        <p class="content-text">Актуальной является проблема огромных долгов, которые возникли у граждан перед банками. В некоторых случаях эти долги можно аннулировать (например, с помощью признания исполнительной надписи нотариуса не подлежащей исполнению) или пересмотреть их размер в сторону значительного уменьшения (например, с помощью процедуры отмены заочного решения), но в любом случае мы подбираем индивидуальный подход к каждой ситуации.</p>
        <p class="content-text">Своевременное обращение клиента к адвокату может решить вопрос относительно проблемных кредитов, даже по судебным решениям, которые были приняты без должника, и о которых он не знал.</p>
        <h3 class="pr">Адвокатская компания Дашко и Чорнобай - надежная защита Ваших прав и интересов!</h3>
        <a class="btn" href="<?= Url::toRoute(['ru_content/zapis_consultation']) ?>">Получить консультацию</a>
    </article>
</div>