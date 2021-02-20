<?php

namespace app\models;

use yii\db\ActiveRecord;

class Lang_header extends ActiveRecord
{
    public static function tableName()
    {
        return 'lang_header';
    }
}