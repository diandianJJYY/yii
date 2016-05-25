<?php
/**
 * Created by PhpStorm.
 * User: JJYY
 * Date: 2016/5/28
 * Time: 22:20
 */
namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name','email'],'required'],
            ['email','email'],
        ];
    }
}