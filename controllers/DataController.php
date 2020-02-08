<?php

namespace app\controllers;

use app\models\Clients;
use app\models\Bookings;
use yii\web\Controller;

class DataController extends Controller
{
    public function actionShowTableClients()
    {
        $allClients = Clients::find()->all();
        return $this->render('clients', ['clients' => $allClients]);
    }

    public function actionShowTableBookings()
    {
        $allBookings = Bookings::find()->all();
        return $this->render('bookings',['bookings' => $allBookings]);
    }
}