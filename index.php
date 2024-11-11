<?php
require __DIR__ . "/header.php";
require __DIR__ . '/data.php';
?>

<article id="container">
    <div class="team-container">
        <?php
        $counter = 0;
        foreach ($teams as $team => $teamdata):
            $class = ($counter % 2 == 0) ? 'column-left' : 'column-right';
            $counter++;
        ?>
            <div class="team-info <?php echo $class; ?>">
                <img src='<?php echo htmlspecialchars($teamdata['logo']); ?>' alt="Logo of <?php echo htmlspecialchars($teamdata['city']); ?>">
                <p><?php echo htmlspecialchars($teamdata['city']); ?></p>
                <p>League: <?php echo htmlspecialchars($teamdata['league']); ?></p>
                <p>UEFA Ranking: <?php echo htmlspecialchars($teamdata['uefa-coefficient-ranking']); ?></p>
                <p>Group: <?php echo htmlspecialchars($teamdata['group']); ?></p>
                <a href="<?php echo htmlspecialchars($teamdata['url']); ?>">Link to club</a>
            </div>
        <?php endforeach; ?>

    </div>
</article>
<?php require __DIR__ . '/footer.php'; ?>