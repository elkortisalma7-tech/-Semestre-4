<?php

$article = [
    [
        'id'=> 1 ,
        'titre ' => 'comment structrer',
        'contenu' => 'décovrer les disign',
        'image' => 'article-exepmle.png',
        'date_création' => '2026-11-11',
        'categorie_libelle' => 'Développement',
        'categorie_color' => 'red',

    ],
    [
        'id'=>2 ,
        'titre' => 'mitreser',
        'contenu' => 'interfacer',
        'image' => ' article-exemple.png',
        'date_création' => '2026-11-11',
        'categorie_libelle'=> 'Design UI/UX',
        'categorie_color' => ' rose',

    ]
];

echo " ARTICLE 1 :" .$article[0]['contenu']."(" .$article[0]['categorie_color'] .") <br>" ;

echo "ARTICLE 2 : " .$article[1]['contenu']."(".$article[1]['categorie_color'] .")";

    ?>