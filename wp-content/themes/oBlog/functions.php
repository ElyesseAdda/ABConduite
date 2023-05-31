<?php
/*
    Ce fichier servira a mettre en place tout un tas de fonctionnalitées liées à Wordpres

    Grâce aux Hoock on a :
    - Linker nos css dans le bonne ordre sur l'ensemble du site
    - Linker un script JS sur l'ensemble du site 
    - On laisse wordpress généré la balise title dynamique avec le nom de l'article et le nom du site
*/





// Appel avec fonction anonyme
add_action("after_setup_theme", function(){
    
    //génértion de la balise title par
    add_theme_support('title-tag');

    //Ajout d'une image de mise en avant
    add_theme_support("post-thumbnails");
});


?>