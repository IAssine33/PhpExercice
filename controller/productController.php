

<?php
$products = [
    [
        'name' => 'Aspirateur',
        'price' => 350,
        'category' => 'electro-menager',
        'description' => 'Description du produit 1',
        'createdAt' => '21-03-2024'
    ],
    [
        'name' => 'Frigo',
        'price' => 200,
        'category' => 'electro-menager',
        'description' => 'Description du produit 2',
        'createdAt' => '22-03-2024'
    ],
    [
        'name' => 'Four',
        'price' => 300,
        'category' => 'electro-menager',
        'description' => 'Description du produit 3',
        'createdAt' => '23-03-2000'
    ],
    [
        'name' => 'Télévision',
        'price' => 400,
        'category' => 'electro-menager',
        'description' => 'Description du produit 4',
        'createdAt' => '24-03-2024'


    ],
    [
        'name' => 'Ordinateur',
        'price' => 500,
        'category' => 'informatique',
        'description' => 'Description du produit 5',
        'createdAt' => '25-03-2024'
    ],
    [
        'name' => 'Tablette',
        'price' => 600,
        'category' => 'informatique',
        'description' => 'Description du produit 6',
        'createdAt' => '26-05-2009'
    ],
    [
        'name' => 'Smartphone',
        'price' => 700,
        'category' => 'informatique',
        'description' => 'Description du produit 7',
        'createdAt' => '27-03-2024'
    ],
    [
        'name' => 'Appareil photo',
        'price' => 800,
        'category' => 'informatique',
        'description' => 'Description du produit 8',
        'createdAt' => '28-09-2024'
    ],
    [
        'name' => 'Vélo',
        'price' => 900,
        'category' => 'sport',
        'description' => 'Description du produit 9',
        'createdAt' => '29-03-2024'
    ],
    [
        'name' => 'Tapis de course',
        'price' => 1000,
        'category' => 'sport',
        'description' => 'Description du produit 10',
        'createdAt' => '17-03-2024'
    ],
    [
        'name' => 'Haltères',
        'price' => 1100,
        'category' => 'sport',
        'description' => 'Description du produit 11',
        'createdAt' => '19-03-2024'
    ],
    [
        'name' => 'Ballon de foot',
        'price' => 1200,
        'category' => 'sport',
        'description' => 'Description du produit 12',
        'createdAt' => '18-03-2024'


    ]
];
//  var_dump($_GET['category'])


$productCategories = [];

foreach($products as $product){
    if(!in_array($product['category'], $productCategories)){
        $productCategories[] = $product['category'];
    }
}

$productMinPrice = $products[0]['price'];

foreach($products as $product) {
	if ($product['price'] < $productMinPrice) {
		$productMinPrice = $product['price'];
	}
}


$productMaxPrice = $products[0]['price'];

foreach($products as $product) {
	if ($product['price'] > $productMaxPrice) {
		$productMaxPrice = $product['price'];
	}
}

if (!empty($_GET['category'])) {
	$products = array_filter($products, function($product) {
		return $product['category'] === $_GET['category'];
	});
}

if (!empty($_GET['minPrice'])) {
	$products = array_filter($products, function($product) {
		return $product['price'] >= $_GET['minPrice'];
	});
}

if (!empty($_GET['maxPrice'])) {
	$products = array_filter($products, function($product) {
		return $product['price'] <= $_GET['maxPrice'];
	});
}




// si j'ai un parametre GET "sort" et qu'il est égal à "price"
if (isset($_GET['sort']) && $_GET['sort'] === 'price') {

	// alors j'utilise la fonction PHP usort qui permet de trier un tableau
	// je trie en fonction du prix
	// usort ne retourne pas de nouveau tableau, mais modifie le tableau
	// original ($products)
	usort($products, function ($a, $b) {
		return $a['price'] <=> $b['price'];
	});
}

// function checkCategory(category)

// $productsTable = array_filter($products, )



if (isset($_GET['sort']) && $_GET['sort'] === 'date') {


    usort($products, function ($a, $b) {
        $productA = new DateTime($a['createdAt']);
        $productB = new DateTime($b['createdAt']);

		return  $productA <=> $productB;
	});
}


?>


 

