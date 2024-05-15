<?php

namespace frontend\controllers;

use common\models\Teacher;
use yii\web\Controller;
use common\models\Courses;

class CoursesController extends Controller
{
    public function actionDetail($name)
    {
        $model=Courses::findOne(['name'=>$name]);
        $teach=Teacher::findOne(['courses_id'=>$model->id]);
        return $this->render('detail',['model'=>$model,'teach'=>$teach]);
    }
}