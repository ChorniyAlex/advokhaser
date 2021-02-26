<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент представительство в суде -->
<div class="content-epigraf">
    <p id="epigraf-content">"Своєчасне звернення до адвоката вирішить Ваші проблеми швидче, дешевше, і допоможе уникнути зайвого ускладнення справи"</p>
</div>
<div class="main-content">
    <article>
        <h1>Представництво прав та законних інтересів у суді, в правоохоронних органах, в державних установах</h1>
        <div><?= Html::img('@web/img/photo-zaschita-predstavitelstvo.jpg', ['class' => 'content-photo', 'alt' =>           'photo-zaschita-predstavitelstvo']) ?>
            <p class="content-photo-text">Ми – надійна опора і захист для клієнтів!</p>
        </div>
        <h3>Адвокатська компанія Дашко & Ко. завжди готова надати Вам професійну допомогу</h3>
        <p class="content-text">Ми здійснюємо представництво інтересів фізичних та юридичних осіб в судах при
            здійсненні цивільного, господарського, адміністративного та конституційного судочинства, а
            також в інших державних органах, перед фізичними та юридичними особами.</p>
        <p class="content-text">Також можемо представляти інтереси потерпілого при розгляді справи про
            адміністративне правопорушення, прав і обов'язків потерпілого, цивільного позивача, цивільного
            відповідача у кримінальному провадженні.</p>
        <h3 class="pr">Адвокатська компанія Дашко & Ко. - надійний захист Ваших прав та інтересів!</h3>
        <a class="btn" href="<?= Url::toRoute(['ru_content/zapis_consultation']) ?>">Отримати консультацію</a>
    </article>
</div>