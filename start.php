<?php
require __DIR__ . '/header.php';
require __DIR__ . '/data.php';
?>


<article id="container">

    <div>
        <ul>
            <?php
            foreach ($teams as $team => $teamdata);
            ?>
            <li>


                <a href=><?php echo $teamdata['logo']; ?>
                    <?php echo $teamdata['city']; ?>
                    <?php echo $teamdata['url']; ?>
                    <?php echo $teamdata['league']; ?>
                    <?php echo $teamdata['uefa-coefficient-ranking']; ?>
                    <?php echo $teamdata['group']; ?></a>
            </li>
            <?php T_ENDFOREACH;

            ?>

        </ul>
    </div>



</article>

<?php require __DIR__ . '/footer.php'; ?>