<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src');

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
        'strict_param' => false,
        'ordered_imports' => [
            'sortAlgorithm' => 'alpha',
        ],
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'no_trailing_whitespace' => true,
        'phpdoc_single_line_var_spacing' => true,
        'strict_comparison' => false,
    ])
    ->setFinder($finder);
