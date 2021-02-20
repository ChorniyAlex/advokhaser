<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент жилищное право -->
<div class="content-epigraf">
    <p id="epigraf-content">"Своевременное обращение к адвокату решит Ваши проблемы быстрее, дешевле, и поможет избежать излишнего усложнения дела"
    </p>
</div>
<div class="main-content">
    <article>
        <h1>Жилищные споры</h1>
        <div><?= Html::img('@web/img/photo-zhilishnoye-pravo.jpg', ['class' => 'content-photo', 'alt' =>           'photo-zhilishnoye-pravo']) ?>
            <p class="content-photo-text">Выигрываем там, где другие отступают</p>
        </div>
        <h3>Адвокатская компания Бездоля & Дашко всегда готова оказать Вам профессиональную помощь</h3>
        <p class="content-text">Жилищные споры – это споры, которые возникают в процессе использования жилья, его
            продажи, мены, приобретения, аренды, а также в процессе приватизации жилья, получения коммунальных услуг
            и т. п.
        </p>
        <p class="content-text">Помощь в решении указанных вопросов входит в нашу компетенцию, которая
            подтверждается нашим многолетним опытом работы в этой сфере. Мы можем оказать помощь в составлении
            соответствующих договоров, обжаловании уже существующих договоров. Осуществляем юридическое
            сопровождение при заключении договоров приобретения и отчуждения жилья.</p>
        <p class="content-text">Также помогаем в решении вопросов снятия лиц с регистрационного учета (их выписки).
        </p>
        <h3 class="pr">Адвокатская компания Бездоля & Дашко - надежная защита Ваших прав и интересов!</h3>
        <a class="btn" href="<?= Url::toRoute(['ru_content/zapis_consultation']) ?>">Получить консультацию</a>
    </article>
</div>