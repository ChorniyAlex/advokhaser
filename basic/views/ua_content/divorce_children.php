<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\MailerForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Region;

$this->title = 'Заява розірвання шлюбу | Адвокати Дашко і Чорнобай | Складання заяв | Сєвєродонецьк';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- контент сервиса расторжение брака -->
<div class="main-content">
    <div class="content-innovation-servis it">
        <h1>Складання позовної заяви про розірвання шлюбу<br>(у разі наявності від шлюбу неповнолітніх дітей)</h1>
        <div class="title">
            <br>
            <h2>Дійте згідно нижче розміщеним підказкам і уважно заповнюйте поля українською мовою, а також завантажте інструкцію, яка відкриється в новому вікні, після її завантаження ознайомтеся із нею і перейдіть назад на цю сторінку для продовження</h2>
            <br>
            <!-- <h4>Вартість - 500 грн, оплата онлайн через банківську платіжну систему по закінченню складання заяви</h4> -->
            <h4>На даний час ви можете скористуватися цією послугою безкоштовно. Починаючи з січня 2022 р. ця послуга буде платною</h4>
        </div>
        <div class="home-ekran-2">
            <div class="container-icon">
                <a href="<?= Url::toRoute(['ua_content/divorce_children_instruction']) ?>" target="_blank">
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
                    <li>Свій паспорт та ідентифікаційний код</li>
                    <li>Свідоцтво про шлюб</li>
                    <li>Свідоцтво про народження дитини (дітей)</li>
                    <li>Довідка про склад сім’ї</li>
                    <li>Ідентифікаційний код відповідача (якщо відомо)</li>
                    <li>Адреса реєстрації відповідача (чоловіка, дружини)</li>
                    <li>Номер телефону і e-mail відповідача (чоловіка, дружини) (якщо відомо)</li>
                </ul>
                <h4>Тож, починаємо:</h4>
            </article>
        </div>

        <!-- Начало формы сервиса расторжение брака -->
        <?php $form = ActiveForm::begin(['id' => 'divorce-form', 'action' => "divorce_children_claim", 'options' => ['method' => "post", 'class' => 'divorce']]) ?>
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
                ['prompt' => 'Оберіть суд, до якого подається позов'],
                ['class' => 'name entry', 'id' => 'court', 'placeholder' => 'Оберіть суд', 'title' => 'Оберіть суд, до якого подається позов']
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
        <?= $form->field($model, 'date_marriage')->textInput(['class' => 'name entry', 'placeholder' => 'Дата реєстрації шлюбу дд.мм.рррр', 'title' => 'Дата реєстрації шлюбу дд.мм.рррр'])->label(false) ?>
        <?= $form->field($model, 'marriage_registration')->textInput(['class' => 'name entry', 'placeholder' => 'Назва органу реєстрації шлюбу', 'title' => 'Назва органу реєстрації шлюбу'])->label(false) ?>
        <?= $form->field($model, 'marriage_number')->textInput(['class' => 'name entry', 'placeholder' => 'Номер актового запису реєстрації шлюбу', 'title' => 'Номер актового запису реєстрації шлюбу'])->label(false) ?>
        <?= $form->field($model, 'date_termin_marriage')->textInput(['class' => 'name entry', 'placeholder' => 'Припинення шлюбних відносин (місяць і рік)', 'title' => 'Припинення шлюбних відносин (місяць і рік)'])->label(false) ?>
        <?= $form->field($model, 'number_children')->dropDownList(
            ['Від шлюбу маємо неповнолітню дитину' => 'Від шлюбу маємо неповнолітню дитину', 'Від шлюбу маємо неповнолітніх дітей' => 'Від шлюбу маємо неповнолітніх дітей'],
            ['prompt' => 'Оберіть кількість неповнолітніх дітей', 'title' => 'Оберіть кількість неповнолітніх дітей', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'children')->textInput(['class' => 'name entry', 'placeholder' => 'ПІБ, дата народження дитини (дітей)', 'title' => 'ПІБ, дата народження дитини (дітей)'])->label(false) ?>
        <?= $form->field($model, 'residence_child')->dropDownList(
            ['зі мною' => 'зі мною', 'з відповідачем' => 'з відповідачем'],
            ['prompt' => 'З ким проживає дитина (діти)', 'title' => 'З ким проживає дитина (діти)', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'reason_divorce')->dropDownList(
            ['розбіжності характерів та втрати почуття любові і поваги один до одного' => 'розбіжності характерів та втрати почуття любові і поваги один до одного', 'застосування насильства в сім’ї' => 'застосування насильства в сім’ї', 'нехтування відповідачем своїми сімейними обов’язками' => 'нехтування відповідачем своїми сімейними обов’язками', 'подружня зрада' => 'подружня зрада'],
            ['prompt' => 'Основна причина розірвання шлюбу', 'title' => 'Основна причина розірвання шлюбу', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'reason_divorce1')->dropDownList(
            ['розбіжності характерів та втрати почуття любові і поваги один до одного' => 'розбіжності характерів та втрати почуття любові і поваги один до одного', 'застосування насильства в сім’ї' => 'застосування насильства в сім’ї', 'нехтування відповідачем своїми сімейними обов’язками' => 'нехтування відповідачем своїми сімейними обов’язками', 'подружня зрада' => 'подружня зрада'],
            ['prompt' => 'Додаткова причина-1 (у разі наявності)', 'title' => 'Додаткова причина-1 (у разі наявності)', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'reason_divorce2')->dropDownList(
            ['розбіжності характерів та втрати почуття любові і поваги один до одного' => 'розбіжності характерів та втрати почуття любові і поваги один до одного', 'застосування насильства в сім’ї' => 'застосування насильства в сім’ї', 'нехтування відповідачем своїми сімейними обов’язками' => 'нехтування відповідачем своїми сімейними обов’язками', 'подружня зрада' => 'подружня зрада'],
            ['prompt' => 'Додаткова причина-2 (у разі наявності)', 'title' => 'Додаткова причина-2 (у разі наявності)', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'reason_divorce3')->dropDownList(
            ['розбіжності характерів та втрати почуття любові і поваги один до одного' => 'розбіжності характерів та втрати почуття любові і поваги один до одного', 'застосування насильства в сім’ї' => 'застосування насильства в сім’ї', 'нехтування відповідачем своїми сімейними обов’язками' => 'нехтування відповідачем своїми сімейними обов’язками', 'подружня зрада' => 'подружня зрада'],
            ['prompt' => 'Додаткова причина-3 (у разі наявності)', 'title' => 'Додаткова причина-3 (у разі наявності)', 'class' => 'name entry'],
        )->label(false); ?>
        <?= $form->field($model, 'user_reason_divorce')->textInput(['class' => 'name entry', 'placeholder' => 'Зазначте свою причину (у разі наявності)', 'title' => 'Зазначте свою причину (у разі наявності)'])->label(false) ?>
        <div class="form-group">
            <?= Html::submitButton($content = 'Составить', ['class' => 'btn submit entry', 'name' => 'divorce-button']) ?>
        </div>
        <?php $form = ActiveForm::end() ?>
        <!-- Конец формы сервиса расторжение брака -->
    </div>
</div>