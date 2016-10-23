<?php

/*
 * Yii 2 asset with RU-TLD logos and so on
 *
 * @link      https://github.com/ru-tld/yii2-asset-ru-tld
 * @package   yii2-asset-ru-tld
 * @license   No license
 * @copyright Copyright (c) 2015, RU-TLD (https://ru-tld.ru/)
 */

$supportEmail = 'support@ru-tld.ru';

return [
    'organizationName'  => 'RU-TLD',
    'organizationUrl'   => 'https://ru-tld.ru/',
    'supportEmail'      => $supportEmail,
    'adminEmail'        => $supportEmail,
    'abuseEmail'        => 'abuse@ru-tld.ru',
    'salesEmail'        => 'sale@ru-tld.ru',
    'logoImage'         => '@rutld/assets/rutld/assets/img/alt-logo.png',
    'logoOptions'       => ['style' => 'width: 100px;'],

    'socialLinks'       => [
        'email'     => 'mailto:' . $supportEmail,
        'twitter'   => 'https://twitter.com/rutld',
        'facebook'  => 'https://www.facebook.com/groups/230254030432488/',
    ],
];
