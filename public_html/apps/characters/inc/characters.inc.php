<?php

declare(strict_types=1);

function create_character(): void
{
  global $pdo;

  $post_char_name = (string) ($_POST['character-name'] ?? '');
  $post_attack = (int) ($_POST['attack'] ?? '');
  $post_defense = (int) ($_POST['defense'] ?? '');

  $stmt = $pdo->prepare("INSERT INTO `characters` (`char_name`, `attack`, `defense`) VALUES (:char_name, :attack, :defense);");

  $stmt->bindValue('char_name', $post_char_name);
  $stmt->bindValue('attack', $post_attack);
  $stmt->bindValue('defense', $post_defense);
  $stmt->execute();
}

function edit_character(): void
{
  global $pdo;

  $post_char_name = (string) ($_POST['character-name'] ?? '');
  $post_attack = (int) ($_POST['attack'] ?? '');
  $post_defense = (int) ($_POST['defense'] ?? '');
  $post_id = (int) ($_POST['id'] ?? '');

  $stmt = $pdo->prepare("UPDATE `characters` SET `char_name` = :char_name, `attack` = :attack, `defense` = :defense WHERE `id` = :id");

  $stmt->bindValue('char_name', $post_char_name);
  $stmt->bindValue('attack', $post_attack);
  $stmt->bindValue('defense', $post_defense);
  $stmt->bindValue('id', $post_id);
  $stmt->execute();
}

function delete_character(): void
{
  if (!empty($_GET['id'])) {
    global $pdo;

    $get_id = (int) ($_GET['id'] ?? '');

    $stmt = $pdo->prepare("DELETE FROM `characters` WHERE `id` = :id");
    $stmt->bindValue('id', $get_id);
    $stmt->execute();
  } else {
    throw new Exception('ID is blank');
  }
}
