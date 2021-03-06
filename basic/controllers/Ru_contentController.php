<?php

namespace app\controllers;

use yii\web\Controller;
use \app\models\Top_menu;
use app\models\Ru_content;

class Ru_contentController extends Controller
{

    public function actionIndex()
    {
        $title = \Yii::$app->request->get('title');
        $title = top_menu::findOne('title');
        $this->view->title = $title;
        $this->view->title = 'Адвокаты Дашко и Ко. | Северодонецк | Правовая помощь, юридические услуги';

        return $this->render('index');
    }

    public function actionO_nas()
    {
        $this->view->title = 'О нас | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('o_nas');
    }

    public function actionLawyer_consultation()
    {
        $this->view->title = 'Юридические консультации | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('lawyer_consultation');
    }

    public function actionInnovation()
    {
        $this->view->title = 'Инновационный IT-сервис online | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('innovation');
    }

    public function actionSostavlenye_document()
    {
        $this->view->title = 'Составление документов | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('sostavlenye_document');
    }

    public function actionZaschita_predstavitelstvo()
    {
        $this->view->title = 'Представительство в суде | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('zaschita_predstavitelstvo');
    }

    public function actionPomosch_dtp()
    {
        $this->view->title = 'Помощь по ДТП | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('pomosch_dtp');
    }

    public function actionZaschita_po_ugolovnim()
    {
        $this->view->title = 'Защита по уголовным делам | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('zaschita_po_ugolovnim');
    }

    public function actionSemeynoye_pravo()
    {
        $this->view->title = 'Семейное право | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('semeynoye_pravo');
    }

    public function actionNasledstvo_pravo()
    {
        $this->view->title = 'Наследственное право | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('nasledstvo_pravo');
    }

    public function actionZhilishnoye_pravo()
    {
        $this->view->title = 'Жилищные споры | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('zhilishnoye_pravo');
    }

    public function actionTrud_spor()
    {
        $this->view->title = 'Трудовые споры | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('trud_spor');
    }

    public function actionNedvizhimost()
    {
        $this->view->title = 'Пенсионные споры | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('nedvizhimost');
    }

    public function actionZemelnoye_pravo()
    {
        $this->view->title = 'Земельные споры | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('zemelnoye_pravo');
    }

    public function actionZaschita_sobstvenosti()
    {
        $this->view->title = 'Защита права собственности | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('zaschita_sobstvenosti');
    }

    public function actionUgolovnoe_pravo()
    {
        $this->view->title = 'Уголовное право | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('ugolovnoe_pravo');
    }

    public function actionHozyaystvenie_spori()
    {
        $this->view->title = 'Хозяйственные споры | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('hozyaystvenie_spori');
    }

    public function actionNalog_spor()
    {
        $this->view->title = 'Налоговые споры | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('nalog_spor');
    }

    public function actionAdmin_spor()
    {
        $this->view->title = 'Споры с органами власти | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('admin_spor');
    }

    public function actionPravo_business()
    {
        $this->view->title = 'Споры по кредитам | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('pravo_business');
    }

    public function actionOt_lubvi_do_nenavisti()
    {
        $this->view->title = 'От любви до ненависти | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('ot_lubvi_do_nenavisti');
    }

    public function actionO_nevinovnosti_dtp()
    {
        $this->view->title = 'О невиновности при ДТП | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('o_nevinovnosti_dtp');
    }

    public function actionPravovoy_obzor_1()
    {
        $this->view->title = 'ч.1 Правовой обзор семейных отношений | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('pravovoy_obzor_1');
    }

    public function actionPravovoy_obzor_2()
    {
        $this->view->title = 'ч.2 Правовой обзор семейных отношений | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('pravovoy_obzor_2');
    }

    public function actionPravovoy_obzor_3()
    {
        $this->view->title = 'ч.3 Правовой обзор семейных отношений | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('pravovoy_obzor_3');
    }

    public function actionAnekdoti()
    {
        $this->view->title = 'Юмор, анекдоты о юриспруденции';
        return $this->render('anekdoti');
    }

    public function actionContacti()
    {
        $this->view->title = 'Контакты | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('contacti');
    }

    public function actionZapis_consultation()
    {
        $this->view->title = 'Обратная связь | Адвокаты Дашко и Ко. | Северодонецк';
        return $this->render('zapis_consultation');
    }
}
