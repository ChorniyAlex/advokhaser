<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="main-content">
    <main>
        <div class="home-ekran-2">
            <h2 id="vidi-pomoschi">Виды помощи</h2>
            <hr class="line-content-home">
            <div class="container-icon">
                <a href="<?= Url::toRoute(['ru_content/lawyer_consultation']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-1.svg', ['alt' => 'юридическая консультация']) ?>
                        <p>Юридические<br>консультации</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/pomosch_dtp']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-2.svg', ['alt' => 'юридическая помощь по ДТП']) ?>
                        <p>Правовая помощь<br>участникам ДТП</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/zaschita_po_ugolovnim']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-3.svg', ['alt' => 'защита по уголовным делам']) ?>
                        <p>Защита<br>по уголовным делам</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/zaschita_predstavitelstvo']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-4.svg', ['alt' => 'защита и представительство']) ?>
                        <p>Представительство<br><span>(ведение дел)</span><br>в суде</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/innovation']) ?>" target="_blank">
                    <div class="icon"><?= Html::img('@web/img/icon-5.svg', ['alt' => 'сервис онлайн заявлений']) ?>
                        <p>IT-сервис online составление заявлений</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/sostavlenye_document']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-6.svg', ['alt' => 'составление заявлений, жалоб']) ?>
                        <p>Составление<br>исковых заявлений, жалоб, договоров</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="home-ekran-3">
            <h2 id="specializaciya">Наша специализация</h2>
            <hr class="line-content-home">
            <div class="container-icon">
                <a href="<?= Url::toRoute(['ru_content/semeynoye_pravo']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-7.svg', ['alt' => 'семейное право']) ?>
                        <p>Семейное право</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/nasledstvo_pravo']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-8.svg', ['alt' => 'наследство']) ?>
                        <p>Наследственное право</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/zhilishnoye_pravo']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-9.svg', ['alt' => 'жилищное право']) ?>
                        <p>Жилищные споры</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/trud_spor']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-10.svg', ['alt' => 'трудовое право']) ?>
                        <p>Трудовые споры</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/nedvizhimost']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-11.svg', ['alt' => 'пенсионное право']) ?>
                        <p>Пенсионные споры</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/zemelnoye_pravo']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-12.svg', ['alt' => 'земельное право']) ?>
                        <p>Земельные споры</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/zaschita_sobstvenosti']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-13.svg', ['alt' => 'защита права собственности']) ?>
                        <p>Защита права собственности</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/ugolovnoe_pravo']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-14.svg', ['alt' => 'уголовное право']) ?>
                        <p>Уголовное право</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/hozyaystvenie_spori']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-15.svg', ['alt' => 'хозяйственное право']) ?>
                        <p>Хозяйственные споры</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/nalog_spor']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-16.svg', ['alt' => 'налоговоре право']) ?>
                        <p>Налоговые споры</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/admin_spor']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-17.svg', ['alt' => 'административное право']) ?>
                        <p>Споры с органами власти</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/pravo_business']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-18.svg', ['alt' => 'кредитные споры']) ?>
                        <p>Споры по кредитам</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="home-ekran-4">
            <h2 id="pochemu">Почему нам доверяют<br>и выбирают нас</h2>
            <hr class="line-content-home">
            <div class="container-icon">
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-19.svg', ['alt' => 'компетенция']) ?>
                        <p>Компетенция<br><span>высокий уровень</span></p>
                    </div>
                </div>
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-20.svg', ['alt' => 'опыт и профессионализм']) ?>
                        <p>Опыт<br><span>профессионализм</span></p>
                    </div>
                </div>
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-21.svg', ['alt' => 'современные технологии']) ?>
                        <p>Технологии<br><span>в ногу со временем</span></p>
                    </div>
                </div>
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-22.svg', ['alt' => 'клиент в приоритете']) ?>
                        <p>Клиент<br><span>приоритетность</span></p>
                    </div>
                </div>
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-23.svg', ['alt' => 'экономия, время - деньги']) ?>
                        <p>Экономия<br><span>время - деньги</span></p>
                    </div>
                </div>
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-24.svg', ['alt' => 'секретность']) ?>
                        <p>Секретность<br><span>наше правило</span></p>
                    </div>
                </div>
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-25.svg', ['alt' => 'связь онлайн']) ?>
                        <p>Связь<br><span>мы всегда онлайн</span></p>
                    </div>
                </div>
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-26.svg', ['alt' => 'результат на максимум']) ?>
                        <p>Результат<br><span>на максимум</span></p>
                    </div>
                </div>
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-27.svg', ['alt' => 'доверие']) ?>
                        <p>Доверие<br><span>мы его заслуживаем</span></p>
                    </div>
                </div>
            </div>
            <blockquote>
                «Брать адвокатов только умных, других не надо». (Ленин В.И., ПСС, Т. 9, с.171)
            </blockquote>
        </div>
        <div class="home-ekran-5">
            <h2 id="otzivi">Отзывы</h2>
            <hr class="line-content-home">
            <div class="container-icon">
                <div class="not-animation-text">
                    <p><span class="otzivi">"Удовлетворён сотрудничеством с Бездоля & Дашко, которые
                            доказали мою правоту и помогли взыскать ущерб, причинённый в результате ДТП. Отдельно хочу
                            отметить такие качества, как порядочность, принципиальность, компетентность."</span><br><br> Е.
                        Кудрявцев, г. Северодонецк</p>
                </div>
                <div class="not-animation-text">
                    <p><span class="otzivi">"Огромное спасибо адвокатам Дашко Ю.И. и Бездоля А.В. за профессионализм. C их помощью я защитила своё имущество от незаконных притязаний."</span><br><br><br>В. Князева, г. Харьков</p>
                </div>
                <div class="not-animation-text">
                    <p><span class="otzivi">"Благодарю адвокатов Дашко Ю.И. и Бездоля А.В. за принципиальную жесткость в защите моих прав, что позволило доказать мою невиновность."</span><br><br><br><br>И. Дудник, г. Северодонецк</p>
                </div>
            </div>
        </div>
        <div class="home-ekran-6">
            <h2 id="soveti">Полезные советы</h2>
            <hr class="line-content-home">
            <div class="container-icon">
                <a class="soveti-photo" href="<?= Url::toRoute(['ru_content/innovation']) ?>" target="_blank">
                    <div class="side-content">
                        <h2 class="side-podzagolovok">Инновационный IT-сервис online</h2>
                        <?= Html::img('@web/img/photo-innovation.jpg', ['class' => 'side-photo', 'alt' => 'photo-innovation']) ?>
                        <p class="side-photo-text">Несколько кликов позволят вам составить заявление о: расторжении брака, взыскании алиментов...</p>
                    </div>
                </a>
                <a class="soveti-photo" href="<?= Url::toRoute(['ru_content/ot_lubvi_do_nenavisti']) ?>">
                    <div class="side-content">
                        <h2 class="side-podzagolovok">От любви до ненависти... один шаг...</h2>
                        <?= Html::img('@web/img/photo-ot-lubvi.jpg', ['class' => 'side-photo', 'alt' => 'photo-ot-lubvi']) ?>
                        <p class="side-photo-text">Имущественные отношения
                            супругов...</p>
                    </div>
                </a>
                <a class="soveti-photo" href="<?= Url::toRoute(['ru_content/o_nevinovnosti_dtp']) ?>">
                    <div class="side-content">
                        <h2 class="side-podzagolovok">О невиновности при ДТП</h2>
                        <?= Html::img('@web/img/photo-dtp-nevinovnost.jpg', ['class' => 'side-photo', 'alt' => 'photo-dtp-nevinovnost']) ?>
                        <p class="side-photo-text">Вопрос: виновен ли водитель,
                            который...</p>
                    </div>
                </a>
                <a class="soveti-photo" href="<?= Url::toRoute(['ru_content/pravovoy_obzor_1']) ?>">
                    <div class="side-content">
                        <h2 class="side-podzagolovok">Правовой обзор семейных отношений. ч.І</h2>
                        <?= Html::img('@web/img/photo-razvod-1.jpg', ['class' => 'side-photo', 'alt' => 'photo-razvod-1']) ?>
                        <p class="side-photo-text">Наиболее часто приходится
                            сталкиваться супругам при...</p>
                    </div>
                </a>
                <a class="soveti-photo" href="<?= Url::toRoute(['ru_content/pravovoy_obzor_2']) ?>">
                    <div class="side-content">
                        <h2 class="side-podzagolovok">Правовой обзор семейных отношений. ч.ІІ</h2>
                        <?= Html::img('@web/img/photo-vospitanie-2.jpg', ['class' => 'side-photo', 'alt' => 'photo-vospitanie-2']) ?>
                        <p class="side-photo-text">Решение споров об участии в
                            воспитании ребенка...</p>
                    </div>
                </a>
                <a class="soveti-photo" href="<?= Url::toRoute(['ru_content/pravovoy_obzor_3']) ?>">
                    <div class="side-content">
                        <h2 class="side-podzagolovok">Правовой обзор семейных отношений. ч.ІІІ</h2>
                        <?= Html::img('@web/img/photo-prozhivanie-3.jpg', ['class' => 'side-photo', 'alt' => 'photo-prozhivanie-3']) ?>
                        <p class="side-photo-text">О том, с кем останется проживать ребенок...</p>
                    </div>
                </a>
            </div>
            <a class="btn" href="<?= Url::toRoute(['ru_content/zapis_consultation']) ?>">Получить консультацию</a>
        </div>
    </main>
</div>