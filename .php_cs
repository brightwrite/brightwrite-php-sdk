<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src');

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'strict_param' => false,
        'array_syntax' => [
            'syntax' => 'short'
        ],
    ])
    ->setFinder($finder);
