<?php
/*
    Ce fichier servira a mettre en place tout un tas de fonctionnalitées liées à Wordpres

    Grâce aux Hoock on a :
    - Linker nos css dans le bonne ordre sur l'ensemble du site
    - Linker un script JS sur l'ensemble du site 
    - On laisse wordpress généré la balise title dynamique avec le nom de l'article et le nom du site
*/



function loadStylesAndScripts(){
    
    //Hey WP, je veux que tu ajoute ce script JS à la page
    wp_enqueue_script(
        "index-js",
        get_theme_file_uri("assets/index.js")
    );


    // A avant que j'oublis, je veux bien que tu me charge les fichiers css suivants
    wp_enqueue_style(
        "style-css",
        get_theme_file_uri("/assets/css/style.css")
    );
    
}

/*
* add_action : signifie qu'on veut exécuter quelque chose à un moment précis durant le chargement de wordpress
* Prend en parmêtre deux chose :
* - l'evenement écouté : c'est a dire a qeule moement on veut exécuter des choses
* - la suite d'instructions à exéctuer sous forme d'une fonction existante ou d'une fonction anonyme
*/

add_action("wp_enqueue_scripts", 'loadStylesAndScripts');



?>

<?php function catch_that_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];

if(empty($first_img)){ //Defines a default image
$first_img = "/images/default.jpg";
}
return $first_img;
}
?>