<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент земельные споры -->
<div class="content-epigraf">
    <p id="epigraf-content">"Своєчасне звернення до адвоката вирішить Ваші проблеми швидче, дешевше, і допоможе уникнути зайвого ускладнення справи"</p>
</div>
<div class="main-content">
    <article>
        <h1>Земельні спори</h1>
        <div><?= Html::img('@web/img/photo-zemelnoye-pravo.jpg', ['class' => 'content-photo', 'alt' =>           'photo-zemelnoye-pravo']) ?>
            <p class="content-photo-text">Ми – надійна опора і захист для клієнтів!</p>
        </div>
        <h3>Адвокатська компанія Дашко & Ко. завжди готова надати Вам професійну допомогу</h3>
        <p class="content-text">На даний час виникає багато спорів стосовно спадкування землі, передачі землі в оренду, надання у власність та викупу землі, поділу земельних ділянок та визначення їх меж.</p>
        <p class="content-text">Зазначені спори є складними, оскільки мають свою специфіку та нюанси. За характером своєї роботи ми періодично стикаємося з такими спорами, а тому маємо вже значний досвід у вирішенні вищевказаних спорів.</p>
        <h3 class="pr">Адвокатська компанія Дашко & Ко. - надійний захист Ваших прав та інтересів!</h3>
        <a class="btn" href="<?= Url::toRoute(['ua_content/zapis_consultation']) ?>">Отримати консультацію</a>
    </article>
</div>