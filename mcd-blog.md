# MCD complet du Blog

## 1. Les entités et leurs attributs

### VILLE
- <u>id_ville</u>
- nom_ville

### AUTEUR
- <u>id_auteur</u>
- nom_auteur
- prenom_auteur
- email_auteur

### ARTICLE
- <u>id_article</u>
- titre_article
- contenu_article
- date_publication
- statut_article
- image_article

### CATEGORIE
- <u>id_categorie</u>
- nom_categorie

---

## 2. Les relations et les cardinalités

### Relation 1 : habite
- VILLE (0,N)
- AUTEUR (1,1)

Une ville peut accueillir zéro ou plusieurs auteurs.
Un auteur habite dans une seule ville.

### Relation 2 : rédige
- AUTEUR (0,N)
- ARTICLE (1,1)

Un auteur peut rédiger zéro ou plusieurs articles.
Un article est rédigé par un seul auteur.

### Relation 3 : regroupe
- CATEGORIE (0,N)
- ARTICLE (1,1)

Une catégorie peut regrouper zéro ou plusieurs articles.
Un article appartient à une seule catégorie.

---

## 3. Schéma global du MCD

```text
VILLE (0,N) ─── habite ─── (1,1) AUTEUR

AUTEUR (0,N) ─── rédige ─── (1,1) ARTICLE

CATEGORIE (0,N) ─── regroupe ─── (1,1) ARTICLE
```

## 4. Vérification du MCD

- 4 entités présentes : VILLE, AUTEUR, ARTICLE, CATEGORIE.
- 3 relations présentes : habite, rédige, regroupe.
- Les cardinalités sont respectées.
- Les identifiants sont soulignés.
- La donnée calculée `duree_lecture` est absente.

**Conclusion :** Le MCD complet du Blog est construit à partir des entités, relations et cardinalités validées précédemment.