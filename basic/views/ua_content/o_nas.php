<?php

use yii\helpers\Html;

?>

<!-- контент о нас -->
<div class="content-epigraf">
    <p id="epigraf-content">Ми не можемо змінити подію, але ми можемо допомогти звести до мінімуму негативні наслідки того, що сталося"</p>
</div>
<div class="main-content">
    <article>
        <h1>Про нас</h1>
        <div><?= Html::img('@web/img/photo-o-nas.jpg', ['class' => 'content-photo', 'alt' => 'photo-o-nas']) ?>
            <p class="content-photo-text">Ми – надійна опора і захист для клієнтів!</p>
        </div>
        <h3>Адвокатська компанія Дашко і Чорнобай завжди готова надати Вам професійну допомогу</h3>
        <p class="content-text">Адвокатська компанія Дашко&Чорнобай – це команда досвідчених адвокатів, які люблять свою справу. Надаємо юридичну допомогу своїм клієнтам вже понад 20 років: захист і представництво в судах всіх інстанцій, в правоохоронних органах, а також складання позовних заяв, скарг, договорів та інших документів. Підберемо найбільш оптимальний і відповідний спосіб і стратегію захисту Ваших прав та інтересів.</p>
        <br>
        <div><?= Html::img('@web/img/photo-dashko.JPG', ['class' => 'content-photo', 'alt' => 'photo-dashko']) ?>
            <p class="content-photo-text">Керуючий партнер, Адвокат<br>Досвід роботи в юриспруденції: з 1991 р.</p>
        </div>
        <a class="btn" href="https://erau.unba.org.ua/profile/8373" target="_blank">Перевірити в ЄРАУ</a>
        <div><?= Html::img('@web/img/photo-chornobay.JPG', ['class' => 'content-photo', 'alt' => 'photo-chornobay']) ?>
            <p class="content-photo-text">Керуючий партнер, Адвокат, web-разробник<br>Досвід роботи в юриспруденції: з 1993 р.</p>
        </div>
        <a class="btn" href="https://erau.unba.org.ua/profile/8871" target="_blank">Перевірити в ЄРАУ</a>
        <div class="o-bezdolya"><?= Html::img('@web/img/photo-bezdolya.JPG', ['class' => 'content-photo', 'alt' => 'photo-bezdolya']) ?>
            <p class="content-photo-text">Адвокат<br>Досвід роботи в юриспруденції: з 2005 р.
            </p>
        </div>
        <a class="btn" href="https://erau.unba.org.ua/profile/57777" target="_blank">Перевірити в ЄРАУ</a>
        <h3 class="pr">Адвокатська компанія Дашко і Чорнобай - надійний захист Ваших прав та інтересів!</h3>
    </article>
</div>