<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент хозяйственные споры -->
<div class="content-epigraf">
    <p id="epigraf-content">"Своєчасне звернення до адвоката вирішить Ваші проблеми швидче, дешевше, і допоможе уникнути зайвого ускладнення справи"</p>
</div>
<div class="main-content">
    <article>
        <h1>Господарські спори</h1>
        <div><?= Html::img('@web/img/photo-hoz-business.jpg', ['class' => 'content-photo', 'alt' =>           'photo-hoz-business']) ?>
            <p class="content-photo-text">Виграємо там, де інші відступають</p>
        </div>
        <h3>Адвокатська компанія Дашко & Ко. завжди готова надати Вам професійну допомогу</h3>
        <p class="content-text">Господарські спори виникають у суб'єктів господарювання під час здійснення ними своєї господарської діяльності. Такі спори можуть бути як з іншими суб'єктами господарювання, так і з державними органами, органами місцевого самоврядування, а також з фізичними особами.</p>
        <p class="content-text">Наше завдання, як адвокатів, у таких спорах – це вчасне надання правничої допомоги, підготовка необхідних документів (здебільшого претензійного характеру) та усунення негативних наслідків для клієнта найменш затратним шляхом.</p>
        <p class="content-text">Звичайно, результат для клієнта – наша прерогатива, а тому для більш вчасного та повного захисту інтересів клієнта, Ви маєте звернутися до нас не зволікаючи часу.</p>
        <h3 class="pr">Адвокатська компанія Дашко & Ко. - надійний захист Ваших прав та інтересів!</h3>
        <a class="btn" href="<?= Url::toRoute(['ru_content/zapis_consultation']) ?>">Отримати консультацію</a>
    </article>
</div>