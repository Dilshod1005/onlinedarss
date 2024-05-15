<?php

namespace frontend\controllers;

use yii\web\Controller;
use common\models\Courses;

class CoursesController extends Controller
{
    public function actionDetail($name)
    {
        $model=Courses::findOne(['name'=>$name]);
        return $this->render('detail',['model'=>$model]);
    }
}