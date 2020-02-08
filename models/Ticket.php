<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Ticket extends Model
{
    public $number;

    public function rules()
    {
        return [
            ['number','string','length'=>['6','6']],
            ['number', 'match', 'pattern' => '/^[0-9]+$/'],
            ['number', 'required'],
            ['number', 'validateLuckiness'],
        ];
    }

    public function validateLuckiness($attribute)
    {
        $leftHalfInt = 0;
        $rightHalfInt = 0;

        for ($i=0; $i<3; $i++) {
            $leftHalfInt += intval(substr($this->$attribute, $i, 1));
            $rightHalfInt += intval(substr($this->$attribute, $i+3, 1));
        }

        if ($leftHalfInt != $rightHalfInt) {
            $this->addError($attribute, 'Not a lucky number');
        }

    }
}