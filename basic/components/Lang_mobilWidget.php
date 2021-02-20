<?php

namespace app\components;

use yii\base\Widget;
use \app\models\Lang_mobil;

class Lang_mobilWidget extends Widget
{
    public $data;

    public function run()
    {
        $cacheLangMobil = \Yii::$app->cache->get('cachelangmobilWidget');
        if (!$cacheLangMobil) {
            $this->data = Lang_mobil::find()->all();
            $cacheLangMobil = $this->render('lang_mobil', ['data' => $this->data]);
            \Yii::$app->cache->set('cachelangmobilWidget', $cacheLangMobil, 18000);
        }

        return $cacheLangMobil;
    }
}
