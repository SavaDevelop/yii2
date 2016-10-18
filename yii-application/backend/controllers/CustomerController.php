<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Customer;
use backend\models\Orders;
use backend\models\Products;
use backend\models\Status; 

class CustomerController extends \yii\web\Controller
{
    public function actionIndex()
    {   
        $formatter = \Yii::$app->formatter;
        $Customer = new Customer();
        $Status = new Status();
        $Products = new Products();
        $Orders = new Orders();
        
        $qq = $Customer->find()->all();//joinWith(['status', 'orders']);
        $st = $Status->find()->all();
        $pr = $Products->find()->all();
        $ord = $Orders->find()->all();
          
        return $this->render('/site/customer', [
            'formatter' => $formatter,
            'model' => $qq,
            'status' => $st,
            'Products' => $pr,
            'orders' => $ord
        ]);
    }
    
    public function actionMenu(){
         $menu = "<ul><li>Все кликнты<li>";
         $menu .= "<li>Новые<li>";
         $menu .= "<li>Постоянные<li>";
         $menu .= "<li>Вип клиенты<li></ul>";
         return $menu;    
    }
    
    public function status(){
//        $customers = Customer::find()
//    ->where(['status' => Customer::STATUS_ACTIVE])
//    ->orderBy('id')
//    ->all();

        
    }

}