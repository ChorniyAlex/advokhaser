<?php

namespace app\controllers;

use yii\web\Controller;
use \app\models\Top_menu;
use app\models\Ua_content;
use app\models\Zapis_consultationForm;
use app\models\Divorce_childrenForm;
use app\models\DivorceForm;
use app\models\AlimentForm;
use yii\helpers\Url;
use app\models\Court;
use Yii;

class Ua_contentController extends Controller
{
    public function actionIndex()
    {
        $title = \Yii::$app->request->get('title');
        $title = top_menu::findOne('title');
        $this->view->title = $title;
        $this->view->title = 'Адвокати Дашко і Чорнобай | Сєвєродонецьк | Правова допомога, юридичні послуги';
        return $this->render('index');
    }

    public function actionO_nas()
    {
        $this->view->title = 'Про нас | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('o_nas');
    }

    public function actionLawyer_consultation()
    {
        $this->view->title = 'Юридичні консультації | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('lawyer_consultation');
    }

    public function actionInnovation()
    {
        $this->view->title = 'Інноваційний IT-сервіс online | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('innovation');
    }

    public function actionSostavlenye_document()
    {
        $this->view->title = 'Складання документів | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('sostavlenye_document');
    }

    public function actionZaschita_predstavitelstvo()
    {
        $this->view->title = 'Представництво в суді | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('zaschita_predstavitelstvo');
    }

    public function actionPomosch_dtp()
    {
        $this->view->title = 'Допомога по ДТП | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('pomosch_dtp');
    }

    public function actionZaschita_po_ugolovnim()
    {
        $this->view->title = 'Захист по кримінальним справам | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('zaschita_po_ugolovnim');
    }

    public function actionSemeynoye_pravo()
    {
        $this->view->title = 'Сімейне право | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('semeynoye_pravo');
    }

    public function actionNasledstvo_pravo()
    {
        $this->view->title = 'Спадкове право | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('nasledstvo_pravo');
    }

    public function actionZhilishnoye_pravo()
    {
        $this->view->title = 'Житлові спори | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('zhilishnoye_pravo');
    }

    public function actionTrud_spor()
    {
        $this->view->title = 'Трудові спори | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('trud_spor');
    }

    public function actionNedvizhimost()
    {
        $this->view->title = 'Пенсійні спори | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('nedvizhimost');
    }

    public function actionZemelnoye_pravo()
    {
        $this->view->title = 'Земельні спори | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('zemelnoye_pravo');
    }

    public function actionZaschita_sobstvenosti()
    {
        $this->view->title = 'Захист права власності | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('zaschita_sobstvenosti');
    }

    public function actionUgolovnoe_pravo()
    {
        $this->view->title = 'Кримінальне право | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('ugolovnoe_pravo');
    }

    public function actionHozyaystvenie_spori()
    {
        $this->view->title = 'Господарські спори | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('hozyaystvenie_spori');
    }

    public function actionNalog_spor()
    {
        $this->view->title = 'Податкові спори | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('nalog_spor');
    }

    public function actionAdmin_spor()
    {
        $this->view->title = 'Спори з органами влади | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('admin_spor');
    }

    public function actionPravo_business()
    {
        $this->view->title = 'Спори по кредитам | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('pravo_business');
    }

    public function actionOt_lubvi_do_nenavisti()
    {
        $this->view->title = 'Від любові до ненависти | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('ot_lubvi_do_nenavisti');
    }

    public function actionO_nevinovnosti_dtp()
    {
        $this->view->title = 'Про невинуватість при ДТП | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('o_nevinovnosti_dtp');
    }

    public function actionPravovoy_obzor_1()
    {
        $this->view->title = 'ч.1 Правовий огляд сімейних відносин | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('pravovoy_obzor_1');
    }

    public function actionPravovoy_obzor_2()
    {
        $this->view->title = 'ч.2 Правовий огляд сімейних відносин | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('pravovoy_obzor_2');
    }

    public function actionPravovoy_obzor_3()
    {
        $this->view->title = 'ч.3 Правовий огляд сімейних відносин | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('pravovoy_obzor_3');
    }

    public function actionAnekdoti()
    {
        $this->view->title = 'Юмор, анекдоти про юриспруденцію';
        return $this->render('anekdoti');
    }

    public function actionContacti()
    {
        $this->view->title = 'Контакти | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('contacti');
    }

    public function actionZapis_consultation()
    {
        $model = new Zapis_consultationForm();
        if ($model->load(Yii::$app->request->post()) && $model->sendEmail()) {
            return $this->render('send_email', compact('model'));
        }
        return $this->render('zapis_consultation', compact('model'));
    }

    public function actionSend_email()
    {
        $model = new Zapis_consultationForm();
        return $this->render('send_email', compact('model'));
    }

    public function actionCourt($id)
    {
        $results = Court::find()
            ->select('name')
            ->where(['id_region' => $id])
            ->asArray()
            ->all();
        return json_encode($results);
    }

    public function actionDivorce()
    {
        $this->view->title = 'Шлюб розірвання | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        $model = new DivorceForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->response->redirect(Url::to('divorce_claim'));
        }
        return $this->render('divorce', compact('model'));
    }

    public function actionDivorce_instruction()
    {
        Yii::$app->response->format = 'pdf';
        $this->layout = false;
        return $this->render('divorce_instruction', []);
    }

    public function actionDivorce_claim()
    {
        $model = new DivorceForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // echo '<pre>';
            // print_r($model);
            // exit;
            Yii::$app->response->format = 'pdf';
            $this->layout = false;
            return $this->render('divorce_claim', ['model' => $model]);
        } else
            return $this->render('divorce', ['model' => $model]);
    }

    public function actionDivorce_children()
    {
        $this->view->title = 'Шлюб розірвання | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        $model = new Divorce_childrenForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->response->redirect(Url::to('divorce_children_claim'));
        }
        return $this->render('divorce_children', compact('model'));
    }

    public function actionDivorce_children_instruction()
    {
        Yii::$app->response->format = 'pdf';
        $this->layout = false;
        return $this->render('divorce_children_instruction', []);
    }

    public function actionDivorce_children_claim()
    {
        $model = new Divorce_childrenForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // echo '<pre>';
            // print_r($model);
            // exit;
            Yii::$app->response->format = 'pdf';
            $this->layout = false;
            return $this->render('divorce_children_claim', ['model' => $model]);
        } else
            return $this->render('divorce_children', ['model' => $model]);
    }

    public function actionAliment()
    {
        $this->view->title = 'Аліменти стягнення | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        $model = new AlimentForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->response->redirect(Url::to('aliment_claim'));
        }
        return $this->render('aliment', compact('model'));
    }

    public function actionAliment_instruction()
    {
        Yii::$app->response->format = 'pdf';
        $this->layout = false;
        return $this->render('aliment_instruction', []);
    }

    public function actionAliment_claim()
    {
        $model = new AlimentForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // echo '<pre>';
            // print_r($model);
            // exit;
            Yii::$app->response->format = 'pdf';
            $this->layout = false;
            return $this->render('aliment_claim', ['model' => $model]);
        } else
            return $this->render('aliment', ['model' => $model]);
    }

    public function actionFact_death()
    {
        $this->view->title = 'Факт смерті встановити | Адвокати Дашко і Чорнобай | Сєвєродонецьк';
        return $this->render('fact_death');
    }

    public function actionFact_death_instruction()
    {
        Yii::$app->response->format = 'pdf';
        $this->layout = false;
        return $this->render('fact_death_instruction', []);
    }
}
