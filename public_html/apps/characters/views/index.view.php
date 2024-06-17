<section>
  <button class='button create-button' onclick='location.href="character.php?mode=create"'>Create</button>
  <table>
    <thead>
      <th>Character Name 👤</th>
      <th>Attack 🗡</th>
      <th>Defense 🛡</th>
      <th>Edit</th>
    </thead>
    <tbody>
      <?php foreach ($characters as $character) : ?>
        <tr>
          <td>
            <a href='character.php?<?php echo http_build_query(['mode' => 'view', 'character' => $character->charName, 'id' => $character->id]); ?>'><?php echo e($character->charName); ?>
            </a>
          </td>
          <td><?php echo e($character->attack); ?></td>
          <td><?php echo e($character->defense); ?></td>
          <td>
            <a href='character.php?<?php echo http_build_query(['mode' => 'edit', 'character' => $character->charName, 'id' => $character->id]) ?>'><img role='link' src='assets/icons/edit_24dp_FILL0_wght400_GRAD0_opsz24.svg' aria-label='edit button' /></a>

            <a role='button' href='index.php?<?php echo http_build_query(['id' => $character->id, 'action' => 'delete']) ?>'><img src='assets/icons/delete_24dp_FILL0_wght400_GRAD0_opsz24.svg' aria-label='delete button' />
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</section>