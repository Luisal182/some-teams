<?php
require __DIR__ . "/header.php";
require __DIR__ . '/data.php';
?>


<article id="container">
    <div class="team-container">
        <?php
        foreach ($teams as $key => $value): ?>
            <img src='<?php echo $value['logo']; ?>'>

            <p><?php echo $value['city']; ?></p>

            <p>Leauge <?php echo $value['league']; ?></p>
            <p>UEFA ranking <?php echo $value['uefa-coefficient-ranking']; ?></p>
            <p>Group <?php echo $value['group']; ?></p>
            <a href=" <?php echo $value['url']; ?>">Link to club</a>
        <?php endforeach; ?>
    </div>

</article>

<?php require __DIR__ . '/footer.php'; ?>