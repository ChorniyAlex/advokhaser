<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент жилищное право -->
<div class="content-epigraf">
    <p id="epigraf-content">"Своєчасне звернення до адвоката вирішить Ваші проблеми швидче, дешевше, і допоможе уникнути зайвого ускладнення справи"</p>
</div>
<div class="main-content">
    <article>
        <h1>Житлові спори</h1>
        <div><?= Html::img('@web/img/photo-zhilishnoye-pravo.jpg', ['class' => 'content-photo', 'alt' =>           'photo-zhilishnoye-pravo']) ?>
            <p class="content-photo-text">Виграємо там, де інші відступають</p>
        </div>
        <h3>Адвокатська компанія Дашко & Ко. завжди готова надати Вам професійну допомогу</h3>
        <p class="content-text">Житлові спори – це спори, які виникають в процесі використання житла, його продажу, міни, придбання, оренди, а також в процесі приватизації житла, отримання комунальних послуг тощо.</p>
        <p class="content-text">Допомога у вирішенні зазначених питань входить до нашої компетенції, що підтверджується нашим багатолітнім досвідом роботи в цій сфері. Ми можемо надати допомогу у складанні відповідних договорів, оскарженні вже існуючих договорів. Здійснюємо юридичний супровід при укладенні договорів придбання та відчуження житла.</p>
        <p class="content-text">Також допомагаємо у вирішенні питань зняття осіб з реєстраційного обліку у житлі (їх виписки).</p>
        <h3 class="pr">Адвокатська компанія Дашко & Ко. - надійний захист Ваших прав та інтересів!</h3>
        <a class="btn" href="<?= Url::toRoute(['ru_content/zapis_consultation']) ?>">Отримати консультацію</a>
    </article>
</div>