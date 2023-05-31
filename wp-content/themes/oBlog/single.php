<?php  get_header(); 
 if(have_posts()): while(have_posts()) : the_post();
 $category_id = get_cat_ID( 'Category Name' );
 
 // Get the URL of this category
 $category_link = get_category_link( $category_id );
?>
      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
        <main class="col-lg-12">

<!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
<article class="card">
  <div class="card-body">
    <h2 class="card-title"><?php the_title();?></h2>
    <p class="infos">
      Posté par <a href="#" class="card-link"><?php the_author();?></a> le <time><?php the_date();?></time> dans <a href="<?php echo esc_url( $category_link ); ?>" class="card-link">#<?php the_category(','); ?></a>
    </p>
    <p class="card-text"><?php the_content();?></p>
  </div>
</article>

</main>


<?php   
endwhile;
    endif;
    
get_footer(); ?>