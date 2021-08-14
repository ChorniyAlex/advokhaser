<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент защита по уголовным делам -->
<div class="content-epigraf">
    <p id="epigraf-content">"Один несправедливий вирок приносить більше горе, ніж численні злочини, вчинені приватними особами: останні псують тільки струмки, тоді як несправедливий суддя псує все джерело"</p>
</div>
<div class="main-content">
    <article>
        <h1>Захист у кримінальних справах</h1>
        <div><?= Html::img('@web/img/photo-zaschita-po-ugolovnim.jpg', ['class' => 'content-photo', 'alt' => 'photo-zaschita-po-ugolovnim']) ?>
            <p class="content-photo-text">Ми – надійна опора і захист для клієнтів!</p>
        </div>
        <h3>Адвокатська компанія Дашко і Чорнобай завжди готова надати Вам професійну допомогу</h3>
        <p class="content-text">Ми здійснюємо захист прав, свобод і законних інтересів підозрюваного, обвинуваченого, підсудного, засудженого, виправданого, особи, щодо якої передбачається застосування примусових заходів медичного або виховного характеру або вирішується питання про їх застосуванні в кримінальному провадженні, особи, щодо якої розглядається питання про видачу іноземній державі (екстрадицію), а також особи, яка притягається до адміністративної відповідальності при розгляді справи про адміністративне правопорушення.</p>
        <p class="content-text">Крім того, надаємо правову допомогу свідку в кримінальному провадженні.</p>
        <p class="content-text">А також можемо представляти інтереси потерпілого при розгляді справи про адміністративне правопорушення, прав і обов'язків потерпілого, цивільного позивача, цивільного відповідача у кримінальному провадженні.</p>
        <h3 class="pr">Адвокатська компанія Дашко і Чорнобай - надійний захист Ваших прав та інтересів!</h3>
        <a class="btn" href="<?= Url::toRoute(['ua_content/zapis_consultation']) ?>">Отримати консультацію</a>
    </article>
</div>