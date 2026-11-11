
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mon Blog</title>
</head>

<body>

    <h1>Bienvenue sur mon Blog</h1>

    <div class="grille-articles">

        <?php foreach ($articles as $article): ?>

            <div class="carte-article">

                <h2>
                    <?= htmlspecialchars($article['titre'], ENT_QUOTES, 'UTF-8') ?>
                </h2>

                <p>
                <p>
    <?= htmlspecialchars(substr($article['contenu'], 0, 100), ENT_QUOTES, 'UTF-8') ?>...
</p>
                </p>

                <span>
                    <?= htmlspecialchars($article['categorie_libelle'], ENT_QUOTES, 'UTF-8') ?>
                </span>

                <p>
                    <?= date('d M Y', strtotime($article['date_creation'])) ?>
                </p>

            </div>

        <?php endforeach; ?>

    </div>

</body>
</html>
