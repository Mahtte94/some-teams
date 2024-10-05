<?php

require_once __DIR__ . "/header.php";
require_once __DIR__ . "/data.php";

$sortBy = 'uefa-coefficient-ranking';
$sortValues = [];

foreach ($teams as $teamName => $teamInfo) {
    $sortValues[] = $teamInfo[$sortBy];
}

array_multisort($sortValues, SORT_ASC, $teams);

?>

<main>

    <?php

    foreach ($teams as $teamName => $teamInfo) { ?>
        <div class="cards">
            <h2><?= $teamName ?></h2>
            <p>
                <strong><?= ucwords('league') . ": "?></strong> <?= $teamInfo['league']; ?>
            </p>
            <p>
                <strong><?= ucwords('uefa-coefficient-ranking') . ": "?></strong> <?= $teamInfo['uefa-coefficient-ranking'];  ?>
            </p>
            <p>
                <strong><?= ucwords('city') . ": "?></strong> <?= $teamInfo['city'];  ?>
            </p>
            <p>
               <strong><?= ucwords('group') . ": "?></strong> <?= $teamInfo['group']; ?>
            </p>
            <img src="<?= $teamInfo['logo'] ?>" alt="<?= $teamName ?>" />
            <a href="<?= $teamInfo['url']; ?>">
                <?= $teamName; ?>
            </a>
        </div>
    <?php
    }

    ?>

</main>

<?php

require_once __DIR__ . "/footer.php";

?>