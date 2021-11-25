<?php

use yii\helpers\Html;
?>

<!DOCTYPE html>
<html lang="ukr-UA">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заява про стягнення аліментів на студента</title>
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
                <p style="text-align: right"><?= Html::encode($model->town_user); ?>, <?= Html::encode($model->street_user); ?>, буд.<?= Html::encode($model->house_user); ?>
                    <?php if ($model->apartment_user) echo 'кв.' . Html::encode($model->apartment_user); ?></p>
                <p style="text-align: right">офіційна електронна адреса: відсутня</p>
                <p style="text-align: right">адреса електронної пошти: <?= $model->email_user; ?></p>
                <p style="text-align: right">номер засобу зв’язку: <?= Html::encode($model->phone_user); ?></p>
                <h3 style="text-align: right">Відповідач:</h3>
                <h4 style="text-align: right"><?= Html::encode($model->defendant_name); ?> <?= Html::encode($model->date_birth_defendant); ?> р.н.</h4>
                <p style="text-align: right">РНОКПП: <?= Html::encode($model->ident_number_defendant); ?></p>
                <p style="text-align: right">місце реєстрації: <?= Html::encode($model->postcode_defendant); ?>, <?= $model->region_defendant; ?></p>
                <p style="text-align: right"><?= Html::encode($model->town_defendant); ?>, <?= Html::encode($model->street_defendant); ?>, буд.<?= Html::encode($model->house_defendant); ?>
                    <?php if ($model->apartment_defendant) echo 'кв.' . Html::encode($model->apartment_defendant); ?></p>
                <p style="text-align: right">офіційна електронна адреса: відсутня</p>
                <p style="text-align: right">адреса електронної пошти:
                    <?php if ($model->email_defendant) echo $model->email_defendant;
                    else echo 'не відомо'; ?></p>
                <p style="text-align: right">номер засобу зв’язку: <?= Html::encode($model->phone_defendant); ?></p>
                <h3 style="text-align: right">Третя особа:</h3>
                <h4 style="text-align: right"><?= Html::encode($model->third_person_name); ?> <?= Html::encode($model->date_birth_third_person); ?> р.н.</h4>
                <p style="text-align: right">РНОКПП: <?= Html::encode($model->ident_number_third_person); ?></p>
                <p style="text-align: right">місце реєстрації: <?= Html::encode($model->postcode_third_person); ?>, <?= $model->region_third_person; ?></p>
                <p style="text-align: right"><?= Html::encode($model->town_third_person); ?>, <?= Html::encode($model->street_third_person); ?>, буд.<?= Html::encode($model->house_third_person); ?>
                    <?php if ($model->apartment_third_person) echo 'кв.' . Html::encode($model->apartment_third_person); ?></p>
                <p style="text-align: right">офіційна електронна адреса: відсутня</p>
                <p style="text-align: right">адреса електронної пошти:
                    <?php if ($model->email_third_person) echo $model->email_third_person;
                    else echo 'не відомо'; ?></p>
                <p style="text-align: right">номер засобу зв’язку: <?= Html::encode($model->phone_third_person); ?></p>
                <p style="text-align: right"><b>Ціна позову:</b> на момент пред’явлення позову<br>встановити точну його ціну неможливо<br><i>на підставі п.3 ч.1 ст.5 Закону України «Про судовий збір»<br>позивач звільнений від сплати судового збору</i></p>
                <h2 style="text-align: center">Позовна заява</h2>
                <h3 style="text-align: center">про стягнення аліментів у зв’язку з продовженням навчання</h3>
                <h3>Виклад обставин, якими позивач обґрунтовує свої позовні вимоги:</h3>
                <p>
                    Я проживаю за вищезазначеною адресою, з <?= Html::encode($model->training_start); ?>р. я є
                    <?php if ($model->whom_alimony == 'син') echo 'студентом,';
                    else echo 'студенткою,'; ?>
                    місце мого навчання: <?= Html::encode($model->educational_institution); ?> за спеціальністю: <?= Html::encode($model->name_specialty); ?>, <?= $model->what_course; ?>, форма навчання: <?= $model->form_education; ?>,
                    <?php if ($model->receiving_scholarship == 'отримую стипендію') echo $model->receiving_scholarship . ' в розмірі: ' . Html::encode($model->scholarship_amount) . ' грн';
                    else echo 'стипендію не отримую'; ?> і ніяких інших джерел доходу не маю. Строк закінчення мого навчання у цьому навчальному закладі: <?= Html::encode($model->training_finish); ?>р. і я <?= $model->continue_studies; ?>.
                </p>
                <p>
                    У зв’язку з навчанням я
                    <?php if ($model->whom_alimony == 'син') echo 'позбавлений';
                    else echo 'позбавлена'; ?>
                    можливості працювати та самостійно отримувати дохід на свої потреби та проживання. Мої витрати складаються з наступного: харчування, витрати на транспорт загального користування, купівля одягу, взуття, канцтоварів, навчальної літератури, та інші природні та побутові потреби.
                </p>
                <p>
                    Відповідач <?= Html::encode($model->defendant_name); ?> проживає окремо від мене, добровільно не надає мені матеріальної допомоги у зв’язку з продовженням мого навчання, а тієї матеріальної допомоги, яку мені надає моя мама – третя особа <?= Html::encode($model->third_person_name); ?>, мені не вистачає.
                </p>
                <p>
                    <i>Відповідно до ст.199 СК України, якщо повнолітні дочка, син продовжують навчання і у зв'язку з цим потребують матеріальної допомоги, батьки зобов'язані утримувати їх до досягнення двадцяти трьох років за умови, що вони можуть надавати матеріальну допомогу. Право на утримання припиняється у разі припинення навчання. Право на звернення до суду з позовом про стягнення аліментів має той з батьків, з ким проживає дочка, син, а також самі дочка, син, які продовжують навчання.</i>
                </p>
                <p>
                    <i>Відповідно до ст.200 СК України, суд визначає розмір аліментів на повнолітніх дочку, сина у твердій грошовій сумі і (або) у частці від заробітку (доходу) платника аліментів з урахуванням обставин, зазначених у статті 182 цього Кодексу.</i>
                </p>
                <p>
                    Отже, в теперішній час я продовжую навчання і у зв'язку з цим потребую матеріальної допомоги від свого батька, ким є – відповідач <?= Html::encode($model->defendant_name); ?>, який <?= $model->do_work_defendant; ?>
                    <?php if ($model->do_work_defendant == 'працює' && $model->where_defendant_works == 'відомо' && $model->job_defendant) echo ' його місце роботи: ' . Html::encode($model->job_defendant);
                    elseif ($model->do_work_defendant == 'працює' && $model->where_defendant_works == 'не відомо') echo ' його місце роботи: ' . $model->where_defendant_works; ?>.
                    <?php if ($model->do_work_defendant == 'працює' && $model->have_income_defendant == 'я знаю розмір доходу Батька' && $model->income_defendant) echo 'Його розмір щомісячного доходу складає:' . $model->income_defendant . ' грн,';
                    elseif ($model->have_income_defendant == 'розмір доходу Батька мені не відомо') echo 'Його розмір доходу мені не відомо, але'; ?>
                    він має гарний стан здоров’я і нормальне матеріальне становище, тож може надавати мені матеріальну допомогу, тому я маю право на звернення до суду з цим позовом про стягнення аліментів на своє утримання.
                </p>
                <p>
                    Обґрунтований розрахунок сум, що стягуються: виходячи з принципу розумності та справедливості, вважаю, що аліменти у розмірі ¼ частини усіх видів заробітку, але не менше, ніж 50 відсотків прожиткового мінімуму, мій батько відповідач <?= Html::encode($model->defendant_name); ?> у змозі сплачувати і такий розмір буде достатнім для надання мені матеріальної допомоги у зв’язку з продовженням навчання.
                </p>
                <p>
                    Попередній (орієнтовний) розрахунок суми судових витрат, які позивач поніс і які очікує понести у зв'язку із розглядом справи: позивач не поніс судові витрати у зв’язку з тим, що на підставі п.3 ч.1 ст.5 Закону України «Про судовий збір» позивач звільнений від сплати судового збору під час розгляду справи в усіх судових інстанціях у справах про стягнення аліментів, і не очікує понести ніяких інших судових витрат у зв’язку з розглядом справи.
                </p>
                <p>
                    Заходи досудового врегулювання спору не вживалися.
                </p>
                <p>
                    Заходів забезпечення доказів або позову до подання позовної заяви не здійснювалися.
                </p>
                <p>
                    Також я підтверджую те, що мною не подано іншого позову (позовів) до цього самого відповідача (відповідачів) з тим самим предметом та з тих самих підстав.
                </p>
                <h4>Докази, що підтверджують вказані обставини:</h4>
                <ul class="spisok">
                    <li>мої пояснення, які будуть надані в судовому засіданні;</li>
                    <li>а також документи, оригінали та копії яких додаються <i>(оригінали всіх документів знаходяться у позивача)</i>.</li>
                </ul>
                <h4>Зміст позовних вимог:</h4>
                <p>
                    На підставі викладеного, відповідно до ст.ст. 182, 199, 200 СК України, Закону України «Про судовий збір», ст. ст. 4, 28, 174, 175 ЦПК України, –
                </p>
                <h2 style="text-align: center">Прошу:</h2>
                <h3>
                    Стягнути з відповідача, яким є: <?= Html::encode($model->defendant_name); ?> <?= Html::encode($model->date_birth_defendant); ?> р.н. на користь позивача, яким є: <?= Html::encode($model->username); ?> <?= $model->date_birth_user; ?> р.н. аліменти на утримання в розмірі ¼ частини усіх видів його заробітку (доходу), але не менше, ніж 50 відсотків прожиткового мінімуму, починаючи з дня подання позовної заяви до суду до досягнення позивачем, яким є: <?= Html::encode($model->username); ?> <?= $model->date_birth_user; ?> р.н. двадцяти трьох років або до припинення
                    <?php if ($model->whom_alimony == 'син') echo 'його';
                    else echo 'її'; ?> навчання.
                </h3>
                <br>
                <h4>Перелік документів та інших доказів, що додаються до заяви:</h4>
                <ul class="spisok">
                    <li>копії паспорта та ідентифікаційного номеру</li>
                    <li>копія Свідоцтва про народження</li>
                    <li>довідка про склад сім’ї</li>
                    <li>довідка з місця навчання</li>
                    <li>довідка щодо стипендії</li>
                    <li>копії позовної заяви та копії всіх документів, що додаються до неї, для відповідача та третьої особи.</li>
                </ul>
                <br>
                <p>"________"________________ 20_____ р.</p>
                <p style="text-align: right">________________________ <?= Html::encode($model->username); ?></p>
            </article>
        </div>
    <?php endif; ?>
</body>

</html>