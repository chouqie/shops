<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;

/**
 * 公共方法
 * Class CommonController
 * @package backend\controllers
 * @auth Mr Wang
 * @date 2017-07-17
 */
class CommonController extends Controller
{
	

	// 自定义布局
	public $layout = 'orangelala';


	// 获取左部栏目数据
	public function left()
	{

		$db = new \yii\db\Query();
		$data = $db->from('{{%programa}}')->all();

		foreach($data as $key=>$val){
            if($val['p_id'] == 0){
                $leftData[$key] = $val;
            }else{
                $leftData[$val['p_id']-1]['children'][] = $data[$key];
            }
        }

		return $leftData;
	}


}


?>