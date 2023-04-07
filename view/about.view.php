<?php require "pages/header.php"?>


<?php require "pages/nav.php";     ?>

<?php require "pages/head.php";     ?>
    <main>
        <div ">
            <h1 class="capitalize text-2xl mx-auto max-w-7xl py-6 sm:px-6 font-bold lg:px-8 text-blue-900"> <?= $name ?></h1>

            <?php foreach ($post as $posting) {
                        echo "<li class='mx-auto max-w-7xl sm:px-6 lg:px-8 text-blue-900'>" .$posting["body"] . "</li>";
            }

//            dd($post);
            ?>

        </div>
    </main>


<?php require "pages/footer.php";     ?>