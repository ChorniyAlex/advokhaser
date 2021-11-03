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

$this->title = 'Заява аліменти | Адвокати Дашко і Чорнобай | Складання заяв | Сєвєродонецьк';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- контент сервиса взыскание алиментов -->
<div class="main-content">
    <div class="content-innovation-servis it">
        <h1>Складання заяви про стягнення аліментів на утримання неповнолітньої дитини (дітей)</h1>
        <div class="title">
            <br>
            <h2>Дійте згідно нижче розміщеним підказкам і уважно заповнюйте поля українською мовою, а також завантажте інструкцію, яка відкриється в новому вікні, після її завантаження ознайомтесь з нею і перейдіть назад на цю сторінку для продовження</h2>
            <br>
            <!-- <h4>Вартість - 500 грн, оплата онлайн через банківську платіжну систему по закінченню складання заяви</h4> -->
            <h4>В теперішній час ви можете скористуватися цією послугою безкоштовно. Починаючи з січня 2022 р. послуга буде платною.</h4>
        </div>
        <div class="home-ekran-2">
            <div class="container-icon">
                <a href="<?= Url::toRoute(['ua_content/aliment_instruction']) ?>" target="_blank">
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
                    <li>Ідентифікаційний код боржника аліментів (якщо відомо)</li>
                    <li>Свідоцтво про шлюб (якщо перебували у шлюбі) або рішення суду про розірвання шлюбу (якщо шлюб розірваний)</li>
                    <li>Свідоцтво про народження дитини (дітей)</li>
                    <li>Довідка про склад сім’ї</li>
                    <li>Довідка про ваш дохід (про зарабітну плату)</li>
                    <li>Відомості про місце роботи і розмір доходу боржника аліментів (якщо відомо)</li>
                    <li>Адреса реєстрації боржника аліментів</li>
                    <li>Номер телефону і e-mail боржника аліментів (якщо відомо)</li>
                </ul>
                <h4>Тож, починаємо:</h4>
            </article>
        </div>

        <!-- Начало формы сервиса взыскание алиментов -->
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
            <?= Html::submitButton($content = 'Скласти', ['class' => 'btn submit entry', 'name' => 'divorce-button']) ?>
        </div>
        <?php $form = ActiveForm::end() ?>
        <!-- Конец формы сервиса взыскание алиментов -->
    </div>
</div>