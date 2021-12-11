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
        <h1>Составление искового заявления о взыскании алиментов на содержание жены до достижения ребенком трех лет</h1>
        <div class="title">
            <br>
            <h2>Действуйте согласно нижеприведенным подсказкам и внимательно заполняйте поля на украинском языке, а также скачайте инструкцию, которая откроется в новом окне, после ее загрузки ознакомьтесь с ней и перейдите обратно на эту страницу для продолжения</h2>
            <br>
            <!-- <h4>Вартість - 500 грн, оплата онлайн через банківську платіжну систему по закінченню складання заяви</h4> -->
            <h4>В настоящее время вы можете воспользоваться этой услугой бесплатно. Начиная с января 2022 г., услуга будет платной.</h4>
        </div>
        <div class="home-ekran-2">
            <div class="container-icon">
                <a href="<?= Url::toRoute(['ru_content/aliment_wife_instruction']) ?>" target="_blank">
                    <div class="icon"><?= Html::img('@web/img/icon-5.svg', ['title' => 'Відкриє згенерований PDF-файл в новому вікні', 'alt' => 'сервіс онлайн заяв']) ?>
                        <p>инструкция<br><span><span>(бесплатно)<br>скачать</span></p>
                    </div>
                </a>
            </div>
        </div>
        <div class="main-content">
            <article>
                <h4>Прежде чем приступать к написанию заявления, вам необходимо собрать следующие документы и информацию:</h4>
                <ul class="spisok">
                    <li>Свой паспорт и идентификационный код</li>
                    <li>Идентификационный код ответчика алиментов (если известно)</li>
                    <li>Свидетельство о браке (если состоите в браке) или решение суда о расторжении брака (если брак расторгнут)</li>
                    <li>Свидетельство о рождении ребенка (детей)</li>
                    <li>Справка о составе семьи</li>
                    <li>Сведения о месте работы и размере дохода ответчика алиментов (если известно)</li>
                    <li>Адрес регистрации ответчика алиментов</li>
                    <li>Номер телефона и e-mail ответчика алиментов (если известно)</li>
                </ul>
                <h4>Итак, начинаем (далее всё только на украинском языке!):</h4>
            </article>
        </div>

        <!-- Начало формы сервиса взыскания алиментов -->
        <?php $form = ActiveForm::begin(['id' => 'aliment-form', 'action' => "aliment_wife_claim", 'options' => ['method' => "post", 'class' => 'aliment']]) ?>
        <?php $court_region = Region::find()->select('id, name')->all();
        $listData = ArrayHelper::map($court_region, 'id', 'name');
        $regionData = ArrayHelper::map($court_region, 'name', 'name');
        $url_court = Url::toRoute(['ru_content/court']);
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
        <?= $form->field($model, 'defendant_name')->textInput(['class' => 'name entry', 'placeholder' => 'Відповідач: прізвище, ім\'я, по батькові', 'title' => 'Відповідач: прізвище, ім\'я, по батькові'])->label(false) ?>
        <?= $form->field($model, 'date_birth_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Відповідач: дата народження дд.мм.рррр', 'title' => 'Відповідач: дата народження дд.мм.рррр'])->label(false) ?>
        <?= $form->field($model, 'ident_number_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Відповідач: ідентифікаційний номер', 'title' => 'Відповідач: ідентифікаційний номер'])->label(false) ?>
        <?= $form->field($model, 'postcode_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Відповідач: поштовий індекс', 'title' => 'Відповідач: поштовий індекс'])->label(false) ?>
        <?= $form->field($model, 'region_defendant')->dropDownList(
            $regionData,
            ['prompt' => 'Відповідач: регіон (область)', 'title' => 'Відповідач: регіон (область)', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'town_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Відповідач: місто (селище, село), район', 'title' => 'Відповідач: місто (селище, село), район'])->label(false) ?>
        <?= $form->field($model, 'street_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Відповідач: вулиця (пров., просп.)', 'title' => 'Відповідач: вулиця (пров., просп.)'])->label(false) ?>
        <?= $form->field($model, 'house_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Відповідач: номер будинку', 'title' => 'Відповідач: номер будинку'])->label(false) ?>
        <?= $form->field($model, 'apartment_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Відповідач: номер квартири', 'title' => 'Відповідач: номер квартири'])->label(false) ?>
        <?= $form->field($model, 'email_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Відповідач: електронна адреса (e-mail)', 'title' => 'Відповідач: електронна адреса (e-mail)'])->label(false) ?>
        <?= $form->field($model, 'phone_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Відповідач: номер телефону', 'title' => 'Відповідач: номер телефону'])->label(false) ?>
        <?= $form->field($model, 'whom_alimony')->dropDownList(
            ['одна дитина' => 'одна дитина', 'двоє і більше дітей' => 'двоє і більше дітей'],
            ['prompt' => 'Кількість дітей до 3-х років', 'title' => 'Кількість дітей до 3-х років', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'children')->textInput(['class' => 'name entry', 'placeholder' => 'ПІБ, дата народження дитини (дітей)', 'title' => 'ПІБ, дата народження дитини (дітей)'])->label(false) ?>
        <?= $form->field($model, 'date_marriage')->textInput(['class' => 'name entry', 'placeholder' => 'Дата укладання шлюбу дд.мм.рррр', 'title' => 'Дата укладання шлюбу дд.мм.рррр'])->label(false) ?>
        <?= $form->field($model, 'marriage_dissolved')->dropDownList(
            ['припинено' => 'припинено', 'не припинено' => 'не припинено'],
            ['prompt' => 'Чи припинено шлюб з відповідачом?', 'title' => 'Чи припинено шлюб з відповідачом?', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'job_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Відповідач: робота, посада (якщо відомо)', 'title' => 'Відповідач: робота, посада (якщо відомо)'])->label(false) ?>
        <?= $form->field($model, 'have_income_defendant')->dropDownList(
            ['я знаю розмір доходу відповідача' => 'я знаю розмір доходу відповідача', 'розмір доходу відповідача мені не відомо' => 'розмір доходу відповідача мені не відомо'],
            ['prompt' => 'Чи відомо розмір доходу відповідача?', 'title' => 'Чи відомо розмір доходу відповідача?', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'income_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Щомісячний дохід відповідача (якщо відомо)', 'title' => 'Щомісячний дохід відповідача (якщо відомо)'])->label(false); ?>
        <div class="form-group">
            <?= Html::submitButton($content = 'Составить', ['class' => 'btn submit entry', 'name' => 'divorce-button']) ?>
        </div>
        <?php $form = ActiveForm::end() ?>
        <!-- Конец формы сервиса взыскания алиментов -->
    </div>
</div>