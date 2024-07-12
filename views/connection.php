

<?php require_once("../controller/connectionController.php");  ?>


<body>
    <main>
        <form method="post">
            <label >Identifiant
                <input type="text" name="username">
            </label>
            <label>Mot de passe
                <input type="password" name="password" >
            </label>
            <button type="submit">Connection</button>
        </form>

        <?php if($_SERVER["REQUEST_METHOD"] === "POST"){ ?>

            <?php if(($_POST['username']) === "yassine" && ($_POST['password']) === "azerty"){ ?>
                    
                        <p>Vous êtes bien connecté</P>

                    <?php logUser(); ?>
                    <?php redirectToAdmin(); ?>

            <?php   }else{ ?>

                        <p>Identifiant ou Mot de passe incorrecte</p> 
            
    <?php    } ?>
<?php } ?>


