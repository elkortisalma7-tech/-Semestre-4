<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title> Mon blog </title>
    </head>
    <body>

    <h1> Bienvennue sur mon blog </h1>
    
    <div class=" grille-articles">
        <?php 
        foreach ($articles as $article ) :
        ?>
    <div class=" carte-article">
            <h2>
                <?= htmlspecialchars($article['titre'] ,ENT_QUOTES, 'UTF-8') ?>
            </h2>

            <?php if ($article['id'] == 1): ?>
    <small class="badge-special">⭐ À la une</small>
                <?php endif; ?>
            <p>
                <?= htmlspecialchars(substr($article['contenu'] ,0,100) , ENT_QUOTES,'UTF-8') ?>...
            </p>

            <span class="etiquette-categori <?php if ($article['categorie_couleur'] =='bleu'):?>bleu 
            <?php else:?>rose <?php endif;?>">
                <?= htmlspecialchars($article ['categorie_libelle'])?>
    
            </span>

            <p>
                <?= date('d M Y' ,strtotime($article['date_creation'] )) ?>
            </p>
    </div>
    <?php endforeach; ?>
        </div>
    </body>
</html>