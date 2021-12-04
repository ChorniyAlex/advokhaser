<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use \app\models\Top_menu;
use app\models\Ru_content;
use app\models\MailerForm;
use app\models\Zapis_consultationForm;
use app\models\Divorce_childrenForm;
use app\models\DivorceForm;
use app\models\AlimentForm;
use app\models\Aliment_studentForm;
use app\models\Aliment_wifeForm;
use app\models\Fact_deathForm;
use app\models\Region;
use app\models\Court;
use yii\helpers\Url;


class Ru_contentController extends Controller
{
    public function actionIndex()
    {
        $title = \Yii::$app->request->get('title');
        $title = top_menu::findOne('title');
        $this->view->title = $title;
        $this->view->title = 'Адвокаты Дашко и Чорнобай | Северодонецк | Правовая помощь, юридические услуги';
        return $this->render('index');
    }

    public function actionO_nas()
    {
        $this->view->title = 'О нас | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('o_nas');
    }

    public function actionLawyer_consultation()
    {
        $this->view->title = 'Юридические консультации | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('lawyer_consultation');
    }

    public function actionInnovation()
    {
        $this->view->title = 'Инновационный IT-сервис online | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('innovation');
    }

    public function actionSostavlenye_document()
    {
        $this->view->title = 'Составление документов | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('sostavlenye_document');
    }

    public function actionZaschita_predstavitelstvo()
    {
        $this->view->title = 'Представительство в суде | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('zaschita_predstavitelstvo');
    }

    public function actionPomosch_dtp()
    {
        $this->view->title = 'Помощь по ДТП | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('pomosch_dtp');
    }

    public function actionZaschita_po_ugolovnim()
    {
        $this->view->title = 'Защита по уголовным делам | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('zaschita_po_ugolovnim');
    }

    public function actionSemeynoye_pravo()
    {
        $this->view->title = 'Семейное право | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('semeynoye_pravo');
    }

    public function actionNasledstvo_pravo()
    {
        $this->view->title = 'Наследственное право | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('nasledstvo_pravo');
    }

    public function actionZhilishnoye_pravo()
    {
        $this->view->title = 'Жилищные споры | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('zhilishnoye_pravo');
    }

    public function actionTrud_spor()
    {
        $this->view->title = 'Трудовые споры | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('trud_spor');
    }

    public function actionNedvizhimost()
    {
        $this->view->title = 'Пенсионные споры | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('nedvizhimost');
    }

    public function actionZemelnoye_pravo()
    {
        $this->view->title = 'Земельные споры | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('zemelnoye_pravo');
    }

    public function actionZaschita_sobstvenosti()
    {
        $this->view->title = 'Защита права собственности | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('zaschita_sobstvenosti');
    }

    public function actionUgolovnoe_pravo()
    {
        $this->view->title = 'Уголовное право | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('ugolovnoe_pravo');
    }

    public function actionHozyaystvenie_spori()
    {
        $this->view->title = 'Хозяйственные споры | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('hozyaystvenie_spori');
    }

    public function actionNalog_spor()
    {
        $this->view->title = 'Налоговые споры | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('nalog_spor');
    }

    public function actionAdmin_spor()
    {
        $this->view->title = 'Споры с органами власти | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('admin_spor');
    }

    public function actionPravo_business()
    {
        $this->view->title = 'Споры по кредитам | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('pravo_business');
    }

    public function actionOt_lubvi_do_nenavisti()
    {
        $this->view->title = 'От любви до ненависти | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('ot_lubvi_do_nenavisti');
    }

    public function actionO_nevinovnosti_dtp()
    {
        $this->view->title = 'О невиновности при ДТП | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('o_nevinovnosti_dtp');
    }

    public function actionPravovoy_obzor_1()
    {
        $this->view->title = 'ч.1 Правовой обзор семейных отношений | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('pravovoy_obzor_1');
    }

    public function actionPravovoy_obzor_2()
    {
        $this->view->title = 'ч.2 Правовой обзор семейных отношений | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('pravovoy_obzor_2');
    }

    public function actionPravovoy_obzor_3()
    {
        $this->view->title = 'ч.3 Правовой обзор семейных отношений | Адвокаты Дашко и Чорнобай | Северодонецк';
        return $this->render('pravovoy_obzor_3');
    }

    public function actionAnekdoti()
    {
        $this->view->title = 'Юмор, анекдоты о юриспруденции';
        return $this->render('anekdoti');
    }

    public function actionContacti()
    {
        $this->view->title = 'Контакты | Адвокаты Дашко и Чорнобай | Северодонецк';
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

    public function actionDivorce_children()
    {
        $this->view->title = 'Брак расторжение | Адвокаты Дашко и Чорнобай | Северодонецк';
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

    public function actionDivorce()
    {
        $this->view->title = 'Брак расторжение | Адвокаты Дашко и Чорнобай | Северодонецк';
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

    public function actionAliment()
    {
        $this->view->title = 'Алименты взыскание | Адвокаты Дашко и Чорнобай | Северодонецк';
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

    public function actionAliment_student()
    {
        $this->view->title = 'Алименты на студента | Адвокаты Дашко и Чорнобай | Северодонецк';
        $model = new Aliment_studentForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->response->redirect(Url::to('aliment_student_claim'));
        }
        return $this->render('aliment_student', compact('model'));
    }

    public function actionAliment_student_instruction()
    {
        Yii::$app->response->format = 'pdf';
        $this->layout = false;
        return $this->render('aliment_student_instruction', []);
    }

    public function actionAliment_student_claim()
    {
        $model = new Aliment_studentForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // echo '<pre>';
            // print_r($model);
            // exit;
            Yii::$app->response->format = 'pdf';
            $this->layout = false;
            return $this->render('aliment_student_claim', ['model' => $model]);
        } else
            return $this->render('aliment_student', ['model' => $model]);
    }

    public function actionAliment_wife()
    {
        $this->view->title = 'Алименты на жену | Адвокаты Дашко и Чорнобай | Северодонецк';
        $model = new Aliment_wifeForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->response->redirect(Url::to('aliment_wife_claim'));
        }
        return $this->render('aliment_wife', compact('model'));
    }

    public function actionAliment_wife_instruction()
    {
        Yii::$app->response->format = 'pdf';
        $this->layout = false;
        return $this->render('aliment_wife_instruction', []);
    }

    public function actionAliment_wife_claim()
    {
        $model = new Aliment_wifeForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // echo '<pre>';
            // print_r($model);
            // exit;
            Yii::$app->response->format = 'pdf';
            $this->layout = false;
            return $this->render('aliment_wife_claim', ['model' => $model]);
        } else
            return $this->render('aliment_wife', ['model' => $model]);
    }

    public function actionFact_death()
    {
        $this->view->title = 'Факт смерти установить | Адвокаты Дашко и Чорнобай | Северодонецк';
        $model = new Fact_deathForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->response->redirect(Url::to('fact_death_claim'));
        }
        return $this->render('fact_death', compact('model'));
    }

    public function actionFact_death_instruction()
    {
        Yii::$app->response->format = 'pdf';
        $this->layout = false;
        return $this->render('fact_death_instruction', []);
    }

    public function actionFact_death_claim()
    {
        $model = new Fact_deathForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // echo '<pre>';
            // print_r($model);
            // exit;
            Yii::$app->response->format = 'pdf';
            $this->layout = false;
            return $this->render('fact_death_claim', ['model' => $model]);
        } else
            return $this->render('fact_death', ['model' => $model]);
    }
}
