<?php

namespace app\models;

use yii\db\ActiveRecord;

class Hamburger_menu extends ActiveRecord
{
    public static function tableName()
    {
        return 'hamburger_menu';
    }
}
