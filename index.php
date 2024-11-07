<?php
require __DIR__ . "/header.php";
require __DIR__ . '/data.php';
?>



<article id="container">
    <div class="team-container">
        <?php
        foreach ($teams as $team => $teamdata): ?>
            <img src='<?php echo $teamdata['logo']; ?>'>
            <p><?php echo $teamdata['city']; ?></p>
            <p>Leauge <?php echo $teamdata['league']; ?></p>
            <p>UEFA ranking <?php echo $teamdata['uefa-coefficient-ranking']; ?></p>
            <p>Group <?php echo $teamdata['group']; ?></p>
            <a href=" <?php echo $teamdata['url']; ?>">Link to club</a>
        <?php endforeach; ?>
    </div>
</article>
<?php require __DIR__ . '/footer.php'; ?>