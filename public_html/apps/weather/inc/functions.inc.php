<?php

declare(strict_types=1);

function render($view, $params = null): void
{
  if ($params !== null) {
    extract($params);
  }

  ob_start();
  require __DIR__ . '/../inc/head-tags.inc.php';
  $headContents = ob_get_clean();

  ob_start();
  require __DIR__ . '/../views/' . $view . '.php';
  $mainContents = ob_get_clean();

  require __DIR__ . '/../../main.view.php';
}
