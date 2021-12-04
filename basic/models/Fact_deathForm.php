<?php

namespace app\models;

use yii\base\Model;
use yii\helpers\Html;

class Fact_deathForm extends Model
{
    public $court_region;
    public $court;
    public $username;
    public $ident_number_user;
    public $postcode_user;
    public $region_user;
    public $town_user;
    public $street_user;
    public $house_user;
    public $apartment_user;
    public $email_user;
    public $phone_user;
    public $interested_person_name;
    public $code_interested_person;
    public $postcode_interested_person;
    public $region_interested_person;
    public $town_interested_person;
    public $street_interested_person;
    public $house_interested_person;
    public $email_interested_person;
    public $phone_interested_person;
    public $who_deceased;
    public $deceasedname;
    public $date_birth_deceased;
    public $region_birth_deceased;
    public $town_birth_deceased;
    public $date_death;
    public $age_deceased;
    public $cause_death;
    public $region_registration_deceased;
    public $town_registration_deceased;
    public $street_registration_deceased;
    public $house_registration_deceased;
    public $apartment_registration_deceased;
    public $region_deceased;
    public $town_deceased;
    public $region_burial;
    public $town_burial;

    public function rules()
    {
        return [
            [['court_region', 'court', 'region_user', 'region_interested_person', 'who_deceased', 'region_registration_deceased', 'region_deceased', 'region_burial'], 'safe'],
            [['ident_number_user', 'postcode_user', 'code_interested_person', 'postcode_interested_person', 'apartment_user', 'apartment_registration_deceased', 'age_deceased'], 'integer', 'message' => 'тут можуть бути лише цифри'],
            [['court_region', 'court', 'username', 'ident_number_user', 'postcode_user', 'region_user', 'town_user', 'street_user', 'house_user', 'email_user', 'phone_user', 'interested_person_name', 'postcode_interested_person', 'region_interested_person', 'town_interested_person', 'street_interested_person', 'house_interested_person', 'who_deceased', 'deceasedname', 'date_birth_deceased', 'region_birth_deceased', 'town_birth_deceased', 'date_death', 'age_deceased', 'cause_death', 'region_registration_deceased', 'region_deceased', 'town_registration_deceased', 'town_deceased', 'street_registration_deceased', 'house_registration_deceased', 'region_burial', 'town_burial'], 'required', 'message' => 'будь ласка заповніть це поле'],
            [['username', 'interested_person_name', 'deceasedname'], 'string', 'length' => [5, 190]],
            [['town_user', 'street_user', 'phone_user', 'town_interested_person', 'street_interested_person', 'phone_interested_person', 'region_birth_deceased', 'town_birth_deceased', 'cause_death', 'town_registration_deceased', 'town_deceased', 'street_registration_deceased', 'town_burial'], 'string'],
            [['code_interested_person', 'phone_interested_person'], 'default', 'value' => 'не відомо'],
            [['email_user', 'email_interested_person'], 'email', 'message' => 'зазначте коректну адресу e-mail'],
        ];
    }
}
