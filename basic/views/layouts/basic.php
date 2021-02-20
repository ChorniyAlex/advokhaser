<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$this->registerLinkTag(['rel' => 'shortcut png', 'type' => 'image/png', 'href' => Url::toRoute(['../../web/favicon.png'])]);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="<?= Url::toRoute(['../../web/favicon.png']) ?>" type="image/png" />
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <!--  Start header area -->
    <!-- ================== -->
    <?= $this->render('header') ?>
    <?= $this->render('header_mobil') ?>

    <!---  Start nav  --->
    <?= $this->render('nav') ?>
    <!---  End nav  --->

    <!--  End header area   --->
    <!-- =================== -->

    <!----  Start content  ---->
    <!-- =================== -->
    <?= $content ?>
    <!-----  End content  ----->
    <!-- =================== -->

    <!----  Start footer  ---->
    <!-- ================== -->
    <?= $this->render('footer') ?>
    <!----  End footer  ---->
    <!-- ================ -->
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>