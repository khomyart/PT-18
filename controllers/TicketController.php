<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Ticket;

class TicketController extends Controller
{
    public function actionEntry()
    {
        $model = new Ticket();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('TicketIsLucky', ['model' => $model]);
        } else {
            return $this->render('TicketEntry', ['model' => $model]);
        }
    }

}
