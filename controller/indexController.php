<?php require_once("../Config/config.php"); ?>

<?php




$articles = [
    [
        'title' => 'Article 1',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "https://static.vecteezy.com/system/resources/thumbnails/009/926/551/small_2x/3d-blog-writer-working-on-article-character-illustration-png.png",
        'isPublished' => true,
        'author' => 'David Robert',
    ],
    [
        'title' => 'Article 2',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "https://static.vecteezy.com/system/resources/thumbnails/009/926/551/small_2x/3d-blog-writer-working-on-article-character-illustration-png.png",
        'isPublished' => false,
        'author' => 'David Rhouiller',
    ],
    [
        'title' => 'Article 3',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "https://static.vecteezy.com/system/resources/thumbnails/009/926/551/small_2x/3d-blog-writer-working-on-article-character-illustration-png.png",
        'isPublished' => true,
        'author' => 'David Trezeget',
    ]
];

function isStringTooLong($checkString){
    return strlen($checkString)>20;
}






?>