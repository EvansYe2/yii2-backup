<?php
/**
 * Created by PhpStorm.
 * User: Evans
 * Date: 2018/7/31
 * Time: 下午4:02
 */

namespace evans\backup;


class Module extends \yii\base\Module
{
    public $controllerNamespace = 'evans\backup\controllers';
    public function init()
    {
        parent::init();
        \Yii::configure($this, require(__DIR__ . '/config/main.php'));
    }
}