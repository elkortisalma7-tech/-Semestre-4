<?php foreach($categorie as $cat):?>
<nav>
    <a href=" categorie.php? id=<?= $cat['id']?> >">
<?= htmlspecialchars($cat['nom'])?>
<?php endforeach; ?>
    </a>
</nav>
