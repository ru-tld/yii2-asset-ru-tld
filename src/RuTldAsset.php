<?php

/*
 * Yii 2 asset with RU-TLD logos and so on
 *
 * @link      https://github.com/ru-tld/yii2-asset-ru-tld
 * @package   yii2-asset-ru-tld
 * @license   No license
 * @copyright Copyright (c) 2015, RU-TLD (https://ru-tld.ru/)
 */

namespace rutld\assets\rutld;

class RuTldAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@rutld/assets/rutld/assets';

    public $css = [
        'css/ru-tld.css',
    ];
}
