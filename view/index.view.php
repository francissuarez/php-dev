<?php require "pages/header.php"?>


    <?php require "pages/nav.php";     ?>

<?php require "pages/head.php";     ?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <?php foreach ($post as $posts):?>

                <li>
                    <?= $posts["username"] ?>


                </li>

            <?php endforeach; ?>
        </div>
    </main>


<?php require "pages/footer.php";     ?>


