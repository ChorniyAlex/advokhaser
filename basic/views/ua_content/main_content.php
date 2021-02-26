<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="main-content">
    <main>
        <div class="home-ekran-2">
            <h2 id="vidi-pomoschi">Види допомоги</h2>
            <hr class="line-content-home">
            <div class="container-icon">
                <a href="<?= Url::toRoute(['ru_content/lawyer_consultation']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-1.svg', ['alt' => 'юридическая консультация']) ?>
                        <p>Юридичні<br>консультації</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/pomosch_dtp']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-2.svg', ['alt' => 'юридическая помощь по ДТП']) ?>
                        <p>Правова допомога<br>учасникам ДТП</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/zaschita_po_ugolovnim']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-3.svg', ['alt' => 'защита по уголовным делам']) ?>
                        <p>Захист<br>у кримінальних справах</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/zaschita_predstavitelstvo']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-4.svg', ['alt' => 'защита и представительство']) ?>
                        <p>Представництво<br><span>(ведення справ)</span><br>в суді</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/innovation']) ?>" target="_blank">
                    <div class="icon"><?= Html::img('@web/img/icon-5.svg', ['alt' => 'сервис онлайн заявлений']) ?>
                        <p>IT-сервіс online складання заяв</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/sostavlenye_document']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-6.svg', ['alt' => 'составление заявлений, жалоб']) ?>
                        <p>Складання<br>позовних заяв, скарг, договорів</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="home-ekran-3">
            <h2 id="specializaciya">Наша спеціалізація</h2>
            <hr class="line-content-home">
            <div class="container-icon">
                <a href="<?= Url::toRoute(['ru_content/semeynoye_pravo']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-7.svg', ['alt' => 'семейное право']) ?>
                        <p>Сімейне право</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/nasledstvo_pravo']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-8.svg', ['alt' => 'наследство']) ?>
                        <p>Спадкове право</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/zhilishnoye_pravo']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-9.svg', ['alt' => 'жилищное право']) ?>
                        <p>Житлові спори</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/trud_spor']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-10.svg', ['alt' => 'трудовое право']) ?>
                        <p>Трудові спори</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/nedvizhimost']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-11.svg', ['alt' => 'пенсионное право']) ?>
                        <p>Пенсійні спори</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/zemelnoye_pravo']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-12.svg', ['alt' => 'земельное право']) ?>
                        <p>Земельні спори</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/zaschita_sobstvenosti']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-13.svg', ['alt' => 'защита права собственности']) ?>
                        <p>Захист права власності</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/ugolovnoe_pravo']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-14.svg', ['alt' => 'уголовное право']) ?>
                        <p>Кримінальне право</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/hozyaystvenie_spori']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-15.svg', ['alt' => 'хозяйственное право']) ?>
                        <p>Господарські спори</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/nalog_spor']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-16.svg', ['alt' => 'налоговоре право']) ?>
                        <p>Податкові спори</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/admin_spor']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-17.svg', ['alt' => 'административное право']) ?>
                        <p>Спори з органами влади</p>
                    </div>
                </a>
                <a href="<?= Url::toRoute(['ru_content/pravo_business']) ?>">
                    <div class="icon"><?= Html::img('@web/img/icon-18.svg', ['alt' => 'кредитные споры']) ?>
                        <p>Спори по кредитам</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="home-ekran-4">
            <h2 id="pochemu">Чому нам довіряють<br>і обирають нас</h2>
            <hr class="line-content-home">
            <div class="container-icon">
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-19.svg', ['alt' => 'компетенция']) ?>
                        <p>Компетенція<br><span>високий рівень</span></p>
                    </div>
                </div>
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-20.svg', ['alt' => 'опыт и профессионализм']) ?>
                        <p>Досвід<br><span>професіоналізм</span></p>
                    </div>
                </div>
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-21.svg', ['alt' => 'современные технологии']) ?>
                        <p>Технології<br><span>в ногу з часом</span></p>
                    </div>
                </div>
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-22.svg', ['alt' => 'клиент в приоритете']) ?>
                        <p>Клієнт<br><span>пріоритетність</span></p>
                    </div>
                </div>
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-23.svg', ['alt' => 'экономия, время - деньги']) ?>
                        <p>Економія<br><span>час - гроші</span></p>
                    </div>
                </div>
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-24.svg', ['alt' => 'секретность']) ?>
                        <p>Секретність<br><span>наше правило</span></p>
                    </div>
                </div>
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-25.svg', ['alt' => 'связь онлайн']) ?>
                        <p>Зв’язок<br><span>ми завжди онлайн</span></p>
                    </div>
                </div>
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-26.svg', ['alt' => 'результат на максимум']) ?>
                        <p>Результат<br><span>на максимум</span></p>
                    </div>
                </div>
                <div class="not-animation">
                    <div class="icon"><?= Html::img('@web/img/icon-27.svg', ['alt' => 'доверие']) ?>
                        <p>Довіра<br><span>ми її заслуговуємо</span></p>
                    </div>
                </div>
            </div>
            <blockquote>
                «Брати адвокатів тільки розумних, інших не треба». (Ленін В.І., ПЗТ, Т. 9, а.171)
            </blockquote>
        </div>
        <div class="home-ekran-5">
            <h2 id="otzivi">Відзиви</h2>
            <hr class="line-content-home">
            <div class="container-icon">
                <div class="not-animation-text">
                    <p><span class="otzivi">"Задоволений співпрацею з Дашко & Ко., які довели мою правоту і допомогли стягнути шкоду, спричинену в результаті ДТП. Окремо хочу відзначити такі якості, як порядність, принциповість, компетентність."</span><br><br> Є. Кудрявцев, м. Сєвєродонецьк</p>
                </div>
                <div class="not-animation-text">
                    <p><span class="otzivi">"Величезне спасибі адвокатам Дашко і Ко. за професіоналізм. За їх допомогою я захистила своє майно від незаконних домагань."</span><br><br><br>В. Князева, м. Харків</p>
                </div>
                <div class="not-animation-text">
                    <p><span class="otzivi">"Дякую адвокатам Дашко і Ко. за принципову жорсткість у захисту моїх прав, що дозволило довести мою невинуватість."</span><br><br><br><br>І. Дудник, м. Сєвєродонецьк</p>
                </div>
            </div>
        </div>
        <div class="home-ekran-6">
            <h2 id="soveti">Корисні поради</h2>
            <hr class="line-content-home">
            <div class="container-icon">
                <a class="soveti-photo" href="<?= Url::toRoute(['ru_content/innovation']) ?>" target="_blank">
                    <div class="side-content">
                        <h2 class="side-podzagolovok">Інноваційний IT-сервіс online</h2>
                        <?= Html::img('@web/img/photo-innovation.jpg', ['class' => 'side-photo', 'alt' => 'photo-innovation']) ?>
                        <p class="side-photo-text">Кілька кліків дозволять вам скласти заяву про: розірвання шлюбу, стягнення аліментів...</p>
                    </div>
                </a>
                <a class="soveti-photo" href="<?= Url::toRoute(['ru_content/ot_lubvi_do_nenavisti']) ?>">
                    <div class="side-content">
                        <h2 class="side-podzagolovok">Від любові до ненависті... один крок...</h2>
                        <?= Html::img('@web/img/photo-ot-lubvi.jpg', ['class' => 'side-photo', 'alt' => 'photo-ot-lubvi']) ?>
                        <p class="side-photo-text">Майнові відносини подружжя...</p>
                    </div>
                </a>
                <a class="soveti-photo" href="<?= Url::toRoute(['ru_content/o_nevinovnosti_dtp']) ?>">
                    <div class="side-content">
                        <h2 class="side-podzagolovok">Про невинуватість при ДТП</h2>
                        <?= Html::img('@web/img/photo-dtp-nevinovnost.jpg', ['class' => 'side-photo', 'alt' => 'photo-dtp-nevinovnost']) ?>
                        <p class="side-photo-text">Питання: чи винен водій, який...</p>
                    </div>
                </a>
                <a class="soveti-photo" href="<?= Url::toRoute(['ru_content/pravovoy_obzor_1']) ?>">
                    <div class="side-content">
                        <h2 class="side-podzagolovok">Правовий огляд сімейних відносин. ч.І</h2>
                        <?= Html::img('@web/img/photo-razvod-1.jpg', ['class' => 'side-photo', 'alt' => 'photo-razvod-1']) ?>
                        <p class="side-photo-text">Найбільш часто доводиться стикатися подружжю при...</p>
                    </div>
                </a>
                <a class="soveti-photo" href="<?= Url::toRoute(['ru_content/pravovoy_obzor_2']) ?>">
                    <div class="side-content">
                        <h2 class="side-podzagolovok">Правовий огляд сімейних відносин. ч.ІІ</h2>
                        <?= Html::img('@web/img/photo-vospitanie-2.jpg', ['class' => 'side-photo', 'alt' => 'photo-vospitanie-2']) ?>
                        <p class="side-photo-text">Вирішення спорів про участь у вихованні дитини...</p>
                    </div>
                </a>
                <a class="soveti-photo" href="<?= Url::toRoute(['ru_content/pravovoy_obzor_3']) ?>">
                    <div class="side-content">
                        <h2 class="side-podzagolovok">Правовий огляд сімейних відносин. ч.ІІІ</h2>
                        <?= Html::img('@web/img/photo-prozhivanie-3.jpg', ['class' => 'side-photo', 'alt' => 'photo-prozhivanie-3']) ?>
                        <p class="side-photo-text">Про те, з ким залишиться проживати дитина...</p>
                    </div>
                </a>
            </div>
            <a class="btn" href="<?= Url::toRoute(['ru_content/zapis_consultation']) ?>">Отримати консультацію</a>
        </div>
    </main>
</div>