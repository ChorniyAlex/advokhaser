<?php

namespace app\components;

use yii\base\Widget;
use \app\models\Top_menu;

class Top_menuWidget extends Widget
{
    public $data;
    public $tree;


    public function run()
    {
        $this->data = Top_menu::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $topMenu = $this->render('top_menu', ['tree' => $this->tree]);
        return $topMenu;
    }

    public function getTree()
    {
        $tree = [];
        foreach ($this->data as $id => &$node) {
            if (!$node['parent_id'])
                $tree[$id] = &$node;
            else $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
        }
        return $tree;
    }
}
