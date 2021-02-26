<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент составление процессуальных документов -->
<div class="content-epigraf">
    <p id="epigraf-content">"Своевременное обращение к адвокату решит Ваши проблемы быстрее, дешевле, и поможет избежать излишнего усложнения дела"</p>
</div>
<div class="main-content">
    <article>
        <h1>Составление исковых заявлений, жалоб, договоров</h1>
        <div><?= Html::img('@web/img/photo-sostavlenye-document.jpg', ['class' => 'content-photo', 'alt' =>              'photo-sostavlenye-document']) ?>
            <p class="content-photo-text">Мы – надёжная опора и защита для клиентов!</p>
        </div>
        <h3>Адвокатская компания Дашко & Ко. всегда готова оказать Вам профессиональную помощь</h3>
        <p class="content-text">Мы занимаемся составлением заявлений, жалоб, процессуальных и других документов
            правового характера, а также составлением любого вида договоров и контрактов.</p>
        <h3 class="pr">Адвокатская компания Дашко & Ко. - надежная защита Ваших прав и интересов!</h3>
        <a class="btn" href="<?= Url::toRoute(['ru_content/zapis_consultation']) ?>">Получить консультацию</a>
    </article>
</div>