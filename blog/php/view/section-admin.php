<section>
    <h2>FORMULAIRE DE CREATION D'ARTICLE</h2>
    <form class="admin" action="" method="POST">
        <input type="text" name="titre" required placeholder="entrer le titre">
        <textarea name="contenu" cols="60" rows="8" required placeholder="entrer le contenu"></textarea>
        <input type="text" name="image" required value="assets/img/photo1.jpg">
        <input type="text" name="datePublication" value="<?php echo date("Y-m-d H:i:s") ?>">
        <input type="text" name="categorie" required placeholder="entrez la catégorie">
        <button type="submit">PUBLIER L'ARTICLE</button>
        <div class="confirmation">
            <?php require_once "php/controller/form-articles.php" ?>
        </div>
    </form>
</section>