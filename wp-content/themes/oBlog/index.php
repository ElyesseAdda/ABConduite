<?php
// get_header est une fonction fournie par WP
// Elle va lire le contenu du fichier header.php et l'ajouter dans notre page
get_header();

?>
  
  <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
        <main class="col-lg-9">
<?php if(have_posts()): while(have_posts()) : the_post(); 
$category_id = get_cat_ID( 'Category Name' );
 
// Get the URL of this category
$category_link = get_category_link( $category_id );
?>
<!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
<article class="card">
  <div class="card-body">
    <a href="<?php the_permalink();?>"><h2 class="card-title"><?php the_title();?></h2></a>
    <p class="infos">
      Posté par <a href="#" class="card-link"><?php the_author();?></a> le <time><?php the_date();?></time> dans <a href="<?php echo esc_url( $category_link ); ?>" class="card-link">#<?php the_category(','); ?></a>
    </p>
    <p class="card-text"><?php the_content();?></p>
  </div>
</article>
<?php endwhile;
endif;
?>
<!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
<nav aria-label="Page navigation example" class="avec-bonus">
  <ul class="pagination justify-content-between">
    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-arrow-left"></i> Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">Next <i class="fas fa-arrow-right"></i></a></li>
  </ul>
</nav>

</main>

<?php get_sidebar(); ?>

<?php


get_footer();
?>