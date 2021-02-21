<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- контент помощь по ДТП -->
<div class="content-epigraf">
    <p id="epigraf-content">"Незнание закона не освобождает от ответственности.<br>Знание - запросто."</p>
</div>
<div class="main-content">
    <article>
        <h1>Правовая помощь участникам ДТП</h1>
        <div><?= Html::img('@web/img/photo-dtp-pomosch.jpg', ['class' => 'content-photo', 'alt' =>           'photo-dtp-pomosch']) ?>
            <p class="content-photo-text">Мы – надёжная опора и защита для клиентов!</p>
        </div>
        <h3>Адвокатская компания Дашко & Ко. всегда готова оказать Вам профессиональную помощь</h3>
        <p class="content-text">Адвокат по ДТП – это юридическая помощь в решении всех проблем, возникших в
            результате автодорожного происшествия. У водителей и пассажиров, а также у пешеходов нередко возникают
            ситуации, когда помощь адвоката по ДТП особенно необходима для того, чтобы доказать свою невиновность,
            взыскать ущерб и т.д.</p>
        <p class="content-text">По данной категории дел мы специализируемся давно - более чем в 90% случаях
            добивались положительных результатов для своих клиентов.</p>
        <p class="content-text">Помощь адвоката также будет крайне полезна в отношениях со страховыми компаниями,
            отказывающими в страховых выплатах. Там, где клиенту может понадобиться много времени и сил, чтобы
            добиться законной компенсации, адвокаты справятся быстро и эффективно.</p>
        <h3 class="pr">Адвокатская компания Дашко & Ко. - надежная защита Ваших прав и интересов!</h3>
        <a class="btn" href="<?= Url::toRoute(['ru_content/zapis_consultation']) ?>">Получить консультацию</a>
    </article>
</div>