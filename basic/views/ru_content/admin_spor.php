<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент админспоры с органами власти  -->
<div class="content-epigraf">
    <p id="epigraf-content">"Незнание закона не освобождает от ответственности.<br>Знание - запросто."</p>
</div>
<div class="main-content">
    <article>
        <h1>Административные споры с органами власти</h1>
        <div><?= Html::img('@web/img/photo-admin-spor.jpg', ['class' => 'content-photo', 'alt' => 'photo-admin-spor']) ?>
            <p class="content-photo-text">Выигрываем там, где другие отступают</p>
        </div>
        <h3>Адвокатская компания Дашко и Чорнобай всегда готова оказать Вам профессиональную помощь</h3>
        <p class="content-text">Как всем известно, наши органы государственной власти и местного самоуправления не
            всегда лояльно относятся к простым гражданам, пытаясь постоянно ставить им преграды и отстаивать только
            необходимы себе интересы.</p>
        <p class="content-text">Указанное влечет за собой споры с этими органами власти относительно осуществления
            ими своих функций. Так могут, например, безосновательно отказать в предоставлении необходимой справки
            или утверждении необходимых документов, что приводит к возникновению конфликта и спора. Перечень таких
            споров может быть бесконечным, но мы всегда пытаемся добиться защиты законных интересов клиента всеми
            имеющимися правовыми методами.</p>
        <p class="content-text">Наша помощь клиенту в данном виде споров может выражаться в подготовке необходимых
            писем, обращений, жалоб, заявлений, а также исковых заявлений. Кроме того, мы можем представлять
            интересы клиента в самих этих органах власти и местного самоуправления, а при необходимости и в суде.
        </p>
        <h3 class="pr">Адвокатская компания Дашко и Чорнобай - надежная защита Ваших прав и интересов!</h3>
        <a class="btn" href="<?= Url::toRoute(['ru_content/zapis_consultation']) ?>">Получить консультацию</a>
    </article>
</div>