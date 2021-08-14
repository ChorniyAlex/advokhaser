<?php

namespace app\components;

use yii\base\Widget;
use \app\models\Hamburger_menu;

class Hamburger_menuWidget extends Widget
{
    public $data;

    public function run()
    {
        $this->data = Hamburger_menu::find()->all();
        $cacheHamburgerMenu = $this->render('hamburger_menu', ['data' => $this->data]);
        return $cacheHamburgerMenu;
    }
}
