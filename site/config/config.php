<?php
/*

---------------------------------------
Kirby Configuration
---------------------------------------

*/

return [
  'environment' => 'local',
  'debug'  => true,
  'languages' => true,
  'thumbs' => [
  	'autoOrient' => true,
    'srcsets' => [
      'default' => [
        '800w' => ['width' => 800, 'quality' => 80],
        '1024w' => ['width' => 1024, 'quality' => 80],
        '1440w' => ['width' => 1440, 'quality' => 80],
        '2048w' => ['width' => 2048, 'quality' => 80]
      ]
  	]
  ],
  // 'thumbs' => [
  //   'srcsets' => [
  //       'default' => [320, 1200],
  //       'breakpoints' => [800, 1024, 1440, 2048],
  //     ],
  // ],
  'smartypants' => [
    'doublequote.open'           => '«&#8239;',
    'doublequote.close'          => '&#8239;»',
    'ellipsis'                   => '&#8230;',
    'space.colon'                => '&#8239;',
    'space.semicolon'            => '&#8239;',
    'space.marks'                => '&#8239;',
    'space.frenchquote'          => '&#8239;',
    'space.thousand'             => '&#8239;',
    'space.unit'                 => '&#8239;',
    'guillemet.leftpointing'     => '«&#8239;',
    'guillemet.rightpointing'    => '&#8239;»',
  ]
];
