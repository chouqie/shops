<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;

/**
 * 用户中心
 * Class AccountController
 * @package backend\controllers
 * @auth Mr Wang
 * @date 2017-07-17
 */
class AccountController extends CommonController
{


	public $layout = false;


	public function actionLogin()
	{
		return $this->render('login');
	}

	
}


?>