<?php

namespace app\models;

use yii\db\ActiveRecord;

class Innovation extends ActiveRecord
{
    public static function tableName()
    {
        return 'innovation';
    }
}
