<?php

namespace app\common;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\common\SystemConfig;

class BaseController extends Controller
{
	public function init(){
		parent::init();
	}
	
	
}