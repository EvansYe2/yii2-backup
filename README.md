# yii2-backup


## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install, either run

```
$ php composer.phar require evans/yii2-backup "dev-master"
```

or add

```
"evans/yii2-backup": "dev-master"
```

to the ```require``` section of your `composer.json` file.


## Usage

```php
'modules' => [
        'db' => [
            'class' => 'evans\backup\Module',
        ],
    ],
```
## 访问:

数据备份：
?r=db/export

数据还原:
?r=db/import

##部分截图:
<img src="https://github.com/EvansYe2/yii2-backup/blob/master/img/backup.png" alt="图片名称" align=center />

<img src="https://github.com/EvansYe2/yii2-backup/blob/master/img/optimize.png"  alt="图片名称" align=center />

<img src="https://github.com/EvansYe2/yii2-backup/blob/master/img/restore1.png" alt="图片名称" align=center />


<img src="https://github.com/EvansYe2/yii2-backup/blob/master/img/sqldelete.png" alt="图片名称" align=center />
