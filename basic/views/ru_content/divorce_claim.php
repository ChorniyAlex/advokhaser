<?php

use yii\helpers\Html;
?>

<!DOCTYPE html>
<html lang="ukr-UA">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Иск о расторжении брака</title>
</head>

<body>
    <?php if (isset($model)) : ?>
        <div class="main-content">
            <article>
                <h2 style="text-align: right"><?php echo $model->court; ?></h2>
                <h3 style="text-align: right">Позивач:</h3>
                <h4 style="text-align: right"><?= Html::encode($model->username); ?> <?= $model->date_birth_user; ?> р.н.</h4>
                <p style="text-align: right">РНОКПП: <?= Html::encode($model->ident_number_user); ?></p>
                <p style="text-align: right">місце проживання: <?= Html::encode($model->postcode_user); ?>, <?= $model->region_user; ?></p>
                <p style="text-align: right">місто (сел., район): <?= Html::encode($model->town_user); ?>, вул. <?= Html::encode($model->street_user); ?>, буд.<?= Html::encode($model->house_user); ?>
                    <?php if ($model->apartment_user) echo 'кв.' . Html::encode($model->apartment_user); ?></p>
                <p style="text-align: right">офіційна електронна адреса: відсутня</p>
                <p style="text-align: right">адреса електронної пошти: <?= $model->email_user; ?></p>
                <p style="text-align: right">номер засобу зв’язку: <?= Html::encode($model->phone_user); ?></p>
                <br>
                <h3 style="text-align: right">Відповідач:</h3>
                <h4 style="text-align: right"><?= Html::encode($model->defendant_name); ?> <?= Html::encode($model->date_birth_defendant); ?> р.н.</h4>
                <p style="text-align: right">РНОКПП: <?= Html::encode($model->ident_number_defendant); ?></p>
                <p style="text-align: right">місце реєстрації: <?= Html::encode($model->postcode_defendant); ?>, <?= $model->region_defendant; ?></p>
                <p style="text-align: right">місто (сел., район): <?= Html::encode($model->town_defendant); ?>, вул. <?= Html::encode($model->street_defendant); ?>, буд.<?= Html::encode($model->house_defendant); ?>
                    <?php if ($model->apartment_defendant) echo 'кв.' . Html::encode($model->apartment_defendant); ?></p>
                <p style="text-align: right">офіційна електронна адреса: відсутня</p>
                <p style="text-align: right">адреса електронної пошти:
                    <?php if ($model->email_defendant) echo $model->email_defendant;
                    else echo 'не відомо'; ?></p>
                <p style="text-align: right">номер засобу зв’язку: <?= Html::encode($model->phone_defendant); ?></p>
                <h2 style="text-align: center">Позовна заява</h2>
                <h3 style="text-align: center">про розірвання шлюбу</h3>
                <p><?= Html::encode($model->date_marriage); ?> р. ми з відповідачем уклали шлюб, який зареєстрував: <?= Html::encode($model->marriage_registration); ?>, актовий запис №<?= Html::encode($model->marriage_number); ?>.</p>
                <p>Від шлюбу неповнолітніх дітей не маємо.</p>
                <p>Спільне сімейне життя з відповідачем не склалося з причини: <?= $model->reason_divorce; ?>
                    <?php if ($model->reason_divorce1) echo ', ' . $model->reason_divorce1;
                    if ($model->reason_divorce2) echo ', ' . $model->reason_divorce2;
                    if ($model->reason_divorce3) echo ', ' . $model->reason_divorce3;
                    if ($model->user_reason_divorce) echo ', ' . Html::encode($model->user_reason_divorce) . '.';
                    else echo '.'; ?>
                </p>
                <p>Час фактичного припинення між нами шлюбних та сімейних відносин: <?= Html::encode($model->date_termin_marriage); ?> р. Спільне господарство не ведеться.</p>
                <p>Подальше спільне життя та зберігання сім’ї не можливе.</p>
                <p>Примирення з відповідачем я не бажаю, тому зберігання шлюбу суперечить моїм інтересам. Спору про поділ майна, що є нашою спільною сумісною власністю, наразі немає.</p>
                <p>Відповідач ухиляється від явки до органу РАЦС для реєстрації розірвання шлюбу.</p>
                <p>Попередній (орієнтовний) розрахунок суми судових витрат, які позивач поніс і які очікує понести у зв'язку із розглядом справи: так як дана позовна заява є заявою про розірвання шлюбу, то, відповідно до ЗУ "Про судовий збір", мною було сплачено судовий збір, розмір якого становить: 0,4 розміру прожиткового мінімуму на одну працездатну особу, що є судовими витратами у справі, і в подальшому додатково я не очікую понесення інших судових витрат у зв’язку із розглядом справи.</p>
                <p>Також я підтверджую те, що мною не подано іншого позову (позовів) до цього самого відповідача з тим самим предметом та з тих самих підстав.</p>
                <p>Відповідно до ст.ст. 110, 112 Сімейного Кодексу України і ст.ст. 3, 4, 5, 19, 23, 43, 49, 76, 83, 95, 174, 175, 177 ЦПК України, –</p>
                <h2 style="text-align: center">Прошу:</h2>
                <h3>Розірвати шлюб, який уклали: <?= Html::encode($model->username); ?> <?= Html::encode($model->date_birth_user); ?> р.н., та: <?= Html::encode($model->defendant_name); ?> <?= Html::encode($model->date_birth_defendant); ?> р.н., який зареєстрував: <?= Html::encode($model->marriage_registration); ?> <?= Html::encode($model->date_marriage); ?> р., актовий запис №<?= Html::encode($model->marriage_number); ?>.</h3>
                <br>
                <h4>Перелік документів та інших доказів, що додаються до заяви:</h4>
                <ul>
                    <li>копії паспорта та ідентифікаційного номеру позивача</li>
                    <li>свідоцтво про шлюб</li>
                    <li>довідка про склад сім’ї</li>
                    <li>копія позовної заяви з додатками для відповідача</li>
                    <li>квитанція про сплату судового збору</li>
                </ul>
                <br>
                <p>"________"________________ 20_____ р.</p>
                <p style="text-align: right">________________________ <?= Html::encode($model->username); ?></p>
            </article>
        </div>
    <?php endif; ?>
</body>

</html>