<?php

class CharacterModel
{
  public function __construct(
    public int $id,
    public string $charName,
    public int $attack,
    public int $defense
  ) {
  }
}
