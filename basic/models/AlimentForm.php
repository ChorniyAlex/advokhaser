<?php

namespace app\models;

use yii\base\Model;
use yii\helpers\Html;

class AlimentForm extends Model
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
    public $whom_alimony;
    public $date_marriage;
    public $marriage_dissolved;
    public $children;
    public $do_work_user;
    public $job_user;
    public $position_user;
    public $have_income_user;
    public $income_user;
    public $job_defendant;
    public $have_income_defendant;
    public $income_defendant;
    public $other_children;

    public function rules()
    {
        return [
            [['court_region', 'court', 'region_user', 'region_defendant', 'whom_alimony', 'marriage_dissolved', 'do_work_user', 'have_income_user', 'have_income_defendant', 'other_children'], 'safe'],
            [['ident_number_user', 'postcode_user', 'ident_number_defendant', 'postcode_defendant', 'apartment_user', 'apartment_defendant'], 'integer', 'message' => 'тут можуть бути лише цифри'],
            [['income_user', 'income_defendant'], 'double', 'message' => 'тут можуть бути лише цифри і крапка, без коми. Наприклад: 999.50'],
            [['court_region', 'court', 'username', 'date_birth_user', 'ident_number_user', 'postcode_user', 'region_user', 'town_user', 'street_user', 'house_user', 'email_user', 'phone_user', 'defendant_name', 'date_birth_defendant', 'postcode_defendant', 'region_defendant', 'town_defendant', 'street_defendant', 'house_defendant', 'whom_alimony', 'date_marriage', 'marriage_dissolved', 'children', 'do_work_user', 'have_income_user', 'have_income_defendant', 'other_children'], 'required', 'message' => 'будь ласка заповніть це поле'],
            [['username', 'defendant_name'], 'string', 'length' => [5, 60]],
            [['town_user', 'street_user', 'phone_user', 'town_defendant', 'street_defendant', 'phone_defendant', 'children', 'job_user', 'position_user', 'job_defendant'], 'string'],
            [['ident_number_defendant', 'phone_defendant', 'job_defendant'], 'default', 'value' => 'не відомо'],
            [['email_user', 'email_defendant'], 'email', 'message' => 'зазначте коректну адресу e-mail'],
        ];
    }
}
