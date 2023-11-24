<?php

/**
 * @var $kirby \Kirby\Cms\App
 * @var $site \Kirby\Cms\Site
 * @var $pages \Kirby\Cms\Pages
 * @var $page \Kirby\Cms\Page
 */

$files = $site->images()->template('test')
?>

<?php snippet('layouts/default', slots: true) ?>

<main class="flex-grow p-4 mb-auto bg-yellow-200">

  <h1 class="text-3xl"><?= $page->title() ?></h1>
  <p x-data="{ message: 'Alpine.js Test' }" x-text="message"></p>

  <?php foreach ($files as $file) : ?>
    <?php snippet('blocks/picture', ['image' => $file, 'sizes' => '60vw', 'class' => 'mb-4'])
    ?>
  <?php endforeach ?>

</main>