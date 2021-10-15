<?php

namespace app\models;

use yii\base\Model;
use yii\helpers\Html;

class DivorceForm extends Model
{
    public $court_region;
    public $court;
    public $username;
    public $date_birth_user;
    public $ident_number_user;
    public $postcode_user;
    public $region_user;
    public $town_user;
    public $street_user;
    public $house_user;
    public $apartment_user;
    public $email_user;
    public $phone_user;
    public $defendant_name;
    public $date_birth_defendant;
    public $ident_number_defendant;
    public $postcode_defendant;
    public $region_defendant;
    public $town_defendant;
    public $street_defendant;
    public $house_defendant;
    public $apartment_defendant;
    public $email_defendant;
    public $phone_defendant;
    public $date_marriage;
    public $marriage_registration;
    public $marriage_number;
    public $date_termin_marriage;
    public $number_children;
    public $children;
    public $residence_child;
    public $reason_divorce;
    public $reason_divorce1;
    public $reason_divorce2;
    public $reason_divorce3;
    public $user_reason_divorce;

    public function rules()
    {
        return [
            [['court_region', 'court', 'region_user', 'region_defendant', 'reason_divorce', 'reason_divorce1', 'reason_divorce2', 'reason_divorce3'], 'safe'],
            [['ident_number_user', 'postcode_user', 'ident_number_defendant', 'postcode_defendant', 'apartment_user', 'apartment_defendant'], 'integer', 'message' => 'тут можуть бути лише цифри'],
            [['court_region', 'court', 'username', 'date_birth_user', 'ident_number_user', 'postcode_user', 'region_user', 'town_user', 'street_user', 'house_user', 'email_user', 'phone_user', 'defendant_name', 'date_birth_defendant', 'postcode_defendant', 'region_defendant', 'town_defendant', 'street_defendant', 'house_defendant', 'date_marriage', 'marriage_registration', 'marriage_number', 'date_termin_marriage', 'number_children', 'children', 'residence_child', 'reason_divorce'], 'required', 'message' => 'будь ласка заповніть це поле'],
            [['username', 'defendant_name'], 'string', 'length' => [5, 60]],
            [['town_user', 'street_user', 'phone_user', 'town_defendant', 'street_defendant', 'phone_defendant', 'marriage_registration', 'number_children', 'children', 'residence_child', 'user_reason_divorce'], 'string'],
            ['ident_number_defendant', 'default', 'value' => 'не відомо'],
            ['phone_defendant', 'default', 'value' => 'не відомо'],
            [['email_user', 'email_defendant'], 'email', 'message' => 'зазначте коректну адресу e-mail'],
        ];
    }
}
