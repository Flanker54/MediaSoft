<?php

namespace app\models;

use dektrium\user\models\User as BaseUser;

class User extends BaseUser
{
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        // add field to scenarios
        $scenarios['create'][]   = 'status';
        $scenarios['update'][]   = 'status';
        $scenarios['register'][] = 'status';

        return $scenarios;
    }


    public function rules()
    {
        $rules = parent::rules();
        // add some rules
        $rules['fieldRequired'] = ['status', 'required'];
        $rules['fieldLength']   = ['status', 'string', 'max' => 1];

        return $rules;
    }
}
