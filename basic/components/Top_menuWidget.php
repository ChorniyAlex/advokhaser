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
        $cacheTopMenu = \Yii::$app->cache->get('cacheWidget');
        if (!$cacheTopMenu) {
            $this->data = Top_menu::find()->indexBy('id')->asArray()->all();
            $this->tree = $this->getTree();
            $cacheTopMenu = $this->render('top_menu', ['tree' => $this->tree]);
            \Yii::$app->cache->set('cacheWidget', $cacheTopMenu, 1800);
        }

        return $cacheTopMenu;
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
