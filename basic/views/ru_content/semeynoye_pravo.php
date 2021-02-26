<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент семейное право -->
<div class="content-epigraf">
    <p id="epigraf-content">"Своевременное обращение к адвокату решит Ваши проблемы быстрее, дешевле, и поможет избежать излишнего усложнения дела"</p>
</div>
<div class="main-content">
    <article>
        <h1>Семейное право</h1>
        <div><?= Html::img('@web/img/photo-semeynoye-pravo.jpg', ['class' => 'content-photo', 'alt' =>           'photo-semeynoye-pravo']) ?>
            <p class="content-photo-text">Мы – надёжная опора и защита для клиентов!</p>
        </div>
        <h3>Адвокатская компания Дашко & Ко. всегда готова оказать Вам профессиональную помощь</h3>
        <p class="content-text">Семейное право охватывает вопросы брака, личные неимущественные и имущественные
            права и обязанности супругов, возникновение и содержание личных неимущественных и имущественных прав и
            обязанностей родителей и детей, усыновителей, и усыновленных, других членов семьи и родственников.</p>
        <p class="content-text">По данному направлению мы оказываем помощь по составлению всех процессуальных
            документов (исковых заявлений, заявлений о выдаче судебных приказов и др.) и осуществляем представительство интересов клиентов по следующим вопросам: расторжение брака; раздел имущества супругов; взыскание алиментов как на содержание ребенка, так и на содержание матери ребенка; уменьшение размера алиментов; лишение родительских прав; усыновление; определение места жительства ребенка и порядка встречь с ребенком; предоставление ребенку права на выезд за границу.</p>
        <p class="content-text">В этом разделе мы, конечно, не можем описать всех спорных вопросов, по которым мы
            оказываем правовую помощь, а потому для решения Вашей конкретной ситуации Вы можете обратиться к нам за
            консультацией.</p>
        <h3 class="pr">Адвокатская компания Дашко & Ко. - надежная защита Ваших прав и интересов!</h3>
        <a class="btn" href="<?= Url::toRoute(['ru_content/zapis_consultation']) ?>">Получить консультацию</a>
    </article>
</div>