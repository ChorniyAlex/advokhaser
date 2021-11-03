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

$this->title = 'Заявление алименты | Адвокаты Дашко и Чорнобай | Составление заявления | Северодонецк';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- контент сервиса взыскание алиментов -->
<div class="main-content">
    <div class="content-innovation-servis it">
        <h1>Составление заявления о взыскании алиментов на содержание несовершеннолетнего ребёнка (детей)</h1>
        <div class="title">
            <br>
            <h2>Следуйте нижеуказанным подсказкам и внимательно заполняйте поля на украинском языке, а также скачайте инструкцию, которая откроется в новом окне, после её скачивания ознакомьтесь с ней и перейдите обратно на эту страницу для продолжения</h2>
            <br>
            <!-- <h4>Стоимость - 500 грн, оплата онлайн через банковскую платёжную систему по окончанию составления заявления</h4> -->
            <h4>В настоящее время вы можете воспользоваться этой услугой бесплатно. Начиная с января 2022 г. услуга будет платной.</h4>
        </div>
        <div class="home-ekran-2">
            <div class="container-icon">
                <a href="<?= Url::toRoute(['ru_content/aliment_instruction']) ?>" target="_blank">
                    <div class="icon"><?= Html::img('@web/img/icon-5.svg', ['title' => 'Откроет сгенерированный PDF-файл в новом окне', 'alt' => 'сервис онлайн заявлений']) ?>
                        <p>инструкция<br><span>(бесплатно)<br><span>скачать</span></p>
                    </div>
                </a>
            </div>
        </div>
        <div class="main-content">
            <article>
                <h4>Прежде чем приступать к составлению заявления, вам необходимо собрать следующие документы и информацию:</h4>
                <ul class="spisok">
                    <li>Свой паспорт и идентификационный код</li>
                    <li>Идентификационный код должника алиментов (если известно)</li>
                    <li>Свидетельство о браке (если состоите в браке) или решение суда о расторжении брака (если брак расторгнут)</li>
                    <li>Свидетельство о рождении ребёнка (детей)</li>
                    <li>Справка о составе семьи</li>
                    <li>Справка о ваших доходах (о заработной плате)</li>
                    <li>Сведения о месте работы и размере дохода должника алиментов (если известно)</li>
                    <li>Адрес регистрации должника алиментов</li>
                    <li>Номер телефона и e-mail должника алиментов (если известно)</li>
                </ul>
                <h4>Итак, начинаем (далее всё только на украинском языке!):</h4>
            </article>
        </div>

        <!-- Начало формы сервиса взыскания алиментов -->
        <?php $form = ActiveForm::begin(['id' => 'aliment-form', 'action' => "aliment_claim", 'options' => ['method' => "post", 'class' => 'aliment']]) ?>
        <?php $court_region = Region::find()->select('id, name')->all();
        $listData = ArrayHelper::map($court_region, 'id', 'name');
        $regionData = ArrayHelper::map($court_region, 'name', 'name');
        $url_court = Url::toRoute(['ru_content/court']);
        ?>
        <?= $form->field($model, 'court_region')->dropDownList(
            $listData,
            ['prompt' => 'Оберіть регіон суду', 'class' => 'name entry',  'onchange' => '
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
                ['class' => 'name entry', 'id' => 'court', 'placeholder' => 'Оберіть суд']
            )->label(false);
        ?>
        <?= $form->field($model, 'username')->textInput(['class' => 'name entry', 'placeholder' => 'Ваше прізвище, ім\'я, по батькові'])->label(false) ?>
        <?= $form->field($model, 'date_birth_user')->textInput(['class' => 'name entry', 'placeholder' => 'Дата Вашого народження дд.мм.рррр'])->label(false) ?>
        <?= $form->field($model, 'ident_number_user')->textInput(['class' => 'name entry', 'placeholder' => 'Ваш ідентифікаційний номер'])->label(false) ?>
        <?= $form->field($model, 'postcode_user')->textInput(['class' => 'name entry', 'placeholder' => 'Ваш поштовий індекс'])->label(false) ?>
        <?= $form->field($model, 'region_user')->dropDownList(
            $regionData,
            ['prompt' => 'Ваша область', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'town_user')->textInput(['class' => 'name entry', 'placeholder' => 'Ваше місто (селище, село), район'])->label(false) ?>
        <?= $form->field($model, 'street_user')->textInput(['class' => 'name entry', 'placeholder' => 'Ваша вулиця (пров., просп.)'])->label(false) ?>
        <?= $form->field($model, 'house_user')->textInput(['class' => 'name entry', 'placeholder' => 'Номер Вашого будинку'])->label(false) ?>
        <?= $form->field($model, 'apartment_user')->textInput(['class' => 'name entry', 'placeholder' => 'Номер Вашої квартири'])->label(false) ?>
        <?= $form->field($model, 'email_user')->textInput(['class' => 'name entry', 'placeholder' => 'Ваша електронна адреса: e-mail'])->label(false) ?>
        <?= $form->field($model, 'phone_user')->textInput(['class' => 'name entry', 'placeholder' => 'Номер Вашого телефону'])->label(false) ?>
        <?= $form->field($model, 'defendant_name')->textInput(['class' => 'name entry', 'placeholder' => 'Боржник: прізвище, ім\'я, по батькові'])->label(false) ?>
        <?= $form->field($model, 'date_birth_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Боржник: дата народження дд.мм.рррр'])->label(false) ?>
        <?= $form->field($model, 'ident_number_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Боржник: ідентифікаційний номер'])->label(false) ?>
        <?= $form->field($model, 'postcode_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Боржник: поштовий індекс'])->label(false) ?>
        <?= $form->field($model, 'region_defendant')->dropDownList(
            $regionData,
            ['prompt' => 'Боржник: область', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'town_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Боржник: місто (селище, село), район'])->label(false) ?>
        <?= $form->field($model, 'street_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Боржник: вулиця (пров., просп.)'])->label(false) ?>
        <?= $form->field($model, 'house_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Боржник: номер будинку'])->label(false) ?>
        <?= $form->field($model, 'apartment_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Боржник: номер квартири'])->label(false) ?>
        <?= $form->field($model, 'email_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Боржник: електронна адреса (e-mail)'])->label(false) ?>
        <?= $form->field($model, 'phone_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Боржник: номер телефону'])->label(false) ?>
        <?= $form->field($model, 'whom_alimony')->dropDownList(
            ['на одну дитину' => 'на одну дитину', 'на двох дітей' => 'на двох дітей', 'на трьох і більше дітей' => 'на трьох і більше дітей'],
            ['prompt' => 'Зазначте: на кого аліменти?', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'children')->textInput(['class' => 'name entry', 'placeholder' => 'ПІБ, дата народження дитини (дітей)'])->label(false) ?>
        <?= $form->field($model, 'date_marriage')->textInput(['class' => 'name entry', 'placeholder' => 'Дата укладання шлюбу дд.мм.рррр'])->label(false) ?>
        <?= $form->field($model, 'marriage_dissolved')->dropDownList(
            ['припинено' => 'припинено', 'не припинено' => 'не припинено'],
            ['prompt' => 'Чи припинено шлюб з боржником?', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'do_work_user')->dropDownList(
            ['працюю' => 'працюю', 'не працюю' => 'не працюю', 'не працюю, знаходжусь у відпрустці по догляду за дитиною' => 'не працюю, знаходжусь у відпрустці по догляду за дитиною'],
            ['prompt' => 'Зазначте: чи працюєте Ви?', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'job_user')->textInput(['class' => 'name entry', 'placeholder' => 'Ваше місце роботи (у разі наявності)'])->label(false) ?>
        <?= $form->field($model, 'position_user')->textInput(['class' => 'name entry', 'placeholder' => 'Ваша посада (у разі наявності)'])->label(false) ?>
        <?= $form->field($model, 'have_income_user')->dropDownList(
            ['маю щомісячний дохід' => 'маю щомісячний дохід', 'щомісячного доходу не маю' => 'щомісячного доходу не маю'],
            ['prompt' => 'Чи маєте щомісячний дохід?', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'income_user')->textInput(['class' => 'name entry', 'placeholder' => 'Ваш щомісячний дохід (у разі наявності)'])->label(false) ?>
        <?= $form->field($model, 'job_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Боржник: робота, посада (якщо відомо)'])->label(false) ?>
        <?= $form->field($model, 'have_income_defendant')->dropDownList(
            ['я знаю розмір доходу боржника' => 'я знаю розмір доходу боржника', 'розмір доходу боржника мені не відомо' => 'розмір доходу боржника мені не відомо'],
            ['prompt' => 'Чи відомо розмір доходу боржника?', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'income_defendant')->textInput(['class' => 'name entry', 'placeholder' => 'Щомісячний дохід боржника (якщо відомо)'])->label(false); ?>
        <?= $form->field($model, 'other_children')->dropDownList(
            ['інших дітей на утриманні не має' => 'інших дітей на утриманні не має', 'має на утримуванні іншу дитину (дітей)' => 'має на утримуванні іншу дитину (дітей)', 'мені не відомо' => 'мені не відомо'],
            ['prompt' => 'Чи є на утриманні у боржника інші діти?', 'class' => 'name entry'],
        )->label(false); ?>
        <div class="form-group">
            <?= Html::submitButton($content = 'Составить', ['class' => 'btn submit entry', 'name' => 'divorce-button']) ?>
        </div>
        <?php $form = ActiveForm::end() ?>
        <!-- Конец формы сервиса взыскания алиментов -->
    </div>
</div>