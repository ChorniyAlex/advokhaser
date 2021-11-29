<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Заповніть форму | Адвокат Дашко і Чорнобай | Зворотній зв’язок | Сєвєродонецьк';
$this->params['breadcrumbs'][] = $this->title;

?>

<!-- контент формы обратной связи -->
<div class="main-content">
    <div class="content-innovation-servis">
        <h1>Заповніть Форму І Отримайте Консультацію Адвоката!</h1>

        <!-- Начало формы обратной связи -->
        <div class="contactBody">
            <div class="wrapper">
                <div class="title">
                    <h2>Зворотній зв’язок</h2>
                </div>
                <?php $form = ActiveForm::begin(['id' => 'zapis_consultation-form',  'options' => ['class' => 'form']]); ?>
                <?= $form->field($model, 'fromName')->textInput(['class' => 'name entry', 'placeholder' => 'Ваше ім’я', 'title' => 'Ваше ім’я'])->label(false) ?>
                <?= $form->field($model, 'subject')->textInput(['class' => 'name entry', 'placeholder' => 'Ваш телефон', 'title' => 'Ваш телефон'])->label(false) ?>
                <?= $form->field($model, 'body')->textarea(['class' => 'message entry', 'placeholder' => 'Ваше питання:', 'title' => 'Ваше питання'])->label(false) ?>
                <div class="form-group">
                    <?= Html::submitButton($content = 'Надіслати', ['class' => 'btn submit entry', 'name' => 'contact-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
                <div class="shadow"></div>
            </div>
        </div>
    </div>
</div>