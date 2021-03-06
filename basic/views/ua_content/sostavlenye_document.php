<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент составление процессуальных документов -->
<div class="content-epigraf">
    <p id="epigraf-content">"Своєчасне звернення до адвоката вирішить Ваші проблеми швидче, дешевше, і допоможе уникнути зайвого ускладнення справи"</p>
</div>
<div class="main-content">
    <article>
        <h1>Складання позовних заяв, скарг, договорів</h1>
        <div><?= Html::img('@web/img/photo-sostavlenye-document.jpg', ['class' => 'content-photo', 'alt' =>              'photo-sostavlenye-document']) ?>
            <p class="content-photo-text">Ми – надійна опора і захист для клієнтів!</p>
        </div>
        <h3>Адвокатська компанія Дашко & Ко. завжди готова надати Вам професійну допомогу</h3>
        <p class="content-text">Ми займаємося складанням заяв, скарг, процесуальних та інших документів правового характеру, а також складанням будь-якого виду договорів та контрактів.</p>
        <h3 class="pr">Адвокатська компанія Дашко & Ко. - надійний захист Ваших прав та інтересів!</h3>
        <a class="btn" href="<?= Url::toRoute(['ua_content/zapis_consultation']) ?>">Отримати консультацію</a>
    </article>
</div>