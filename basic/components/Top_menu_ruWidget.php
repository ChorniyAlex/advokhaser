<?php

namespace app\components;

use yii\base\Widget;
use \app\models\Top_menu_ru;

class Top_menu_ruWidget extends Widget
{
    public $data;
    public $tree;


    public function run()
    {
        // $cacheTopMenuRu = \Yii::$app->cache->get('cacheWidget');
        // if (!$cacheTopMenuRu) {
        $this->data = Top_menu_ru::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $cacheTopMenuRu = $this->render('top_menu_ru', ['tree' => $this->tree]);
        // \Yii::$app->cache->set('cacheWidget', $cacheTopMenuRu, 180);
        // }

        return $cacheTopMenuRu;
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
