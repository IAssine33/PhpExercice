
<?php require_once("../controller/indexController.php");
          






echo "<body>";
    echo "<header>";
        require_once("../Partials/header.php");
    echo "</header>";
echo "<main>";

    echo require_once("../Partials/aside.php");
    var_dump($articles);

        // foreach($articles as $article){
        //    if ($article['isPublished'] && $article['author']=='David Trezeget'){
        //         echo "<h1>".$article['title']."</h1>";
        //         echo "<h3>".$article['author']."</h3>";
        //         echo "<p>".$article['content']."</p>";
        //         echo "<img src=".$article['img']." />";
        
        //    }
        
        // };
        
            foreach($articles as $article){


                echo "<h1>".$article['title']."</h1>";
                echo "<h3>".$article['author']."</h3>";
                echo "<img src=".$article['img']." />";

                if (isStringTooLong($article['content'])){

                    echo "<p>".substr($article['content'],0,20)."...</p>";  
                    
                } else { 
                    echo "<p>".$article['content']."...</p>";
                }
                    
            };

    echo "</main>";
    echo "<footer>";
            require_once("../Partials/footer.php");
    echo "</foote>";





//    ===================
// $tableau_1 = [
//     'un',
//     'deux',
//     'trois',
//     'quatre',
//     'cinq'
//     ];
//     print_r ($tableau_1);

//     foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10] as $valeur) {
//         echo $valeur . ' a pour carré ' . 
//         ($valeur**2) . ' et pour cube ' . 
//         ($valeur**3) . ".\n";
//         }







?>
