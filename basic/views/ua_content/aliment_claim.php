<?php

use yii\helpers\Html;
?>

<!DOCTYPE html>
<html lang="ukr-UA">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заява про стягнення аліментів</title>
</head>

<body>
    <?php if (isset($model)) : ?>
        <div class="main-content">
            <article>
                <h2 style="text-align: right"><?php echo $model->court; ?></h2>
                <h3 style="text-align: right">Заявник:</h3>
                <h4 style="text-align: right"><?= Html::encode($model->username); ?> <?= $model->date_birth_user; ?> р.н.</h4>
                <p style="text-align: right">РНОКПП: <?= Html::encode($model->ident_number_user); ?></p>
                <p style="text-align: right">місце проживання: <?= Html::encode($model->postcode_user); ?>, <?= $model->region_user; ?></p>
                <p style="text-align: right">місто (сел., район): <?= Html::encode($model->town_user); ?>, вул. <?= Html::encode($model->street_user); ?>, буд.<?= Html::encode($model->house_user); ?>
                    <?php if ($model->apartment_user) echo 'кв.' . Html::encode($model->apartment_user); ?></p>
                <p style="text-align: right">офіційна електронна адреса: відсутня</p>
                <p style="text-align: right">адреса електронної пошти: <?= $model->email_user; ?></p>
                <p style="text-align: right">номер засобу зв’язку: <?= Html::encode($model->phone_user); ?></p>
                <br>
                <h3 style="text-align: right">Боржник:</h3>
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
                <h2 style="text-align: center">Заява</h2>
                <h3 style="text-align: center">про видачу судового наказу</h3>
                <h3 style="text-align: center">про стягнення аліментів на утримання
                    <?php if ($model->whom_alimony == 'на одну дитину') echo ' неповнолітньої дитини';
                    else echo ' неповнолітніх дітей' ?></h3>
                <h3>Виклад обставин, на яких ґрунтуються вимоги заявника:</h3>
                <p><?= Html::encode($model->date_marriage); ?> р. я, <?= Html::encode($model->username); ?>, і <?= Html::encode($model->defendant_name); ?> уклали шлюб, проживали разом однією сім’єю.</p>
                <p>На теперішній час наш шлюб <?= $model->marriage_dissolved; ?>.</p>
                <p><?php if ($model->whom_alimony == 'на одну дитину') echo 'Від шлюбу маємо неповнолітню дитину: ';
                    else echo 'Від шлюбу маємо неповнолітніх дітей: '; ?><?= Html::encode($model->children); ?>, місце проживання - зі мною та на моєму утриманні.</p>
                <p>Матеріальну допомогу на утримання
                    <?php if ($model->whom_alimony == 'на одну дитину') echo ' дитини';
                    else echo ' дітей'; ?>
                    <?= Html::encode($model->defendant_name); ?> не надає і в добровільному порядку надавати відмовляється.</p>
                <p>Я в теперішній час
                    <?php if ($model->do_work_user == 'працюю') echo $model->do_work_user . ', моє місце роботи: ' . Html::encode($model->job_user) . ' на посаді: ' . Html::encode($model->position_user) . ', ' . $model->have_income_user . ' в розмірі: ' . Html::encode($model->income_user) . ' грн';
                    elseif ($model->do_work_user == 'не працюю' && $model->have_income_user == 'щомісячного доходу не маю') echo $model->do_work_user . ', ' . $model->have_income_user;
                    elseif ($model->do_work_user == 'не працюю' && $model->have_income_user == 'маю щомісячний дохід') echo $model->do_work_user . ', ' . ' але ' . $model->have_income_user . ' в розмірі: ' . Html::encode($model->income_user) . ' грн';
                    elseif ($model->do_work_user == 'не працюю, знаходжусь у відпрустці по догляду за дитиною' && $model->have_income_user == 'маю щомісячний дохід') echo $model->do_work_user . ', ' . $model->have_income_user . ' в розмірі: ' . Html::encode($model->income_user) . ' грн';
                    elseif ($model->do_work_user == 'не працюю, знаходжусь у відпрустці по догляду за дитиною' && $model->have_income_user == 'щомісячного доходу не маю') echo $model->do_work_user . ', ' . $model->have_income_user; ?>.</p>
                <p>Місце роботи боржника, яким є: <?= Html::encode($model->defendant_name) . ' - ' . Html::encode($model->job_defendant); ?>, його щомісячний дохід -
                    <?php if ($model->have_income_defendant == 'я знаю розмір доходу боржника') : echo Html::encode($model->income_defendant) . ' грн,';
                    else : echo 'мені не відомо, ';
                    endif ?>
                    <?php if ($model->other_children == 'інших дітей на утриманні не має') : echo 'інших осіб, в т.ч. неповнолітніх дітей, на утриманні боржник не має, ';
                    elseif ($model->other_children == 'має на утримуванні іншу дитину (дітей)') : echo 'має на утримуванні інших дітей' . ', але ';
                    else : echo 'чи є у нього на утриманні інші особи, в т.ч. неповнолітні діти - мені не відомо, але ';
                    endif; ?>
                    він фізично здоровий, отже спроможній і зобов’язаний сплачувати аліменти у встановленому законом розмірі на утримання
                    <?php if ($model->whom_alimony == 'на одну дитину') : echo ' своєї дитини';
                    else : echo ' своїх дітей';
                    endif; ?>.</p>
                <p><i>Відповідно до ст.180 СК України, батьки зобов'язані утримувати дитину до досягнення нею повноліття.</i></p>
                <p><i>Відповідно до ч.3 ст.181 СК України, за рішенням суду кошти на утримання дитини (аліменти) присуджуються у частці від доходу її матері, батька або у твердій грошовій сумі за вибором того з батьків або інших законних представників дитини, разом з яким проживає дитина.</i></p>
                <p><i>Відповідно до ч.2 ст.182 СК України, розмір аліментів має бути необхідним та достатнім для забезпечення гармонійного розвитку дитини. Мінімальний розмір аліментів на одну дитину не може бути меншим, ніж 50 відсотків прожиткового мінімуму для дитини відповідного віку.</i></p>
                <p><i>Відповідно до ч.5 ст.183 СК України той із батьків або інших законних представників дитини, разом з яким проживає дитина, має право звернутися до суду із заявою про видачу судового наказу про стягнення аліментів у розмірі на одну дитину - однієї чверті, на двох дітей - однієї третини, на трьох і більше дітей - половини заробітку (доходу) платника аліментів, але не більше десяти прожиткових мінімумів на дитину відповідного віку на кожну дитину.</i></p>
                <p><i>Відповідно до п.4 ч.1 ст.161 ЦПК України судовий наказ може бути видано, у разі якщо заявлено вимогу про стягнення аліментів у розмірі на одну дитину - однієї чверті, на двох дітей - однієї третини, на трьох і більше дітей - половини заробітку (доходу) платника аліментів, але не більше десяти прожиткових мінімумів на дитину відповідного віку на кожну дитину, якщо ця вимога не пов’язана із встановленням чи оспорюванням батьківства (материнства) та необхідністю залучення інших заінтересованих осіб.</i></p>
                <p><i>Відповідно до ч.1 ст.191 СК України аліменти на дитину присуджуються за рішенням суду від дня пред'явлення позову, а в разі подання заяви про видачу судового наказу - із дня подання такої заяви.</i></p>
                <p>Отже, є всі підстави для видачі судового наказу про стягнення з боржника, яким є <?= Html::encode($model->defendant_name); ?>, аліменти на утримання
                    <?php if ($model->whom_alimony == 'на одну дитину') : echo ' своєї дитини ';
                    else : echo ' своїх дітей ';
                    endif ?>у встановленому законом розмірі.</p>
                <p>Розрахунок судових витрат: відповідно до п.3 ч.1 ст.5 Закону України «Про судовий збір» за подання заяви про видачу судового наказу про стягнення аліментів судовий збір заявником не сплачується.</p>
                <p>Також я підтверджую те, що мною не подано іншого позову (позовів), заяви (заяв) про видачу судового наказу до цього самого боржника з тим самим предметом та з тих самих підстав.</p>
                <h4>Перелік доказів, якими заявник обґрунтовує обставини, на яких ґрунтуються вимоги:</h4>
                <ul>Доказами по справі є:
                    <li>документи та їх копії, які додаються до заяви (оригінали всіх документів знаходяться у заявника).</li>
                </ul>
                <p>Відповідно до ст. ст. 180, 181, 182, 183, 191 Сімейного Кодексу України, ст.cт. 141, 160-164 ЦПК України, –</p>
                <h2 style="text-align: center">Прошу:</h2>
                <h3>Видати судовий наказ про стягнення з боржника, яким є: <?= Html::encode($model->defendant_name); ?> <?= Html::encode($model->date_birth_defendant); ?> р.н., на користь заявника, яким є: <?= Html::encode($model->username); ?> <?= Html::encode($model->date_birth_user); ?> р.н., аліменти на утримання
                    <?php if ($model->whom_alimony == 'на одну дитину') : echo 'дитини: ' . Html::encode($model->children) . ', в розмірі: однієї чверті його заробітку (доходу), але не більше десяти прожиткових мінімумів на дитину відповідного віку, та не менше, ніж 50 відсотків прожиткового мінімуму для дитини відповідного віку, до повноліття дитини, починаючи з дня подання заяви про видачу судового наказу';
                    elseif ($model->whom_alimony == 'на двох дітей') : echo 'дітей: ' . Html::encode($model->children) . ', в розмірі: однієї третини його заробітку (доходу), але не більше десяти прожиткових мінімумів на дитину відповідного віку на кожну дитину, та не менше, ніж 50 відсотків прожиткового мінімуму для дитини відповідного віку на кожну дитину, до повноліття дітей, починаючи з дня подання заяви про видачу судового наказу';
                    elseif ($model->whom_alimony == 'на трьох і більше дітей') : echo 'дітей: ' . Html::encode($model->children) . ', в розмірі: половини його заробітку (доходу), але не більше десяти прожиткових мінімумів на дитину відповідного віку на кожну дитину, та не менше, ніж 50 відсотків прожиткового мінімуму для дитини відповідного віку на кожну дитину, до повноліття дітей, починаючи з дня подання заяви про видачу судового наказу';
                    endif; ?>.</h3>
                <br>
                <h4>Перелік документів та інших доказів, що додаються до заяви:</h4>
                <ul>
                    <li>копії паспорта та ідентифікаційного номеру заявника</li>
                    <?php if ($model->marriage_dissolved == 'не припинено') : echo
                        '<li>копія свідоцтва про шлюб</li>';
                    else : echo '<li>копія судового рішення про розірвання шлюбу</li>';
                    endif ?>
                    <?php if ($model->whom_alimony == 'на одну дитину') : echo
                        '<li>копія свідоцтва про народження дитини</li>';
                    else : echo '<li>копії свідоцтв про народження дітей</li>';
                    endif ?>
                    <li>довідка про склад сім’ї</li>
                    <?php if ($model->have_income_user == 'маю щомісячний дохід') : echo
                        '<li>довідка про доходи заявника</li>';
                    endif ?>
                    <li>копія заяви разом з доданими до неї документами</li>
                </ul>
                <br>
                <p>"________"________________ 20_____ р.</p>
                <p style="text-align: right">________________________ <?= Html::encode($model->username); ?></p>
            </article>
        </div>
    <?php endif; ?>
</body>

</html>