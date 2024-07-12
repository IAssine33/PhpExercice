<?php require_once("../controller/commandeOrderController.php") ?>





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
        <h2>Afficher la liste de commandes : </h2>

        <section class="flex">
           <?php foreach ($orders as $order){ ?>
                <article class="border">
            <h1> Id Client :<?php echo $order['id']?></h1>
                        <h2>Client : <?php echo $order['customer'] ?></h2>                  
                        <?php foreach ($order['products'] as $product) {?>
                            <p>Produit : <?php echo $product ?></p>
                        <?php } ?>  
                        <p>Quantitée :<?php echo $order['amount'] ?></p>
                        <?php $createdAtDateTime = new DateTime($order['date']); ?>
                        <p> Date : <?php echo $createdAtDateTime->format("d/m/Y"); ?></p>
                </article>
          <?php } ?>

        </section>





    </main>
</body>
        
