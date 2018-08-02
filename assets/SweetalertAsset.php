<?php
/**
 * Created by PhpStorm.
 * User: Evans
 * Date: 2018/7/31
 * Time: 下午4:02
 */

namespace evans\backup\assets;


use yii\web\AssetBundle;

class SweetalertAsset extends AssetBundle
{
    public $sourcePath = '@vendor/evans/yii2-backup/static';

    public $css = [
        'sweetalert/sweetalert.css'
    ];

    public $js = [
        'sweetalert/sweetalert.min.js'
    ];
}