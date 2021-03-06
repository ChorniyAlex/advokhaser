<?php

namespace app\components;

use yii\base\Widget;
use \app\models\Hamburger_menu;

class Hamburger_menuWidget extends Widget
{
    public $data;

    public function run()
    {
        $cacheHamburgerMenu = \Yii::$app->cache->get('cachehamburgermenu');
        if (!$cacheHamburgerMenu) {
            $this->data = Hamburger_menu::find()->all();
            $cacheHamburgerMenu = $this->render('hamburger_menu', ['data' => $this->data]);
            \Yii::$app->cache->set('cachehamburgermenu', $cacheHamburgerMenu, 1800);
        }

        return $cacheHamburgerMenu;
    }
}
