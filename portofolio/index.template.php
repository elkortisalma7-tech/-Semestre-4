<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon portofolio </title>
</head>
<body>
    <header>
        <h2> <?= $nom ?></h2>
        <p> <?= $formations ?></p>
    </header>
<nav>
<a href="#acceuil"> Acceuil</a>
<a href="#blog"> Mon blog</a>
<a href="#competences"> Competence</a>
<a href="#projets"> Projet</a>
<a href="#contact"> Contact</a>

</nav>

<main>

<section id="acceuile">
<h2><strong>bienvennue sur mon portofolio .</strong> .</h2>
<p> je suis Apprenante en develeppement web .</p>
</section>

<section id="blog">
<h2> Mon blog</h2>
<img src="blog.png" alt=" mon blog">
<p> developeur ,Apprendre en partager .</p>
</section>

<section id="competences">
 <h2> Mes competences .</h2>
 <?php foreach ($competences as $competence): ?>
    <?=  $competence ?>
    <?php endforeach ;?>
</section>

<section id="projets">
 <h2> Mon projets .</h2>
 <?php foreach ($projets as $projet): ?>
    <?=  $projet ?>
    <?php endforeach ;?>
</section>
</main>
<footer id="contact">
<h2> Contact</h2>
<p> contactez-moi.</p>
<p> <strong> SALMA EL KORTI </strong></p>
</footer>
</body>
</html>