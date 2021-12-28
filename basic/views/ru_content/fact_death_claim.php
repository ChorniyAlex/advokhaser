<?php

use yii\helpers\Html;
?>

<!DOCTYPE html>
<html lang="ukr-UA">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявление об установлении факта смерти</title>
    <style type="text/css">
        .interested-person-name {
            width: 100%;
        }

        .interested-name {
            margin: auto 0 auto 40%;
            width: 70%;
            text-align: right;
        }
    </style>
</head>

<body>
    <?php if (isset($model)) : ?>
        <div class="main-content">
            <article>
                <h2 style="text-align: right"><?php echo $model->court; ?></h2>
                <h3 style="text-align: right">Заявник:</h3>
                <h4 style="text-align: right"><?= Html::encode($model->username); ?></h4>
                <p style="text-align: right">РНОКПП: <?= Html::encode($model->ident_number_user); ?></p>
                <p style="text-align: right">місце проживання: <?= Html::encode($model->postcode_user); ?>, <?= $model->region_user; ?></p>
                <p style="text-align: right">місто (сел., район): <?= Html::encode($model->town_user); ?>, вул. <?= Html::encode($model->street_user); ?>, буд.<?= Html::encode($model->house_user); ?>
                    <?php if ($model->apartment_user) echo 'кв.' . Html::encode($model->apartment_user); ?></p>
                <p style="text-align: right">офіційна електронна адреса: відсутня</p>
                <p style="text-align: right">адреса електронної пошти: <?= $model->email_user; ?></p>
                <p style="text-align: right">номер засобу зв’язку: <?= Html::encode($model->phone_user); ?></p>
                <h3 style="text-align: right">Заінтересована особа:</h3>
                <div class="interested-person-name">
                    <h4 class="interested-name"><?= Html::encode($model->interested_person_name); ?></h4>
                </div>
                <p style="text-align: right">ЄДРПОУ: <?= Html::encode($model->code_interested_person); ?></p>
                <p style="text-align: right"><?= Html::encode($model->postcode_interested_person); ?>, <?= $model->region_interested_person; ?></p>
                <p style="text-align: right">місто (сел., район): <?= Html::encode($model->town_interested_person); ?>, вул. <?= Html::encode($model->street_interested_person); ?>, буд.<?= Html::encode($model->house_interested_person); ?></p>
                <p style="text-align: right">офіційна електронна адреса: не відомо</p>
                <p style="text-align: right">адреса електронної пошти:
                    <?php if ($model->email_interested_person) echo $model->email_interested_person;
                    else echo 'не відомо'; ?></p>
                <p style="text-align: right">номер засобу зв’язку: <?= Html::encode($model->phone_interested_person); ?></p>
                <h2 style="text-align: center">Заява</h2>
                <h3 style="text-align: center">про встановлення факту смерті</h3>
                <h4>Виклад обставин:</h4>
                <p>
                    <?= Html::encode($model->date_death); ?> р. у віці <?= Html::encode($model->age_deceased); ?> років <?= Html::encode($model->who_deceased); ?>: <?= Html::encode($model->deceasedname); ?> <?= Html::encode($model->date_birth_deceased); ?> р.н., місце народження: <?= Html::encode($model->region_birth_deceased); ?>, <?= Html::encode($model->town_birth_deceased); ?>, адреса реєстрації місця проживання на момент смерті: <?= Html::encode($model->region_registration_deceased); ?>, <?= Html::encode($model->town_registration_deceased); ?>, <?= Html::encode($model->street_registration_deceased); ?>, буд.<?= Html::encode($model->house_registration_deceased); ?>,
                    <?php if ($model->apartment_registration_deceased) echo 'кв.' . Html::encode($model->apartment_registration_deceased) . ',' ?> місце смерті: <?= Html::encode($model->region_deceased); ?>, <?= Html::encode($model->town_deceased); ?>, причина смерті: <?= Html::encode($model->cause_death); ?>, місце поховання – на кладовищі за адресою: <?= Html::encode($model->region_deceased); ?>, <?= Html::encode($model->town_deceased); ?>.
                </p>
                <p>
                    Оскільки наявні документи про смерть особи видані на непідконтрольній владі України території і у зв’язку з цим не можуть бути прийнятими відповідними органами РАЦС для державної реєстрації факту смерті, то, відповідно, є неможливим без судового рішення про встановлення факту смерті державна реєстрація цього факту смерті.
                </p>
                <h4>Який факт заявник просить встановити та з якою метою:</h4>
                <p>
                    З метою реєстрації вищезазначеного факту смерті за законами України та отримання свідоцтва про смерть встановленого законодавством України зразка та в подальшому реалізації спадкових прав НЕОБХІДНО встановити факт смерті вищезазначеної особи, а саме те, що <?= Html::encode($model->deceasedname); ?> <?= Html::encode($model->date_birth_deceased); ?> р.н. –
                    <?php if ($model->who_deceased == 'помер мій батько' || $model->who_deceased == 'помер мій дід' || $model->who_deceased == 'помер мій чоловік' || $model->who_deceased == 'помер мій син' || $model->who_deceased == 'помер мій брат' || $model->who_deceased == 'помер мій дядько' || $model->who_deceased == 'помер мій племінник') echo 'помер';
                    else echo 'померла' ?> <?= Html::encode($model->date_death); ?> р.
                </p>
                <h4>Причини неможливості одержання або відновлення документів, що посвідчують цей факт:</h4>
                <p>Причиною неможливості одержання або відновлення документів, що посвідчують цей факт, є те, що вищезазначене місце смерті знаходиться на непідконтрольній владі України території, документи встановленого законодавством України зразка, що прямо б підтверджували цей факт, відсутні, а ті документи про смерть, що отримані, є юридично недійсними на території України, тому неможлива у зв’язку з цим реєстрація органом державної реєстрації актів цивільного стану факту смерті та видачі свідоцтва про смерть встановленого законодавством України зразка.</p>
                <p><i>Відповідно до ч.3 ст.49 Цивільного кодексу України державній реєстрації підлягають народження фізичної особи та її походження, громадянство, шлюб, розірвання шлюбу, зміна імені та смерть.</i></p>
                <p><i>Відповідно до ч.1 ст.17 Закону України «Про державну реєстрацію актів цивільного стану» державна реєстрація смерті проводиться на підставі документів встановленої форми про смерть, виданого закладом охорони здоров’я або судово-медичною установою; рішення суду про встановлення факту смерті особи в певний час або про оголошення її померлою.</i></p>
                <p><i>Відповідно до Правил державної реєстрації актів цивільного стану в Україні затверджені Наказом Міністерства юстиції України від 18.10.2000 N52/5, підставою для державної реєстрації смерті є: рішення суду про встановлення факту смерті…</i></p>
                <p><i>Відповідно до п.8 ч.1 ст.315 ЦПК України суд розглядає справи про встановлення факту смерті особи в певний час у разі неможливості реєстрації органом державної реєстрації актів цивільного стану факту смерті.</i></p>
                <p><i>Відповідно до ч.1 ст.317 ЦПК України заява про встановлення факту смерті особи на тимчасово окупованій території України, визначеній Верховною Радою України, може бути подана родичами померлого або їхніми представниками до суду за межами такої території України.</i></p>
                <p><i>Згідно до ч.2 ст.319 ЦПК України рішення суду про встановлення факту, який підлягає реєстрації в органах державної реєстрації актів цивільного стану або нотаріальному посвідченню, не замінює собою документів, що видаються цими органами, а є тільки підставою для одержання зазначених документів.</i></p>
                <p><i>Згідно п.18 Постанови Пленуму Верховного суду України №5 від 31 березня 1995 року рішення суду про встановлення факту, що має юридичне значення, не змінює собою документів, що видають зазначені органи, а є лише підставою для їх одержання… В разі встановлення у судовому порядку факту реєстрації акту громадянського стану орган державної реєстрації актів громадянського стану провадить відповідний запис на підставі рішення суду.</i></p>
                <p><i>Відповідно до ст.ст. 3, 8, 9 Конституції України в Україні визнається і діє принцип верховенства права, утвердження і забезпечення прав і свобод людини є головним обов’язком держави, а чинні міжнародні договори, згода на обов’язковість яких надана Верховною Радою України, є частиною національного законодавства України.</i></p>
                <p><i>Стосовно окупованих територій у практиці Міжнародного суду ООН сформульовані так звані «намібійські винятки»: документи, видані окупаційною владою, повинні визнаватися, якщо їх невизнання веде за собою серйозні порушення або обмеження прав громадян. Так, у Консультативному висновку Міжнародного суду ООН від 21 червня 1971 року «Юридичні наслідки для держав щодо триваючої присутності Південної Африки у Намібії» зазначено, що держави - члени ООН зобов’язані визнавати незаконність і недійсність триваючої присутності Південної Африки в Намібії, але «у той час як офіційні дії, вчинені урядом Південної Африки від імені або щодо Намібії після припинення дії мандата є незаконними і недійсними, ця недійсність не може бути застосовна до таких дій як, наприклад, реєстрація народжень, смертей і шлюбів».</i></p>
                <p><i>Європейський суд з прав людини послідовно розвиває цей принцип у своїй практиці. Так, якщо у справі «Лоізіду проти Туреччини» (Loizidou v. Turkey, 18.12.1996, §45) ЄСПЛ обмежився коротким посиланням на відповідний пункт названого висновку Міжнародного суду, то у справах «Кіпр проти Туреччини» (Cyprus v. Turkey, 10.05.2001) та «Мозер проти Республіки Молдови та Росії» (Mozer v. the Republic of Moldova and Russia, 23.02.2016) він приділив значну увагу аналізу цього висновку та подальшої міжнародної практики. При цьому ЄСПЛ констатував, що «Консультативний висновок Міжнародного Суду, що розуміється в сукупності з виступами і поясненнями деяких членів суду, чітко показує, що в ситуаціях, подібних до тих, що наводяться в цій справі, зобов’язання ігнорувати, не брати до уваги дії існуючих de facto органів та інститутів [окупаційної влади] далеко від абсолютного. Для людей, що проживають на цій території, життя триває. І це життя потрібно зробити більш стерпним і захищеним фактичною владою, включаючи їх суди; і виключно в інтересах жителів цієї території дії згаданої влади, які мають відношення до сказаного вище, не можуть просто ігноруватися третіми країнами або міжнародними організаціями, особливо судами, в тому числі й цим [ЄСПЛ]. Вирішити інакше означало б зовсім позбавляти людей, що проживають на цій території, всіх їх прав щоразу, коли вони обговорюються в міжнародному контексті, що означало б позбавлення їх навіть мінімального рівня прав, які їм належать» (Cyprus v. Turkey, 10.05.2001, §96). При цьому, за логікою цього рішення, визнання актів окупаційної влади в обмеженому контексті захисту прав мешканців окупованих територій ніяким чином не легітимізує таку владу (Cyprus v. Turkey, 10.05.2001, §92). Спираючись на сформульований у цій справі підхід, ЄСПЛ у справі «Мозер проти Республіки Молдови та Росії» наголосив, що «першочерговим завданням для прав, передбачених Конвенцією, завжди має бути їх ефективна захищеність на території всіх Договірних Сторін, навіть якщо частина цієї території знаходиться під ефективним контролем іншої Договірної Сторони [тобто є окупованою]» (Mozer v. the Republic of Moldova and Russia, 23.02.2016, §142).</i></p>
                <p>
                    Таким чином, вважаю, що в даній ситуації можуть бути застосовані вищезазначені загальні принципи («Намібійські винятки»), сформульовані в рішеннях Міжнародного суду ООН та Європейського суду з прав людини, в контексті оцінки документів про смерть, виданих закладом, що знаходяться на території не підконтрольній владі України, до документів, які підтверджують те, що <?= Html::encode($model->deceasedname); ?> <?= Html::encode($model->date_birth_deceased); ?> р.н.
                    <?php if ($model->who_deceased == 'помер мій батько' || $model->who_deceased == 'помер мій дід' || $model->who_deceased == 'помер мій чоловік' || $model->who_deceased == 'помер мій син' || $model->who_deceased == 'помер мій брат' || $model->who_deceased == 'помер мій дядько' || $model->who_deceased == 'помер мій племінник') echo 'помер';
                    else echo 'померла' ?> <?= Html::encode($model->date_death); ?> р., і які отримані за місцем смерті, як доказів, оскільки можливості збору доказів на підтвердження смерті особи на тимчасово окупованій території є істотно обмеженими, у той час як встановлення цього факту має істотне значення для реалізації цілої низки прав людини, включаючи право на спадщину тощо.
                </p>
                <p>
                    Також вважаю, що <?= Html::encode($model->interested_person_name); ?> має приймати участь у розгляді справи у якості заінтересованої особи, оскільки від встановлення вищезазначеного факту залежить чи буде внесено відповідним органом РАЦС відомості до державного реєстру та чи буде видане ним свідоцтво про смерть, і саме цей орган за місцем ухвалення судового рішення має здійснити державну реєстрацію смерті особи.
                </p>
                <p>
                    Так як дана заява є заявою окремого провадження, то, згідно Закону України «Про судовий збір», мною було сплачено судовий збір, розмір якого становить: 0,2 розміру прожиткового мінімуму на одну працездатну особу, що є судовими витратами у справі, і в подальшому додатково я не очікую понесення інших судових витрат у зв’язку із розглядом справи.
                </p>
                <p>
                    Також заявляю, що мною не подано іншої заяви про встановлення факту, що має юридичне значення, з тим самим предметом та з тих самих підстав.
                </p>
                <h4>Докази, що підтверджують факт:</h4>
                <ul>
                    <li>документи та їх копії, які додані до заяви <i>(оригінали всіх документів знаходяться у заявника).</li>
                </ul>
                <p>На підставі викладеного, відповідно до ст.49 ЦК України, ст.17 Закону України «Про державну реєстрацію актів цивільного стану», Консультативного висновку Міжнародного суду ООН від 21 червня 1971 року «Юридичні наслідки для держав щодо триваючої присутності Південної Африки у Намібії», Правил державної реєстрації актів цивільного стану в Україні затверджені Наказом Міністерства юстиції України від 18.10.2000 N52/5, керуючись ст.ст. 315-319 ЦПК України, –</p>
                <h2 style="text-align: center">Прошу:</h2>
                <h4>
                    Встановити факт смерті особи, якою є: <?= Html::encode($model->deceasedname); ?> <?= Html::encode($model->date_birth_deceased); ?> р.н., місце народження: <?= Html::encode($model->region_birth_deceased); ?>, <?= Html::encode($model->town_birth_deceased); ?>, місце реєстрації на день смерті за адресою: <?= Html::encode($model->region_registration_deceased); ?>, <?= Html::encode($model->town_registration_deceased); ?>, <?= Html::encode($model->street_registration_deceased); ?>, буд.<?= Html::encode($model->house_registration_deceased); ?>,
                    <?php if ($model->apartment_registration_deceased) echo 'кв.' . Html::encode($model->apartment_registration_deceased) . ',' ?> дата смерті: <?= Html::encode($model->date_death); ?> р. у віці <?= Html::encode($model->age_deceased); ?> років, місце смерті: Україна, <?= Html::encode($model->region_deceased); ?>, <?= Html::encode($model->town_deceased); ?>, причина смерті: <?= Html::encode($model->cause_death); ?>.
                </h4>
                <h4>Розглянути справу без моєї особистої участі.</h4>
                <h4>Перелік документів, що додаються до заяви:</h4>
                <ul>
                    <li>копії паспорту, ідентифікаційного коду, та документа щодо зареєстрованого місця проживання заявника</li>
                    <li>копії свідоцтва про народження (інших документів, які підтверджують рідство з померлою особою)</li>
                    <li>документи померлої особи, в т.ч. які підтверджують смерть і поховання</li>
                    <li>квитанція про сплату судового збору</li>
                    <li>копія заяви з додатками для заінтересованої особи.</li>
                </ul>
                <p>"________"________________ 20_____ р.</p>
                <p style="text-align: right">________________________ <?= Html::encode($model->username); ?></p>
            </article>
        </div>
    <?php endif; ?>
</body>

</html>