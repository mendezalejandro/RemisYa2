<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\AppAssetCliente;
//use app\assets\AppAssetWebSite;
use yii\grid\GridView;
use yii\helpers\BaseHtml;
use yii\widgets\ActiveForm;
use yii\bootstrap\Dropdown;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Button;
use yii\bootstrap\Modal;
use app\assets\BootswatchAsset;

raoul2000\bootswatch\BootswatchAsset::$theme = 'superhero';
BootswatchAsset::register($this);
AppAsset::register($this);
AppAssetCliente::register($this);
//AppAssetWebSite::register($this);
/* @var $this yii\web\View */
//$this->title = 'RemisYa';
?>
<div class="container">
    <div class="well bs-component">
        <?=
        GridView::widget([
            'dataProvider' => $model->dataProvider,
            'columns' => [
                ['class' => 'yii\grid\CheckboxColumn'],
                'Calificante',
                'Calificado',
                'AgenciaNombre', //ver como mostrar el nombre de la agencia
                'Fecha',
                'Puntaje',
                'Comentario',
            ],]);
        ?>
    </div>
</div>
