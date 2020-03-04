<section>
            <h2>liste des articles EN PHP ET SQL (READ)</h2>
            <div class="listeArticle">
<?php

$pdo = new PDO("mysql:host=localhost;dbname=blog;charset=utf8;", "root", "");

$requeteSQL =
<<<CODESQL

SELECT * FROM `articles`
ORDER BY datePublication DESC

CODESQL;


$pdoStatement = $pdo->query($requeteSQL);

$tabLigne = $pdoStatement->fetchAll();

foreach($tabLigne as $tabAsso)
{
    $id         = $tabAsso["id"];
    $titre      = $tabAsso["titre"];
    $contenu    = $tabAsso["contenu"];
    $image      = $tabAsso["image"];
    $categorie  = $tabAsso["categorie"];


    echo
<<<CODEHTML

    <article class="$categorie">
        <img src="$image" alt="photo1">
        <h3>$titre</h3>
        <p>$contenu</p>
    </article>

CODEHTML;
}


?>
        </section>

        <section>
            <h2>liste des articles EN HTML</h2>
            <div class="listeArticle">
                <article>
                    <img src="assets/img/photo2.jpeg" alt="photo1">
                    <h3>Ligue1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
                </article>
                <article>
                    <img src="assets/img/photo3.jpeg" alt="photo1">
                    <h3>Coronavirus</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
                </article>
                <article>
                    <img src="assets/img/photo4.jpeg" alt="photo1">
                    <h3>Cuisine</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
                </article>
                <article>
                    <img src="assets/img/photo1.jpeg" alt="photo1">
                    <h3>titre article1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
                </article>
                <article>
                    <img src="assets/img/photo1.jpeg" alt="photo1">
                    <h3>titre article2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
                </article>
                <article>
                    <img src="assets/img/photo1.jpeg" alt="photo1">
                    <h3>titre article3</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi rerum placeat! Nisi ullam eaque nobis sequi quod obcaecati ipsum ipsa repellendus facilis tenetur delectus quos hic tempora, soluta veritatis?</p>
                </article>
            </div>
        </section>


        <section>
            <h2>news</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, amet incidunt inventore nemo vero culpa, beatae, architecto explicabo officia adipisci iste. Nobis, maiores ea! Ipsum ullam ut fugit accusantium ea!</p>
            <img src="assets/img/photo5.jpeg" alt="photo1">
        </section>
        