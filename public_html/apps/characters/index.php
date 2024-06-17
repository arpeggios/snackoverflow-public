<?php

require __DIR__ . '/inc/all.inc.php';

if (!empty($_POST)) {
  if ($_POST['action'] === 'create') {
    create_character();
  } else if ($_POST['action'] === 'edit') {
    edit_character();
  }

  header('Location: index.php');
  die();
} else if (!empty($_GET['action']) && $_GET['action'] === 'delete') {
  delete_character();

  header('Location: index.php');
  die();
}

$characterRepository = new CharacterRepository($pdo);
$characters = $characterRepository->fetch();

render('index.view', [
  'characters' => $characters
]);