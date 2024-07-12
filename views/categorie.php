

<?php require_once("../controller/categorieController.php"); ?>



<body>
    <main>

    <?php require_once("../Partials/header.php"); ?>

    <main>

    <?php require_once("../Partials/aside.php"); ?>

            <!-- <?php  foreach ($categories as $category ){
                echo $category['name'];
            }
           
            ?> -->

            <?php  foreach ($categories as $category ){?>
                <article>

                    <h2> <?php echo $category['name'];?></h2>
                    
                </article>
            <?php }; ?>
                    
                        
            

    </main>
    <footer>
        <?php require_once("../Partials/footer.php"); ?>
    </footer>
</body>