

<?php require_once("../controller/reviewsController.php"); ?>

<body>
    <?php require_once("../Partials/header.php"); ?>
    <main>
    
        <?php require_once("../Partials/aside.php"); ?>
        <?php foreach( $reviews as $review ){?>
            <article>
                <h3> Name: <?php echo $review['user'];  ?></h3>
                <p>Message: <?php  echo $review['message'];  ?></p>
                <p>Note: <?php  echo $review['rating'];  ?></p>    
            </article> 
        <?php } ?>
            
    </main> 
</body>
<footer>
    <?php require_once("../Partials/footer.php"); ?>
</footer>
