<?php

use yii\helpers\Html;
?>

<!DOCTYPE html>
<html lang="ukr-UA">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Позовна заява про стягнення аліментів на утримання дружини</title>
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
                <h3 style="text-align: center">про стягнення аліментів на утримання дружини, з якою проживає дитина, до досягнення дитиною трьох років</h3>
                <h3>Виклад обставин, якими позивач обґрунтовує свої позовні вимоги:</h3>
                <p><?= Html::encode($model->date_marriage); ?> р. я, <?= Html::encode($model->username); ?>, і <?= Html::encode($model->defendant_name); ?> уклали шлюб, проживали разом однією сім’єю.</p>
                <p>На теперішній час наш шлюб <?= $model->marriage_dissolved; ?>.</p>
                <p>Від шлюбу маємо
                    <?php if ($model->whom_alimony == 'одна дитина') echo 'дитину';
                    else echo 'дітей'; ?> віком до трьох років: <?= Html::encode($model->children); ?> р.н., місце проживання - зі мною та на моєму утриманні.</p>
                <p>Матеріальну допомогу на моє утримання Відповідач не надає, в добровільному порядку надавати відмовляється і я не маю можливості одержання утримання від інших осіб.</p>
                <p>Місце роботи боржника, яким є: <?= Html::encode($model->defendant_name) . ' - ' . Html::encode($model->job_defendant); ?>, його щомісячний дохід -
                    <?php if ($model->have_income_defendant == 'я знаю розмір доходу відповідача') : echo Html::encode($model->income_defendant) . ' грн,';
                    else : echo 'мені не відомо, але';
                    endif ?>
                    він фізично здоровий, отже спроможній сплачувати аліменти на моє утримання.
                </p>
                <p><i>Відповідно до ст.84 СК України, дружина, з якою проживає дитина, має право на утримання від чоловіка - батька дитини до досягнення дитиною трьох років. Право на утримання вагітна дружина, а також дружина, з якою проживає дитина, має незалежно від того чи вона працює та незалежно від її матеріального становища, за умови, що чоловік може надавати матеріальну допомогу. Право на утримання вагітна дружина, а також дружина, з якою проживає дитина, має і в разі розірвання шлюбу.</i>
                <p>
                <p>Отже, є всі підстави для стягнення з Відповідача, яким є: <?= Html::encode($model->defendant_name); ?>, аліменти на моє утримання.</p>
                <p>Обґрунтований розрахунок сум, що стягуються: виходячи з принципу розумності та справедливості, вважаю, що аліменти у розмірі ¼ частини усіх видів заробітку відповідач <?= Html::encode($model->defendant_name); ?> у змозі сплачувати і такий розмір буде достатнім на моє утримання у зв’язку з тим, що зі мною
                    <?php if ($model->whom_alimony == 'одна дитина') echo 'проживає наша дитина';
                    else echo 'проживають наші діти'; ?>, до досягнення
                    <?php if ($model->whom_alimony == 'одна дитина') echo 'дитиною';
                    else echo 'дітьми'; ?> трьох років.
                </p>
                <p>Попередній (орієнтовний) розрахунок суми судових витрат, які позивач поніс і які очікує понести у зв'язку із розглядом справи: позивач не поніс судові витрати у зв’язку з тим, що на підставі п.3 ч.1 ст.5 Закону України «Про судовий збір» позивач звільнений від сплати судового збору під час розгляду справи в усіх судових інстанціях у справах про стягнення аліментів, і не очікує понести ніяких інших судових витрат у зв’язку з розглядом справи.</p>
                <p>Заходи досудового врегулювання спору не вживалися.</p>
                <p>Заходів забезпечення доказів або позову до подання позовної заяви не здійснювалися.</p>
                <p>Також я підтверджую те, що мною не подано іншого позову (позовів) до цього самого відповідача (відповідачів) з тим самим предметом та з тих самих підстав.</p>
                <h4>Докази, що підтверджують вказані обставини:</h4>
                <ul>
                    <li>мої пояснення, які будуть надані в судовому засіданні;</li>
                    <li>а також документи, оригінали та копії яких додаються <i>(оригінали всіх документів знаходяться у позивача).</i></li>
                </ul>
                <h4>Зміст позовних вимог:</h4>
                <p>Відповідно до ст.84 Сімейного Кодексу України, Закону України «Про судовий збір», ст. ст. 4, 28, 174, 175 ЦПК України, –</p>
                <h2 style="text-align: center">Прошу:</h2>
                <h3>Стягнути з відповідача, яким є: <?= Html::encode($model->defendant_name); ?> <?= Html::encode($model->date_birth_defendant); ?> р.н., на користь позивача, яким є: <?= Html::encode($model->username); ?> <?= Html::encode($model->date_birth_user); ?> р.н. і з якою
                    <?php if ($model->whom_alimony == 'одна дитина') echo 'проживає дитина: ' . Html::encode($model->children);
                    else echo 'проживають діти: ' . Html::encode($model->children); ?> р.н., аліменти на утримання в розмірі ¼ частини усіх видів його заробітку (доходу), до досягнення
                    <?php if ($model->whom_alimony == 'одна дитина') echo 'дитиною';
                    else echo 'дітьми'; ?> трьох років.
                </h3>
                <br>
                <h4>Перелік документів та інших доказів, що додаються до заяви:</h4>
                <ul>
                    <li>копії паспорту та ідентифікаційного номеру позивача</li>
                    <?php if ($model->marriage_dissolved == 'не припинено') : echo
                        '<li>копія свідоцтва про шлюб</li>';
                    else : echo '<li>копія судового рішення про розірвання шлюбу</li>';
                    endif ?>
                    <?php if ($model->whom_alimony == 'одна дитина') : echo
                        '<li>копія свідоцтва про народження дитини</li>';
                    else : echo '<li>копії свідоцтв про народження дітей</li>';
                    endif ?>
                    <li>довідка про склад сім’ї</li>
                    <li>копія позовної заяви разом з доданими до неї документами</li>
                </ul>
                <br>
                <p>"________"________________ 20_____ р.</p>
                <p style="text-align: right">________________________ <?= Html::encode($model->username); ?></p>
            </article>
        </div>
    <?php endif; ?>
</body>

</html>