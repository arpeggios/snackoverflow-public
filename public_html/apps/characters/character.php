<?php

require __DIR__ . '/inc/all.inc.php';

if (!empty($_GET['character'])) {
  $get_char = (string) ($_GET['character'] ?? '');
  $characterRepository = new CharacterRepository($pdo);
  $character = $characterRepository->fetchCharacter($get_char);
} else {
  $character = null;
}

if (!empty($_GET['mode'])) :
  $characterMode = e($_GET['mode']);

  if ($characterMode === 'create') {
    $characterAction = 'Create';
    $submitText = 'Create';
    $submitAction = 'index.php';
  } else if ($characterMode === 'edit') {
    $characterAction = 'Edit';
    $submitText = 'Save';
    $submitAction = 'index.php';
  } else if ($characterMode === 'view') {
    $characterAction = 'View';
    $submitText = 'Edit';

    if (!empty($_GET['character']) && !empty($_GET['id'])) {
      $submitAction = 'character.php?' . http_build_query(['mode' => 'edit', 'character' => $_GET['character'], 'id' => $_GET['id']]);
    }
  }
endif;

render('character.view', [
  'character' => $character,
  'characterMode' => $characterMode,
  'characterAction' => $characterAction,
  'submitText' => $submitText,
  'submitAction' => $submitAction
]);
