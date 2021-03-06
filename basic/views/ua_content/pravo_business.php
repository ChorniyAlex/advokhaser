<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент споры по кредитам -->
<div class="content-epigraf">
    <p id="epigraf-content">"Своєчасне звернення до адвоката вирішить Ваші проблеми швидче, дешевше, і допоможе уникнути зайвого ускладнення справи"</p>
</div>
<div class="main-content">
    <article>
        <h1>Спори по кредитам</h1>
        <div><?= Html::img('@web/img/photo-hoz-business.jpg', ['class' => 'content-photo', 'alt' =>           'photo-hoz-business']) ?>
            <p class="content-photo-text">Ми – надійна опора і захист для клієнтів!</p>
        </div>
        <h3>Адвокатська компанія Дашко & Ко. завжди готова надати Вам професійну допомогу</h3>
        <p class="content-text">На даний час кредитні спори між клієнтом і банком є дуже актуальними, оскільки поступова втрата громадянами доходів у зв'язку з економічною ситуацією в країні – є основною причиною виникнення спорів по кредитам. У зв'язку із цим виникають зобов'язання перед банками, а банки, в свою чергу, використовуючи ситуацію, намагаються заробити собі надприбуток.</p>
        <p class="content-text">Нагальною є проблема величезних боргів, які виникли у громадян перед банками. У деяких випадках ці борги можна анулювати (наприклад, за допомогою визнання виконавчого напису нотаріуса таким, що не підлягає виконанню) або переглянути їх розмір у бік значного зменшення (наприклад, за допомогою процедури скасування заочного рішення), але в будь-якому разі ми підбираємо індивідуальний підхід до кожної ситуації.</p>
        <p class="content-text">Вчасне звернення клієнта до адвоката може вирішити питання щодо проблемних кредитів, навіть, щодо рішень суду, які були прийняті без боржника, і про які він не знав.</p>
        <h3 class="pr">Адвокатська компанія Дашко & Ко. - надійний захист Ваших прав та інтересів!</h3>
        <a class="btn" href="<?= Url::toRoute(['ua_content/zapis_consultation']) ?>">Отримати консультацію</a>
    </article>
</div>