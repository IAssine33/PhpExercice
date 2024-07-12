

<?php require_once("../Config/config.php"); ?>
<?php 


session_start();

if($_SESSION['username'] !== 'yassine'){
	header("Location:http://localhost:8888/php_blog/views/connection.php");
} 
     
    file_put_contents('../views/articles.txt', '');