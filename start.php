<?php
require __DIR__ . '/header.php';
require __DIR__ . '/data.php';
?>


<article id="container">

    <div>
        <ul>
            <?php
            foreach ($teams as $key => $teamss);
            ?>
            <li>
                <a href=><?php echo $teams['logo']; ?>
                    <?php echo $teamss['city']; ?>
                    <?php echo $teamss['url']; ?>
                    <?php echo $teamss['league']; ?>
                    <?php echo $teamss['uefa-coefficient-ranking']; ?>
                    <?php echo $teamss['group']; ?></a>
            </li>
            <?php T_ENDFOREACH;

            ?>

        </ul>
    </div>
    

</article>

<?php require __DIR__ . '/footer.php'; ?>