
<?php require_once("../Config/config.php"); ?>

<?php

require_once("../controller/connectionController.php");


function logUser(){
    session_start();
    $_SESSION['username'] = $_POST['username'];
}

function redirectToAdmin(){
        header("Location:http://localhost:8888/php_blog/views/adminCreatArticle.php");
}