<?php

namespace app\components;

use yii\base\Widget;
use \app\models\Lang_mobil;

class Lang_mobilWidget extends Widget
{
    public $data;

    public function run()
    {
        $this->data = Lang_mobil::find()->all();
        $cacheLangMobil = $this->render('lang_mobil', ['data' => $this->data]);
        return $cacheLangMobil;
    }
}
