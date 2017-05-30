<?php

$header = <<<EOF
Yii 2 asset with RU-TLD logos and so on

@link      https://github.com/ru-tld/yii2-asset-ru-tld
@package   yii2-asset-ru-tld
@license   No license
@copyright Copyright (c) 2015-2017, RU-TLD (https://ru-tld.ru/)
EOF;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@PSR2' => true,
        'header_comment'                             =>  [
            'header'        => $header,
            'separate'      => 'bottom',
            'location'      => 'after_declare_strict',
            'commentType'   => 'PHPDoc',
        ],
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
            ->notPath('vendor')
            ->notPath('runtime')
            ->notPath('web/assets')
        )
;
