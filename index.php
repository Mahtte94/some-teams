<?php

require_once __DIR__ . "/header.php";
require_once __DIR__ . "/data.php";

?>

<main>

    <?php

    foreach ($teams as $teamName => $teamInfo) { ?>
        <h2><?= $teamName ?></h2>
        <p>
            <?= ucwords('league') . ": " . $teamInfo['league']; ?>
        </p>
        <p>
            <?= ucwords('uefa-coefficient-ranking') . ": " . $teamInfo['uefa-coefficient-ranking'];  ?>
        </p>
        <p>
            <?= ucwords('city') . ": " . $teamInfo['city'];  ?>
        </p>
        <a href="<?= $teamInfo['url']; ?>">
            <?= $teamName; ?>
        </a>
        <img src="<?= $teamInfo['logo']?>"/>
        <p><?= ucwords('group') . ": " . $teamInfo['group']; ?></p>

    <?php
    }

    ?>


</main>

<?php

require_once __DIR__ . "/footer.php";

?>