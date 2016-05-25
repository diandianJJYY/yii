<?php
/**
 * Created by PhpStorm.
 * User: JJYY
 * Date: 2016/5/28
 * Time: 22:34
 */
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>:<?= Html::encode($model->name) ?></li>
    <li><label>Email</label>:<?= Html::encode($model->email) ?></li>
</ul>
