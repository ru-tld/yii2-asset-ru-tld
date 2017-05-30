<?php
/**
 * Yii 2 asset with RU-TLD logos and so on
 *
 * @link      https://github.com/ru-tld/yii2-asset-ru-tld
 * @package   yii2-asset-ru-tld
 * @license   No license
 * @copyright Copyright (c) 2015-2017, RU-TLD (https://ru-tld.ru/)
 */

error_reporting(E_ALL & ~E_NOTICE);

$bootstrap = __DIR__ . '/../src/_bootstrap.php';

require_once file_exists($bootstrap) ? $bootstrap : __DIR__ . '/../vendor/autoload.php';
