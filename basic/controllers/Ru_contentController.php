<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use \app\models\Top_menu;
use \app\models\Innovation;
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
    public $action;
    public function getTitle($action)
    {
        $title = Top_menu::find()->where(['action' => $action])->one();
        $title = $title->title_ru;
        return $this->view->title = $title;
    }

    public function getDescription($action)
    {
        $description = Top_menu::find()->where(['action' => $action])->one();
        $description = $description->descriptions_ru;
        return $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);
    }

    public function getKeywords($action)
    {
        $keywords = Top_menu::find()->where(['action' => $action])->one();
        $keywords = $keywords->keywords;
        return $this->view->registerMetaTag(['name' => 'keywords', 'content' => $keywords]);
    }

    public function actionIndex()
    {
        $action = 'Index';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('index');
    }

    public function actionO_nas()
    {
        $action = 'O_nas';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('o_nas');
    }

    public function actionLawyer_consultation()
    {
        $action = 'Lawyer_consultation';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('lawyer_consultation');
    }

    public function actionInnovation()
    {
        $action = 'Innovation';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('innovation');
    }

    public function actionSostavlenye_document()
    {
        $action = 'Sostavlenye_document';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('sostavlenye_document');
    }

    public function actionZaschita_predstavitelstvo()
    {
        $action = 'Zaschita_predstavitelstvo';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('zaschita_predstavitelstvo');
    }

    public function actionPomosch_dtp()
    {
        $action = 'Pomosch_dtp';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('pomosch_dtp');
    }

    public function actionZaschita_po_ugolovnim()
    {
        $action = 'Zaschita_po_ugolovnim';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('zaschita_po_ugolovnim');
    }

    public function actionSemeynoye_pravo()
    {
        $action = 'Semeynoye_pravo';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('semeynoye_pravo');
    }

    public function actionNasledstvo_pravo()
    {
        $action = 'Nasledstvo_pravo';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('nasledstvo_pravo');
    }

    public function actionZhilishnoye_pravo()
    {
        $action = 'Zhilishnoye_pravo';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('zhilishnoye_pravo');
    }

    public function actionTrud_spor()
    {
        $action = 'Trud_spor';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('trud_spor');
    }

    public function actionNedvizhimost()
    {
        $action = 'Nedvizhimost';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('nedvizhimost');
    }

    public function actionZemelnoye_pravo()
    {
        $action = 'Zemelnoye_pravo';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('zemelnoye_pravo');
    }

    public function actionZaschita_sobstvenosti()
    {
        $action = 'Zaschita_sobstvenosti';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('zaschita_sobstvenosti');
    }

    public function actionUgolovnoe_pravo()
    {
        $action = 'Ugolovnoe_pravo';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('ugolovnoe_pravo');
    }

    public function actionHozyaystvenie_spori()
    {
        $action = 'Hozyaystvenie_spori';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('hozyaystvenie_spori');
    }

    public function actionNalog_spor()
    {
        $action = 'Nalog_spor';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('nalog_spor');
    }

    public function actionAdmin_spor()
    {
        $action = 'Admin_spor';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('admin_spor');
    }

    public function actionPravo_business()
    {
        $action = 'Pravo_business';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('pravo_business');
    }

    public function actionOt_lubvi_do_nenavisti()
    {
        $action = 'Ot_lubvi_do_nenavisti';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('ot_lubvi_do_nenavisti');
    }

    public function actionO_nevinovnosti_dtp()
    {
        $action = 'O_nevinovnosti_dtp';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('o_nevinovnosti_dtp');
    }

    public function actionPravovoy_obzor_1()
    {
        $action = 'Pravovoy_obzor_1';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('pravovoy_obzor_1');
    }

    public function actionPravovoy_obzor_2()
    {
        $action = 'Pravovoy_obzor_2';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('pravovoy_obzor_2');
    }

    public function actionPravovoy_obzor_3()
    {
        $action = 'Pravovoy_obzor_3';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('pravovoy_obzor_3');
    }

    public function actionAnekdoti()
    {
        $action = 'Anekdoti';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('anekdoti');
    }

    public function actionContacti()
    {
        $action = 'Contacti';
        $this->getTitle($action);
        $this->getKeywords($action);
        $this->getDescription($action);
        return $this->render('contacti');
    }

    public $action_innovation;
    public function getTitle_innovation($action_innovation)
    {
        $title = Innovation::find()->where(['action' => $action_innovation])->one();
        $title = $title->title_ru;
        return $this->view->title = $title;
    }

    public function getDescription_innovation($action_innovation)
    {
        $description = Innovation::find()->where(['action' => $action_innovation])->one();
        $description = $description->descriptions_ru;
        return $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);
    }

    public function getKeywords_innovation($action_innovation)
    {
        $keywords = Innovation::find()->where(['action' => $action_innovation])->one();
        $keywords = $keywords->keywords;
        return $this->view->registerMetaTag(['name' => 'keywords', 'content' => $keywords]);
    }

    public function actionZapis_consultation()
    {
        $action_innovation = 'Zapis_consultation';
        $this->getTitle_innovation($action_innovation);
        $this->getKeywords_innovation($action_innovation);
        $this->getDescription_innovation($action_innovation);
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
        $action_innovation = 'Divorce_children';
        $this->getTitle_innovation($action_innovation);
        $this->getKeywords_innovation($action_innovation);
        $this->getDescription_innovation($action_innovation);
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
        $action_innovation = 'Divorce';
        $this->getTitle_innovation($action_innovation);
        $this->getKeywords_innovation($action_innovation);
        $this->getDescription_innovation($action_innovation);
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
        $action_innovation = 'Aliment';
        $this->getTitle_innovation($action_innovation);
        $this->getKeywords_innovation($action_innovation);
        $this->getDescription_innovation($action_innovation);
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
        $action_innovation = 'Aliment_student';
        $this->getTitle_innovation($action_innovation);
        $this->getKeywords_innovation($action_innovation);
        $this->getDescription_innovation($action_innovation);
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
        $action_innovation = 'Aliment_wife';
        $this->getTitle_innovation($action_innovation);
        $this->getKeywords_innovation($action_innovation);
        $this->getDescription_innovation($action_innovation);
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
        $action_innovation = 'Fact_death';
        $this->getTitle_innovation($action_innovation);
        $this->getKeywords_innovation($action_innovation);
        $this->getDescription_innovation($action_innovation);
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
