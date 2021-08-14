<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

class Zapis_consultationForm extends Model
{
    public $fromEmail = 'dashko@advokhaser.online';
    public $fromName;
    public $toEmail = 'ur_dashko@ukr.net';
    public $subject;
    public $body;

    public function rules()
    {
        $current_url = Url::current();
        if (str_contains($current_url, 'ru_content')) {
            return [
                ['fromName', 'required', 'message' => 'пожалуйста укажите ваше имя'],
                ['subject', 'required', 'message' => 'пожалуйста укажите ваш телефон'],
                ['body', 'required', 'message' => 'пожалуйста укажите ваш вопрос'],
                [['fromEmail', 'fromName', 'toEmail', 'subject', 'body'], 'required'],
                ['fromEmail', 'email'],
                ['toEmail', 'email'],
            ];
        } else return [
            ['fromName', 'required', 'message' => 'будь ласка зазначте ваше ім’я'],
            ['subject', 'required', 'message' => 'будь ласка зазначте ваш телефон'],
            ['body', 'required', 'message' => 'будь ласка зазначте ваше питання'],
            [['fromEmail', 'fromName', 'toEmail', 'subject', 'body'], 'required'],
            ['fromEmail', 'email'],
            ['toEmail', 'email'],
        ];
    }

    public function sendEmail()
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo([$this->toEmail, 'chornobay@ukr.net'])
                ->setFrom([$this->fromEmail => $this->fromName])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();
            return true;
        }
        return false;
    }
}
