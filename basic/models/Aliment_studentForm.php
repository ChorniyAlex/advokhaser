<?php

namespace app\models;

use yii\base\Model;
use yii\helpers\Html;

class Aliment_studentForm extends Model
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
    public $third_person_name;
    public $date_birth_third_person;
    public $ident_number_third_person;
    public $postcode_third_person;
    public $region_third_person;
    public $town_third_person;
    public $street_third_person;
    public $house_third_person;
    public $apartment_third_person;
    public $email_third_person;
    public $phone_third_person;
    public $whom_alimony;
    public $training_start;
    public $educational_institution;
    public $name_specialty;
    public $what_course;
    public $form_education;
    public $receiving_scholarship;
    public $scholarship_amount;
    public $training_finish;
    public $continue_studies;
    public $do_work_defendant;
    public $where_defendant_works;
    public $job_defendant;
    public $have_income_defendant;
    public $income_defendant;

    public function rules()
    {
        return [
            [['court_region', 'court', 'region_user', 'region_defendant', 'region_third_person', 'whom_alimony', 'what_course', 'form_education', 'receiving_scholarship', 'continue_studies', 'do_work_defendant', 'where_defendant_works', 'have_income_defendant'], 'safe'],
            [['ident_number_user', 'postcode_user', 'ident_number_defendant', 'postcode_defendant', 'ident_number_third_person', 'postcode_third_person', 'apartment_user', 'apartment_defendant', 'apartment_third_person'], 'integer', 'message' => 'тут можуть бути лише цифри'],
            [['income_defendant', 'scholarship_amount'], 'double', 'message' => 'тут можуть бути лише цифри і крапка, без коми. Наприклад: 999.50'],
            [['court_region', 'court', 'username', 'date_birth_user', 'ident_number_user', 'postcode_user', 'region_user', 'town_user', 'street_user', 'house_user', 'email_user', 'phone_user', 'defendant_name', 'date_birth_defendant', 'postcode_defendant', 'region_defendant', 'town_defendant', 'street_defendant', 'house_defendant', 'third_person_name', 'date_birth_third_person', 'town_third_person', 'street_third_person', 'house_third_person', 'whom_alimony', 'training_start', 'educational_institution', 'name_specialty', 'what_course', 'form_education', 'receiving_scholarship', 'training_finish', 'continue_studies', 'do_work_defendant', 'where_defendant_works', 'have_income_defendant'], 'required', 'message' => 'будь ласка заповніть це поле'],
            [['username', 'defendant_name', 'third_person_name'], 'string', 'length' => [4, 60], 'message' => 'будь ласка зазначте повністю прізвище, ім\'я, по батькові'],
            [['town_user', 'street_user', 'phone_user', 'town_defendant', 'street_defendant', 'phone_defendant', 'town_third_person', 'street_third_person', 'phone_third_person', 'educational_institution', 'training_start', 'name_specialty', 'training_finish', 'job_defendant'], 'string'],
            [['ident_number_defendant', 'phone_defendant', 'job_defendant', 'ident_number_third_person', 'phone_third_person'], 'default', 'value' => 'не відомо'],
            [['email_user', 'email_defendant', 'email_third_person'], 'email', 'message' => 'зазначте коректну адресу e-mail'],
        ];
    }
}
