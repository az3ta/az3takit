<?php

return [
  'favicon' => [
    'png' => 'assets/favicon/favicon.png', // required
    'ico' => 'assets/favicon/favicon.ico', // fallback to favicon.png
    'svg' => 'assets/favicon/favicon.svg',
    'sizes' => [32, 96, 16, 180],
  ],
  'app' => [
    'icon' => 'assets/favicon/app-icon.png', // fallback to favicon.png
    'sizes' => [180, 167, 152]
  ],
  'mask' => 'assets/favicon/mask.svg', // fallback to favicon.svg
  'color' => '#ffffff',

  // for minimal html output
  'minimalist' => false,

  // the following will ony be show when 'extended' is set to true
  'extended' => false,

  'manifest' => [
    'icon' => 'assets/favicon/android-icon.png', // fallback to favicon.png
    'background_color' => '#ffffff',
    'sizes' => [
      36 => 0.75,
      48 => 1.0,
      72 => 1.5,
      96 => 2.0,
      144 => 3.0,
      192 => 4.0,
      512 => false
    ],
    // other entries can be added here
  ],
  'browserconfig' => [
    'icon' => 'assets/favicon/ms-tile.png', // fallback to favicon.png
    'sizes' => [70, 150, 310]
  ],
];
