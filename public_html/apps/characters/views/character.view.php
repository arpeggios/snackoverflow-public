<?php if ($characterMode === 'create' || $characterMode === 'edit') : ?>
  <div id='form-name'><?php echo e($characterAction); ?> Character</div>
<?php endif; ?>

<form action='<?php echo e($submitAction); ?>' method='POST' id='edit-character-form'>
  <div id='form-grid'>
    <?php if ($characterMode === 'edit') : ?>
      <input type='hidden' name='id' value='<?php echo e($_GET['id']) ?>' />
    <?php endif ?>
    <?php if ($characterMode === 'create' || $characterMode === 'edit') { ?>
      <input type='hidden' name='action' value='<?php echo e($characterMode) ?>' />

      <label for='character-name'>Character Name 👤</label>
      <input type='text' name='character-name' id='character-name' value='<?php if (isset($character)) echo e($character->charName); ?>' required>
      </input>

      <label for='attack'>Attack 🗡</label>
      <input type='number' name='attack' id='attack' value='<?php if (isset($character)) echo e($character->attack); ?>' required></input>

      <label for='defense'>Defense 🛡</label>
      <input type='number' name='defense' id='defense' value='<?php if (isset($character)) echo e($character->defense); ?>' required></input>

    <?php } else if ($characterMode == 'view') { ?>
      <span class='selected-character-label'>Character Name 👤</span>
      <span class='selected-character-value'><?php echo e($character->charName); ?></span>

      <span class='selected-character-label'>Attack 🗡</span>
      <span class='selected-character-value'><?php echo e($character->attack) ?></span>

      <span class='selected-character-label'>Defense 🛡</span>
      <span class='selected-character-value'><?php echo e($character->defense); ?></span>
    <?php } ?>

    <button type='submit'><?php echo e($submitText) ?></button>
  </div>
</form>