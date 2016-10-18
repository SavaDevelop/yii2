<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Customer;

class CustomerController extends \yii\web\Controller
{
    public function actionIndex()
    {   
        $Customer = new Customer();
        return $this->render('/site/customer',['model' => $Customer]);
    }
    
    public function actionMenu(){
         $menu = "<ul><li>Все кликнты<li>";
         $menu .= "<li>Новые<li>";
         $menu .= "<li>Постоянные<li>";
         $menu .= "<li>Вип клиенты<li><.ul>";
         return $menu;    
    }

}
