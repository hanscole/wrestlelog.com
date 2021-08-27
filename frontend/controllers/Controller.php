<?php

namespace frontend\controllers;
use Yii;
class Controller extends \yii\web\Controller
{
    public function getGuest(){
        if (Yii::$app->user->isGuest){
           return true;
        }else{
            return false;
        }
    }

}