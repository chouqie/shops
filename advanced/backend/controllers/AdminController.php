<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;

/**
 * 首页模块
 * Class AdminController
 * @package backend\controllers
 * @auth Mr Wang
 * @date 2017-07-17
 */
class AdminController extends CommonController
{


	public function actionIndex()
	{

		// 获取左部栏目数据
		$leftData = $this->left();
		$view = YII::$app->view;
        $view->params['left'] = $leftData;

		return $this->render('index');
	}


}