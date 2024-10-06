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
                <b><?= ucwords('league') . ": " ?></b> <?= $teamInfo['league']; ?>
            </p>

            <p>
                <b><?= ucwords('uefa-coefficient-ranking') . ": " ?></b> <?= $teamInfo['uefa-coefficient-ranking'];  ?>
            </p>

            <p>
                <b><?= ucwords('city') . ": " ?></b> <?= $teamInfo['city'];  ?>
            </p>

            <p>
                <b><?= ucwords('group') . ": " ?></b> <?= $teamInfo['group']; ?>
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