<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент юридические консультации -->
<div class="content-epigraf">
    <p id="epigraf-content">Своєчасне звернення до адвоката вирішить Ваші проблеми швидше, дешевше, і допоможе уникнути зайвого ускладнення справи"</p>
</div>
<div class="main-content">
    <article>
        <h1>Юридичні консультації</h1>
        <div><?= Html::img('@web/img/photo-lawyer-consultation.jpg', ['class' => 'content-photo', 'alt' => 'photo-lawyer-consultation']) ?>
            <p class="content-photo-text">Ми – надійна опора и захист для клієнтів!</p>
        </div>
        <h3>Адвокатська компанія Дашко & Ко. завжди готова надати Вам професійну допомогу</h3>
        <p class="content-text">Ми надаємо правову інформацію, консультації і роз’яснення з правових питань, здійснюємо правовий супровід діяльності юридичних і фізичних осіб.</p>
        <p class="content-text">Юридичні консультації можуть надаватися як в усній, так і в письмовій формі з посиланням на відповідні норми чинного законодавства.</p>
        <p class="content-text">Юридичні консультації можуть надаватися також в формі супроводу різних угод і правочинів: таких, наприклад, як купівля-продаж нерухомості, або укладання інших договорів, контрактів між фізичними, юридичними особами.</p>
        <h3 class="pr">Адвокатська компания Дашко & Ко. - надійний захист Ваших прав та інтересів!</h3>
        <a class="btn" href="<?= Url::toRoute(['ua_content/zapis_consultation']) ?>">Отримати консультацію</a>
    </article>
</div>