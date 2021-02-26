<?php

namespace app\components;

use yii\base\Widget;
use \app\models\Hamburger_menu_ru;

class Hamburger_menu_ruWidget extends Widget
{
    public $data;

    public function run()
    {
        // $cacheHamburgerMenuRu = \Yii::$app->cache->get('cachehamburgermenuru');
        // if (!$cacheHamburgerMenuRu) {
        $this->data = Hamburger_menu_ru::find()->all();
        $cacheHamburgerMenuRu = $this->render('hamburger_menu_ru', ['data' => $this->data]);
        // \Yii::$app->cache->set('cachehamburgermenuru', $cacheHamburgerMenuRu, 180);
        // }

        return $cacheHamburgerMenuRu;
    }
}
