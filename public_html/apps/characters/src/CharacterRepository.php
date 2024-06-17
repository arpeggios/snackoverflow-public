<?php

declare(strict_types=1);

class CharacterRepository
{
  public function __construct(private PDO $pdo)
  {
  }

  public function fetchCharacter(string $chr): ?CharacterModel
  {
    $stmt = $this->pdo->prepare('SELECT * FROM `characters` WHERE `char_name` = :selectedCharacter');

    $stmt->bindValue('selectedCharacter', $chr);
    $stmt->execute();
    $entry = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!empty($entry)) {
      return new CharacterModel(
        $entry['id'],
        $entry['char_name'],
        $entry['attack'],
        $entry['defense']
      );
    } else {
      return null;
    }
  }

  public function fetch(): array
  {
    $stmt = $this->pdo->prepare('SELECT * FROM `characters` ORDER BY `char_name` ASC');
    $stmt->execute();
    $models = [];
    $entries = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($entries as $entry) {
      $models[] = new CharacterModel(
        $entry['id'],
        $entry['char_name'],
        $entry['attack'],
        $entry['defense']
      );
    }

    return $models;
  }
}
