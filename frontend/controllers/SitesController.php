<?php

namespace frontend\controllers;

class SitesController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}