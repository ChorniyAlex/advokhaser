<?php

namespace app\components;

use yii\base\Widget;
use \app\models\Lang_header;

class Lang_headerWidget extends Widget
{
    public $data;

    public function run()
    {
        $this->data = Lang_header::find()->all();
        $cacheLangHeader = $this->render('lang_header', ['data' => $this->data]);
        return $cacheLangHeader;
    }
}
