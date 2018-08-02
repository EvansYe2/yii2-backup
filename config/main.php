<?php
/**
 * Created by PhpStorm.
 * User: Evans
 * Date: 2018/7/31
 * Time: 下午4:02
 */
return [
    'params' => [
        'DATA_BACKUP_PATH' => Yii::getAlias('@vendor') . '/evans/yii2-backup/data/',
        'DATA_BACKUP_PART_SIZE' => 20971520,
        'DATA_BACKUP_COMPRESS' => 1,
        'DATA_BACKUP_COMPRESS_LEVEL' => 9,
    ]
];