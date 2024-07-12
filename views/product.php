
<?php require_once("../controller/productController.php");?>


<body>
<?php require_once("../Partials/header.php");?>
    <main>
        <?php require_once("../Partials/aside.php");?>
        

		<form>

	<label >Categorie : </label>
	<select name="category">
    <option value="" selected disabled> --Choix--</option>
		<?php foreach($productCategories as $productCategorie) { ?>
			
			<option value="<?php echo $productCategorie; ?>"><?php echo $productCategorie; ?></option>
		<?php } ?>

	</select>

	<label>Prix minimum : </label>
	<input type="number" name="minPrice" min="<?php echo $productMinPrice; ?>" max="<?php echo $productMaxPrice; ?>"/>

	<label>Prix maximum : </label>
	<input type="number" name="maxPrice" min="<?php echo $productMinPrice; ?>" max="<?php echo $productMaxPrice; ?>" />


	<label >Trier par : </label>
	<select name="sort">

		<option value="">Par défaut</option>
		<option value="price">Prix</option>
        <option value="date">Date de creation</option>

	</select>

	<button type="submit">Filtrer</button>

</form>





<h2>Acheter un produit : </h2>

        <section class="flex">
                <?php foreach ($products as $product){ ?>
                    <article class="border">
                        <h1> <?php echo $product['name']?></h1>
                        <h2> <?php echo $product['price'] ?>€</h2>                  
                        <h2> <?php echo $product['category'] ?></h2>
                        <p> <?php echo $product['description'] ?></p>
                        <p> categorie : <?php echo $product['category'] ?></p>
                        <?php $createdAtDateTime = new DateTime($product['createdAt']); ?>
                        <p> Date de création : <?php echo $createdAtDateTime->format("d/m/Y H:i:s e"); ?></p>
                    </article>
            </article>    
                <?php } ?>
        </section>        
    </main>   
</body>
<footer>
    <?php require_once("../Partials/footer.php"); ?>
</footer>