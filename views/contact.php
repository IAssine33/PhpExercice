
<?php require_once("../controller/contactController.php");  ?>


<body>
    <?php require_once("../Partials/header.php"); ?>
    <main>
    <?php require_once("../Partials/aside.php"); ?>
        <form method="post">
            <label for="Name">Name
                <input type="text" name="lastname">
            </label>
            <label for="E-mail">E-mail
                <input type="E-mail" name="email" >
            </label>
            <label for="Message">Message
                <input type="text" name="message">
            </label>
            <button type="submit">Valider</button>
        </form>

        

        <?php if(isset($_REQUEST['lastname'])){ ?>

        <?php   if(checkIfFormIsValid($_REQUEST)){ ?>

                    <p>Merci <?php echo $_REQUEST['lastname']?>, votre message est bien envoyé, il sera traiter dans les bref delai.</p> 

        <?php   }else{ ?>

                    <p>Les données ne sont pas bonnes</p> 
          
<?php    } ?>
<?php } ?>
        
       

    
        

    </main>
</body>
<footer>
    <?php require_once("../Partials/footer.php"); ?>
</footer>

