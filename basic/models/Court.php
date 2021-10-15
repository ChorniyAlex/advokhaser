<?php

namespace app\models;

use yii\db\ActiveRecord;

class Court extends ActiveRecord
{
    public static function tableName()
    {
        return 'court';
    }
}
