<?php

namespace app\controllers;

use yii\web\Controller;
use \app\models\Top_menu_ru;
use app\models\Ua_content;

class Ua_contentController extends Controller
{

    public function actionIndex()
    {
        $title = \Yii::$app->request->get('title');
        $title = top_menu_ru::findOne('title');
        $this->view->title = $title;
        $this->view->title = 'Адвокати Дашко і Ко. | Сєвєродонецьк | Правова допомога, юридичні послуги';

        return $this->render('index');
    }

    public function actionO_nas()
    {
        $this->view->title = 'Про нас | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('o_nas');
    }

    public function actionLawyer_consultation()
    {
        $this->view->title = 'Юридичні консультації | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('lawyer_consultation');
    }

    public function actionInnovation()
    {
        $this->view->title = 'Інноваційний IT-сервіс online | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('innovation');
    }

    public function actionSostavlenye_document()
    {
        $this->view->title = 'Складання документів | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('sostavlenye_document');
    }

    public function actionZaschita_predstavitelstvo()
    {
        $this->view->title = 'Представництво в суді | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('zaschita_predstavitelstvo');
    }

    public function actionPomosch_dtp()
    {
        $this->view->title = 'Допомога по ДТП | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('pomosch_dtp');
    }

    public function actionZaschita_po_ugolovnim()
    {
        $this->view->title = 'Захист по кримінальним справам | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('zaschita_po_ugolovnim');
    }

    public function actionSemeynoye_pravo()
    {
        $this->view->title = 'Сімейне право | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('semeynoye_pravo');
    }

    public function actionNasledstvo_pravo()
    {
        $this->view->title = 'Спадкове право | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('nasledstvo_pravo');
    }

    public function actionZhilishnoye_pravo()
    {
        $this->view->title = 'Житлові спори | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('zhilishnoye_pravo');
    }

    public function actionTrud_spor()
    {
        $this->view->title = 'Трудові спори | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('trud_spor');
    }

    public function actionNedvizhimost()
    {
        $this->view->title = 'Пенсійні спори | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('nedvizhimost');
    }

    public function actionZemelnoye_pravo()
    {
        $this->view->title = 'Земельні спори | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('zemelnoye_pravo');
    }

    public function actionZaschita_sobstvenosti()
    {
        $this->view->title = 'Захист права власності | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('zaschita_sobstvenosti');
    }

    public function actionUgolovnoe_pravo()
    {
        $this->view->title = 'Кримінальне право | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('ugolovnoe_pravo');
    }

    public function actionHozyaystvenie_spori()
    {
        $this->view->title = 'Господарські спори | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('hozyaystvenie_spori');
    }

    public function actionNalog_spor()
    {
        $this->view->title = 'Податкові спори | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('nalog_spor');
    }

    public function actionAdmin_spor()
    {
        $this->view->title = 'Спори з органами влади | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('admin_spor');
    }

    public function actionPravo_business()
    {
        $this->view->title = 'Спори по кредитам | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('pravo_business');
    }

    public function actionOt_lubvi_do_nenavisti()
    {
        $this->view->title = 'Від любові до ненависти | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('ot_lubvi_do_nenavisti');
    }

    public function actionO_nevinovnosti_dtp()
    {
        $this->view->title = 'Про невинуватість при ДТП | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('o_nevinovnosti_dtp');
    }

    public function actionPravovoy_obzor_1()
    {
        $this->view->title = 'ч.1 Правовий огляд сімейних відносин | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('pravovoy_obzor_1');
    }

    public function actionPravovoy_obzor_2()
    {
        $this->view->title = 'ч.2 Правовий огляд сімейних відносин | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('pravovoy_obzor_2');
    }

    public function actionPravovoy_obzor_3()
    {
        $this->view->title = 'ч.3 Правовий огляд сімейних відносин | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('pravovoy_obzor_3');
    }

    public function actionAnekdoti()
    {
        $this->view->title = 'Юмор, анекдоти про юриспруденцію';
        return $this->render('anekdoti');
    }

    public function actionContacti()
    {
        $this->view->title = 'Контакти | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('contacti');
    }

    public function actionZapis_consultation()
    {
        $this->view->title = 'Зворотній зв’язок | Адвокати Дашко і Ко. | Сєвєродонецьк';
        return $this->render('zapis_consultation');
    }
}
