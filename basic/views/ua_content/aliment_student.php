<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\MailerForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Region;
use app\models\Сourt;

?>

<!-- контент сервиса взыскание алиментов -->
<div class="main-content">
    <div class="content-innovation-servis it">
        <h1>Складання позовної заяви про стягнення аліментів на утримання повнолітнього студента (студентки) у зв’язку з продовженням навчання</h1>
        <br>

        <div class="title">
            <h2>Дійте згідно нижче розміщеним підказкам і уважно заповнюйте поля українською мовою, а також завантажте інструкцію, яка відкриється в новому вікні, після її завантаження ознайомтесь з нею і перейдіть назад на цю сторінку для продовження</h2>
            <br>
            <h4>Увага! Даним сервісом передбачено, що позивачем (стягувачем аліментів) в даному випадку виступає сам студент (студентка), відповідачем – батько, а третьою особою – мама.</h4>
            <br>
            <!-- <h4>Вартість - 500 грн, оплата онлайн через банківську платіжну систему по закінченню складання заяви</h4> -->
            <h4>В теперішній час ви можете скористуватися цією послугою безкоштовно. Починаючи з січня 2022 р. послуга буде платною.</h4>
        </div>
        <div class="home-ekran-2">
            <div class="container-icon">
                <a href="<?= Url::toRoute(['ua_content/aliment_student_instruction']) ?>" target="_blank">
                    <div class="icon"><?= Html::img('@web/img/icon-5.svg', ['title' => 'Відкриє згенерований PDF-файл в новому вікні', 'alt' => 'сервіс онлайн заяв']) ?>
                        <p>інструкція<br><span><span>(безкоштовно)<br>завантажити</span></p>
                    </div>
                </a>
            </div>
        </div>
        <div class="main-content">
            <article>
                <h4>Перш ніж приступати до написання заяви, вам необхідно зібрати наступні документи та інформацію:</h4>
                <ul class="spisok">
                    <li>Свій паспорт, ідентифікаційний код, Свідоцтво про народження</li>
                    <li>Довідка про склад сім’ї</li>
                    <li>Довідка з місця навчання</li>
                    <li>Довідка щодо стипендії (чи отримуєте стипендію)</li>
                    <li>Адреса реєстрації боржника аліментів (батька)</li>
                    <li>Ідентифікаційний код боржника аліментів (батька) (якщо відомо)</li>
                    <li>Відомості про місце роботи і розмір доходу боржника аліментів (батька) (якщо відомо)</li>
                    <li>Номер телефону і e-mail боржника аліментів (батька) (якщо відомо)</li>
                    <li>Адреса реєстрації третьої особи (мами)</li>
                    <li>Ідентифікаційний код третьої особи (мами) (у разі наявності, якщо відомо)</li>
                    <li>Номер телефону і e-mail третьої особи (мами) (якщо відомо)</li>
                </ul>
                <h4>Тож, починаємо:</h4>
            </article>
        </div>

        <!-- Начало формы сервиса взыскание алиментов -->
        <?php $form = ActiveForm::begin(['id' => 'aliment-form', 'action' => "aliment_student_claim", 'options' => ['method' => "post", 'class' => 'aliment']]) ?>
        <?php $court_region = Region::find()->select('id, name')->all();
        $listData = ArrayHelper::map($court_region, 'id', 'name');
        $regionData = ArrayHelper::map($court_region, 'name', 'name');
        $url_court = Url::toRoute(['ua_content/court']);
        ?>
        <?= $form->field($model, 'court_region')->dropDownList(
            $listData,
            ['prompt' => 'Оберіть регіон суду', 'title' => 'Оберіть регіон суду', 'class' => 'name entry',  'onchange' => '
            $.get( "' .  $url_court . '", { id: $(this).val() } )
                .done(function(data) {
                    var list = JSON.parse(data);
                    $("#court option:not(:first)").remove();
                    $(list).each(function()
                    {
                        var option = $("<option />");
                        option.attr("value", this.name).text(this.name);
                        $("#court").append(option);
                    });
                }
            );
        '],
        )->label(false); ?>
        <?= $form->field($model, 'court')
            ->dropDownList(
                ['prompt' => 'Оберіть суд, до якого подається заява'],
                ['class' => 'name entry', 'id' => 'court', 'placeholder' => 'Оберіть суд', 'title' => 'Оберіть суд, до якого подається заява']
            )->label(false);
        ?>
        <?= $form->field($model, 'username')->textInput(['class' => 'name entry', 'placeholder' => 'Ваше прізвище, ім\'я, по батькові', 'title' => 'Ваше прізвище, ім\'я, по батькові'])->label(false) ?>
        <?= $form->field($model, 'date_birth_user')->textInput(['class' => 'name entry', 'placeholder' => 'Дата Вашого народження дд.мм.рррр', 'title' => 'Дата Вашого народження дд.мм.рррр'])->label(false) ?>
        <?= $form->field($model, 'ident_number_user')->textInput(['class' => 'name entry', 'placeholder' => 'Ваш ідентифікаційний номер', 'title' => 'Ваш ідентифікаційний номер'])->label(false) ?>
        <?= $form->field($model, 'postcode_user')->textInput(['class' => 'name entry', 'placeholder' => 'Ваш поштовий індекс', 'title' => 'Ваш поштовий індекс'])->label(false) ?>
        <?= $form->field($model, 'region_user')->dropDownList(
            $regionData,
            ['prompt' => 'Ваш регіон (область)', 'title' => 'Ваш регіон (область)', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'town_user')->textInput(['class' => 'name entry', 'placeholder' => 'Ваше місто (селище, село), район', 'title' => 'Ваше місто (селище, село), район'])->label(false) ?>
        <?= $form->field($model, 'street_user')->textInput(['class' => 'name entry', 'placeholder' => 'Ваша вулиця (пров., просп.)', 'title' => 'Ваша вулиця (пров., просп.)'])->label(false) ?>
        <?= $form->field($model, 'house_user')->textInput(['class' => 'name entry', 'placeholder' => 'Номер Вашого будинку', 'title' => 'Номер Вашого будинку'])->label(false) ?>
        <?= $form->field($model, 'apartment_user')->textInput(['class' => 'name entry', 'placeholder' => 'Номер Вашої квартири', 'title' => 'Номер Вашої квартири'])->label(false) ?>
        <?= $form->field($model, 'email_user')->textInput(['class' => 'name entry', 'placeholder' => 'Ваша електронна адреса: e-mail', 'title' => 'Ваша електронна адреса: e-mail'])->label(false) ?>
        <?= $form->field($model, 'phone_user')->textInput(['class' => 'name entry', 'placeholder' => 'Номер Вашого телефону', 'title' => 'Номер Вашого телефону'])->label(false) ?>
        <?= $form->field($model, 'defendant_name')->textInput(['class' => 'name entry', 'placeholder' => 'Батько: прізвище, ім\'я, по батькові', 'title' => 'Батько: прізвище, ім\'я, по батькові'])->label(false) ?>
        <?= $form->field($model, 'date_birth_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Батько: дата народження дд.мм.рррр', 'title' => 'Батько: дата народження дд.мм.рррр'])->label(false) ?>
        <?= $form->field($model, 'ident_number_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Батько: ідентифікаційний номер', 'title' => 'Батько: ідентифікаційний номер'])->label(false) ?>
        <?= $form->field($model, 'postcode_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Батько: поштовий індекс', 'title' => 'Батько: поштовий індекс'])->label(false) ?>
        <?= $form->field($model, 'region_defendant')->dropDownList(
            $regionData,
            ['prompt' => 'Батько: регіон (область)', 'title' => 'Батько: регіон (область)', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'town_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Батько: місто (селище, село), район', 'title' => 'Батько: місто (селище, село), район'])->label(false) ?>
        <?= $form->field($model, 'street_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Батько: вулиця (пров., просп.)', 'title' => 'Батько: вулиця (пров., просп.)'])->label(false) ?>
        <?= $form->field($model, 'house_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Батько: номер будинку', 'title' => 'Батько: номер будинку'])->label(false) ?>
        <?= $form->field($model, 'apartment_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Батько: номер квартири', 'title' => 'Батько: номер квартири'])->label(false) ?>
        <?= $form->field($model, 'email_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Батько: електронна адреса (e-mail)', 'title' => 'Батько: електронна адреса (e-mail)'])->label(false) ?>
        <?= $form->field($model, 'phone_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Батько: номер телефону', 'title' => 'Батько: номер телефону'])->label(false) ?>
        <?= $form->field($model, 'third_person_name')->textInput(['class' => 'name entry', 'placeholder' => 'Мати: прізвище, ім\'я, по батькові', 'title' => 'Мати: прізвище, ім\'я, по батькові'])->label(false) ?>
        <?= $form->field($model, 'date_birth_third_person')->textInput(['class' => 'name entry', 'placeholder' => 'Мати: дата народження дд.мм.рррр', 'title' => 'Мати: дата народження дд.мм.рррр'])->label(false) ?>
        <?= $form->field($model, 'ident_number_third_person')->textInput(['class' => 'name entry', 'placeholder' => 'Мати: ідентифікаційний номер', 'title' => 'Мати: ідентифікаційний номер'])->label(false) ?>
        <?= $form->field($model, 'postcode_third_person')->textInput(['class' => 'name entry', 'placeholder' => 'Мати: поштовий індекс', 'title' => 'Мати: поштовий індекс'])->label(false) ?>
        <?= $form->field($model, 'region_third_person')->dropDownList(
            $regionData,
            ['prompt' => 'Мати: регіон (область)', 'title' => 'Мати: регіон (область)', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'town_third_person')->textInput(['class' => 'name entry', 'placeholder' => 'Мати: місто (селище, село), район', 'title' => 'Мати: місто (селище, село), район'])->label(false) ?>
        <?= $form->field($model, 'street_third_person')->textInput(['class' => 'name entry', 'placeholder' => 'Мати: вулиця (пров., просп.)', 'title' => 'Мати: вулиця (пров., просп.)'])->label(false) ?>
        <?= $form->field($model, 'house_third_person')->textInput(['class' => 'name entry', 'placeholder' => 'Мати: номер будинку', 'title' => 'Мати: номер будинку'])->label(false) ?>
        <?= $form->field($model, 'apartment_third_person')->textInput(['class' => 'name entry', 'placeholder' => 'Мати: номер квартири', 'title' => 'Мати: номер квартири'])->label(false) ?>
        <?= $form->field($model, 'email_third_person')->textInput(['class' => 'name entry', 'placeholder' => 'Мати: електронна адреса (e-mail)', 'title' => 'Мати: електронна адреса (e-mail)'])->label(false) ?>
        <?= $form->field($model, 'phone_third_person')->textInput(['class' => 'name entry', 'placeholder' => 'Мати: номер телефону', 'title' => 'Мати: номер телефону'])->label(false) ?>
        <?= $form->field($model, 'whom_alimony')->dropDownList(
            ['син' => 'син', 'донька' => 'донька'],
            ['prompt' => 'Зазначте: хто ви для відповідача?', 'title' => 'Зазначте: хто ви для відповідача?', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'training_start')->textInput(['class' => 'name entry', 'placeholder' => 'Дата зарахування до навчання: дд.мм.рррр', 'title' => 'Дата зарахування до навчання: дд.мм.рррр'])->label(false) ?>
        <?= $form->field($model, 'educational_institution')->textInput(['class' => 'name entry', 'placeholder' => 'Повна назва учбового закладу', 'title' => 'Повна назва учбового закладу'])->label(false) ?>
        <?= $form->field($model, 'name_specialty')->textInput(['class' => 'name entry', 'placeholder' => 'Назва спеціальності навчання', 'title' => 'Назва спеціальності навчання'])->label(false) ?>
        <?= $form->field($model, 'what_course')->dropDownList(
            ['на І курсі' => 'на І курсі', 'на ІІ курсі' => 'на ІІ курсі', 'на ІІІ курсі' => 'на ІІІ курсі', 'на ІV курсі' => 'на ІV курсі', 'на V курсі' => 'на V курсі'],
            ['prompt' => 'Зазначте: на якому курсі навчаєтесь?', 'title' => 'Зазначте: на якому курсі навчаєтесь?', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'form_education')->dropDownList(
            ['денна (очна) – бюджетна' => 'денна (очна) – бюджетна', 'денна (очна) – за контрактом' => 'денна (очна) – за контрактом', 'заочна (дистанційна) – бюджетна' => 'заочна (дистанційна) – бюджетна', 'заочна (дистанційна) – за контрактом' => 'заочна (дистанційна) – за контрактом'],
            ['prompt' => 'Зазначте: яка форма навчання?', 'title' => 'Зазначте: яка форма навчання?', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'receiving_scholarship')->dropDownList(
            ['отримую стипендію' => 'отримую стипендію', 'стипендію не отримую' => 'стипендію не отримую'],
            ['prompt' => 'Зазначте: чи отримуєте стипендію?', 'title' => 'Зазначте: чи отримуєте стипендію?', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'scholarship_amount')->textInput(['class' => 'name entry', 'placeholder' => 'Розмір стипендії (якщо отримуєте)', 'title' => 'Розмір стипендії (якщо отримуєте)'])->label(false) ?>
        <?= $form->field($model, 'training_finish')->textInput(['class' => 'name entry', 'placeholder' => 'Дата закінчення навчання дд.мм.рррр', 'title' => 'Дата закінчення навчання дд.мм.рррр'])->label(false) ?>
        <?= $form->field($model, 'continue_studies')->dropDownList(
            ['планую в подальшому продовжувати навчання' => 'планую в подальшому продовжувати навчання', 'не планую продовжувати навчання' => 'не планую продовжувати навчання'],
            ['prompt' => 'Плануєте далі навчатись по закінченню?', 'title' => 'Плануєте далі навчатись по закінченню?', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'do_work_defendant')->dropDownList(
            ['працює' => 'працює', 'не працює' => 'не працює', 'чи працює - мені не відомо' => 'чи працює - мені не відомо'],
            ['prompt' => 'Зазначте: чи працює Батько?', 'title' => 'Зазначте: чи працює Батько?', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'where_defendant_works')->dropDownList(
            ['відомо' => 'відомо', 'не відомо' => 'не відомо'],
            ['prompt' => 'Чи відомо місце роботи Батька?', 'title' => 'Чи відомо місце роботи Батька?', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'job_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Батько: робота, посада (якщо відомо)', 'title' => 'Батько: робота, посада (якщо відомо)'])->label(false) ?>
        <?= $form->field($model, 'have_income_defendant')->dropDownList(
            ['я знаю розмір доходу Батька' => 'я знаю розмір доходу Батька', 'розмір доходу Батька мені не відомо' => 'розмір доходу Батька мені не відомо'],
            ['prompt' => 'Чи відомо розмір доходу Батька?', 'title' => 'Чи відомо розмір доходу Батька?', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'income_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Щомісячний дохід Батька (якщо відомо)', 'title' => 'Щомісячний дохід Батька (якщо відомо)'])->label(false); ?>
        <div class="form-group">
            <?= Html::submitButton($content = 'Скласти', ['class' => 'btn submit entry', 'name' => 'divorce-button']) ?>
        </div>
        <?php $form = ActiveForm::end() ?>
        <!-- Конец формы сервиса взыскание алиментов -->
    </div>
</div>