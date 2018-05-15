<?php

namespace app\controllers;

use system\libraries\Controller;

class FrontController extends Controller
{
   public function __construct()
   {
       echo 'FrontController is running!<br>';
   }
   
   public function actionIndex()
   {
       echo 'Index action is runnig in FrontController!<br>';
       $model = $this->getModel('FrontModel');
   }
}

 