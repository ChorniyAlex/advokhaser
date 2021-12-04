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

$this->title = 'Заявление факт смерти | Адвокаты Дашко и Чорнобай | Составление заявления | Северодонецк';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- контент сервиса установление факта смерти -->
<div class="main-content">
    <div class="content-innovation-servis it">
        <h1>Составление заявления об установлении факта смерти на неподконтрольной власти Украины территории</h1>
        <div class="title">
            <br>
            <h2>Следуйте нижеуказанным подсказкам и внимательно заполняйте поля на украинском языке, а также скачайте инструкцию (откроется в новом окне) и перейдите обратно на эту страницу для продолжения</h2>
            <br>
            <!-- <h4>Стоимость - 500 грн, оплата онлайн через банковскую платёжную систему по окончанию составления заявления</h4> -->
            <h4>В настоящее время вы можете воспользоваться этой услугой бесплатно. Начиная с января 2022 г. эта услуга будет платной</h4>
        </div>
        <div class="home-ekran-2">
            <div class="container-icon">
                <a href="<?= Url::toRoute(['ru_content/fact_death_instruction']) ?>" target="_blank">
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
                    <li>Справка о составе своей семьи или Справка о взятии на учёт внутренне перемещённого лица (если Вы являетесь внутренне перемещённым лицом)</li>
                    <li>Своё свидетельство о рождении и другие документы, которые подтверждают родство с умершим лицом</li>
                    <li>Паспорт (или копия) умершего лица</li>
                    <li>Врачебное свидетельство о смерти и другие имеющиеся документы, которые подтверждают факт смерти и захоронения умершего лица</li>
                    <li>Отказ органа РАГС о регистрации факта смерти и выдачи свидетельства о смерти</li>
                </ul>
                <h4>Итак, начинаем (далее всё только на украинском языке):</h4>
            </article>
        </div>

        <!-- Начало формы сервиса установление факта смерти -->
        <?php $form = ActiveForm::begin(['id' => 'fact_death-form', 'action' => "fact_death_claim", 'options' => ['method' => "post", 'class' => 'fact_death']]) ?>
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
        <?= $form->field($model, 'interested_person_name')->textInput(['class' => 'name entry', 'placeholder' => 'Орган РАЦС: повна назва', 'title' => 'Орган РАЦС: повна назва'])->label(false) ?>
        <?= $form->field($model, 'code_interested_person')->textInput(['class' => 'name entry', 'placeholder' => 'Орган РАЦС: код ЄДРПОУ', 'title' => 'Орган РАЦС: код ЄДРПОУ'])->label(false) ?>
        <?= $form->field($model, 'postcode_interested_person')->textInput(['class' => 'name entry', 'placeholder' => 'Орган РАЦС: поштовий індекс', 'title' => 'Орган РАЦС: поштовий індекс'])->label(false) ?>
        <?= $form->field($model, 'region_interested_person')->dropDownList(
            $regionData,
            ['prompt' => 'Орган РАЦС: регіон (область)', 'title' => 'Орган РАЦС: регіон (область)', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'town_interested_person')->textInput(['class' => 'name entry', 'placeholder' => 'Орган РАЦС: місто (селище, село), район', 'title' => 'Орган РАЦС: місто (селище, село), район'])->label(false) ?>
        <?= $form->field($model, 'street_interested_person')->textInput(['class' => 'name entry', 'placeholder' => 'Орган РАЦС: вулиця (пров., просп.)', 'title' => 'Орган РАЦС: вулиця (пров., просп.)'])->label(false) ?>
        <?= $form->field($model, 'house_interested_person')->textInput(['class' => 'name entry', 'placeholder' => 'Орган РАЦС: номер будинку', 'title' => 'Орган РАЦС: номер будинку'])->label(false) ?>
        <?= $form->field($model, 'email_interested_person')->textInput(['class' => 'name entry', 'placeholder' => 'Орган РАЦС: електронна адреса (e-mail)', 'title' => 'Орган РАЦС: електронна адреса (e-mail)'])->label(false) ?>
        <?= $form->field($model, 'phone_interested_person')->textInput(['class' => 'name entry', 'placeholder' => 'Орган РАЦС: номер телефону', 'title' => 'Орган РАЦС: номер телефону'])->label(false) ?>
        <?= $form->field($model, 'who_deceased')->dropDownList(
            ['помер мій батько' => 'помер мій батько', 'померла моя мати' => 'померла моя мати', 'помер мій дід' => 'помер мій дід', 'померла моя бабця' => 'померла моя бабця', 'помер мій чоловік' => 'помер мій чоловік', 'померла моя дружина' => 'померла моя дружина', 'помер мій син' => 'помер мій син', 'померла моя дочка' => 'померла моя дочка', 'помер мій брат' => 'помер мій брат', 'померла моя сестра' => 'померла моя сестра', 'помер мій дядько' => 'помер мій дядько', 'померла моя тітка' => 'померла моя тітка', 'помер мій племінник' => 'помер мій племінник', 'померла моя племінниця' => 'померла моя племінниця'],
            ['prompt' => 'Зазначте: хто для вас померла особа?', 'title' => 'Зазначте: хто для вас померла особа?', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'deceasedname')->textInput(['class' => 'name entry', 'placeholder' => 'Померла особа: прізвище, ім\'я, по батькові', 'title' => 'Померла особа: прізвище, ім\'я, по батькові'])->label(false) ?>
        <?= $form->field($model, 'date_birth_deceased')->textInput(['class' => 'name entry', 'placeholder' => 'Дата народження померлого(ї) дд.мм.рррр', 'title' => 'Дата народження померлої особи дд.мм.рррр'])->label(false) ?>
        <?= $form->field($model, 'region_birth_deceased')->textInput(['class' => 'name entry', 'placeholder' => 'Місце народження померлого(ї) (регіон)', 'title' => 'Місце народження померлого(ї) (Країна, регіон, область)'])->label(false) ?>
        <?= $form->field($model, 'town_birth_deceased')->textInput(['class' => 'name entry', 'placeholder' => 'Місто (село), р-н народження померлого(ї)', 'title' => 'Місто (село), район народження померлої особи'])->label(false) ?>
        <?= $form->field($model, 'date_death')->textInput(['class' => 'name entry', 'placeholder' => 'Дата смерті дд.мм.рррр', 'title' => 'Дата смерті дд.мм.рррр'])->label(false) ?>
        <?= $form->field($model, 'age_deceased')->textInput(['class' => 'name entry', 'placeholder' => 'Кількість повних років померлій особі', 'title' => 'Кількість повних років померлій особі'])->label(false) ?>
        <?= $form->field($model, 'cause_death')->textInput(['class' => 'name entry', 'placeholder' => 'Причина смерті (з лікарського свідоцтва)', 'title' => 'Причина смерті (з лікарського свідоцтва)'])->label(false) ?>
        <?= $form->field($model, 'region_registration_deceased')->dropDownList(
            $regionData,
            ['prompt' => 'Місце реєстрації померлого(ї) (регіон)', 'title' => 'Регіон де зареєстрована померла особа', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'town_registration_deceased')->textInput(['class' => 'name entry', 'placeholder' => 'Місто (село), район реєстрації померлого(ї)', 'title' => 'Місто (село), район реєстрації померлого(ї)'])->label(false) ?>
        <?= $form->field($model, 'street_registration_deceased')->textInput(['class' => 'name entry', 'placeholder' => 'Вулиця (пров.) реєстрації померлого(ї)', 'title' => 'Вулиця (пров., просп.) реєстрації померлого(ї)'])->label(false) ?>
        <?= $form->field($model, 'house_registration_deceased')->textInput(['class' => 'name entry', 'placeholder' => 'Номер будинку реєстрації померлого(ї)', 'title' => 'Номер будинку реєстрації померлого(ї)'])->label(false) ?>
        <?= $form->field($model, 'apartment_registration_deceased')->textInput(['class' => 'name entry', 'placeholder' => 'Номер квартири реєстрації померлого(ї)', 'title' => 'Номер квартири реєстрації померлого(ї)'])->label(false) ?>
        <?= $form->field($model, 'region_deceased')->dropDownList(
            $regionData,
            ['prompt' => 'Місце смерті померлого(ї) (регіон)', 'title' => 'Місце смерті померлого(ї) (регіон)', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'town_deceased')->textInput(['class' => 'name entry', 'placeholder' => 'Місце смерті померлого(ї): місто, район', 'title' => 'Місце смерті померлого(ї): місто (село, селище), район'])->label(false) ?>
        <?= $form->field($model, 'region_burial')->dropDownList(
            $regionData,
            ['prompt' => 'Регіон поховання померлої особи', 'title' => 'Регіон поховання померлої особи', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'town_burial')->textInput(['class' => 'name entry', 'placeholder' => 'Місто (село), район поховання померлого(ї)', 'title' => 'Місто (село), район поховання померлого(ї)'])->label(false) ?>
        <div class="form-group">
            <?= Html::submitButton($content = 'Составить', ['class' => 'btn submit entry', 'name' => 'divorce-button']) ?>
        </div>
        <?php $form = ActiveForm::end() ?>
    </div>
</div>