<?php

require_once __DIR__ . '/lib/functions.php';

Kirby::plugin('arnaudjuracek/iframe-field', [
  'fields' => [
    'iframe' => [
      'props' => [
        'src' => function (string $src = null) {
          return $src;
        },
        'ratio' => function (string $ratio = '4/3') {
          return fraction($ratio);
        }
      ],
      'computed' => [
        'style' => function () {
          return 'padding-top:' . str_replace(',', '.', round(1 / $this->ratio * 100, 3)) . '%;';
        }
      ]
    ]
  ]
]);
