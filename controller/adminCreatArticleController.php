

<?php require_once("../Config/config.php"); ?>

<?php 

session_start();

if($_SESSION['username'] !== 'yassine'){
	header("Location:http://localhost:8888/php_blog/views/connection.php");
} 

function isRequestPost(){
        return $_SERVER["REQUEST_METHOD"] === "POST";
}        


function isFormDataValid(){
    
    return strlen($_POST['title']) > 2 && 
            strlen($_POST['content']) > 10 &&
            strlen($_POST['image']) > 5 ;
}


function getFormErrors() {
	$errors = [];

	if (mb_strlen($_POST['title']) < 2) {
		$errors[] = "Le titre doit faire plus de 2 caractères";
	}

	if (mb_strlen($_POST['title']) > 20) {
		$errors[] = "Le titre doit faire moins de 20 caractères";
	}

	if (mb_strlen($_POST['image']) < 3) {
		$errors[] = "L'image doit faire plus de 3 caractères";
	}

	if (mb_strlen($_POST['content']) < 5) {
		$errors[] = "Le contenu doit faire plus de 5 caractères";
	}

	if (mb_strlen($_POST['content']) > 200) {
		$errors[] = "Le contenu doit faire moins de 200 caractères";
	}

	return $errors;
}

  if(isRequestPost() && empty(getFormErrors())) {

        // je récupère la valeur des champs de formulaire envoyé
	    // grâce à $_POST, avec en clé le nom du champs à récupérer
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image = $_POST['image'];
		$createdAt = new DateTime();

    $handl = fopen("./articles.txt", "a");

	
	$contentToWrite = $title . ", " . $content . " créé : " .$createdAt->format("d/m/Y H:i:s e");

    fwrite($handl, $contentToWrite);

    fclose($handl);
        
} 