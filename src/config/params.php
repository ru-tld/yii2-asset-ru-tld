<?php
/**
 * Yii 2 asset with RU-TLD logos and so on
 *
 * @link      https://github.com/ru-tld/yii2-asset-ru-tld
 * @package   yii2-asset-ru-tld
 * @license   No license
 * @copyright Copyright (c) 2015-2017, RU-TLD (https://ru-tld.ru/)
 */


$supportEmail = 'support@qq.domains';

return [
    'favicon.ico'       => '@rutld/assets/rutld/assets/img/favicon.ico',

    'organization.name' => 'QQ.domains',
    'organization.url'  => 'https://qq.domains/',

    'supportEmail'      => $supportEmail,
    'adminEmail'        => $supportEmail,
    'abuseEmail'        => 'abuse@ru-tld.ru',
    'salesEmail'        => 'sale@ru-tld.ru',

    'logo.image'                => '@rutld/assets/rutld/assets/img/alt-logo.png',
    'logo.imageOptions'         => ['style' => 'width: 100px;'],
    'logo.smallImage'           => '@rutld/assets/rutld/assets/img/alt-logo.png',
    'logo.smallImageOptions'    => ['style' => 'width: 50px'],

    'socialLinks.links'  => [
        'email'     => 'mailto:' . $supportEmail,
        'twitter'   => 'https://twitter.com/rutld',
        'facebook'  => 'https://www.facebook.com/groups/230254030432488/',
    ],
];
