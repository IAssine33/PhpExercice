
<?php require_once("../controller/adminCreatArticleController.php"); ?>


<body>
    <?php require_once("../Partials/header.php"); ?>
    <main>
        <?php require_once("../Partials/aside.php"); ?>
        <form method="post">
            <div>
            <label>Title:
                <input type="text" name="title">
            </label>
            </div>
            <div>
            <label>Content:
                <input type="E-mail" name="content" >
            </label>
            </div>
            <div>
            <label>Image:
                <input type="text" name="image">
            </label>
            </div>
            <div>
            <button type="submit">Valider</button>
            </div>
        </form>


        <?php if (isRequestPost()) { ?>

<?php if (empty(getFormErrors())) { ?>

    <p>L'article a bien été enregistré</p>

<?php } else { ?>

    <?php foreach(getFormErrors() as $error) { ?>

        <p><?php echo $error; ?></p>

    <?php }  ?>

<?php } ?>

<?php } ?>
        </main>
    <footer>
            <?php require_once("../Partials/footer.php"); ?>
    </footer>    
