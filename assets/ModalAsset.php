<?php
namespace evans\backup\assets;
/**
 * Created by PhpStorm.
 * User: Evans
 * Date: 2018/7/31
 * Time: 下午4:02
 */
use yii\web\AssetBundle;

class ModalAsset extends AssetBundle
{
    public $sourcePath = '@vendor/evans/yii2-backup/static';
    public $js = [
        'modal.js'
    ];
    public $depends = [
        'evans\backup\assets\SweetalertAsset',
    ];
}
