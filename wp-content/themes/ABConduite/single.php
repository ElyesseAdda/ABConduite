<?php get_header();
?>

<div class="title">
    <h1>Les <span>Actualités</span></h1>
    <p>Découvrez ce qui a changer et nos offres du moment</p>
    </div>

    <div class="articles">
        <?php 
        if(have_posts()): while(have_posts()) : the_post();
        ?>
        <div class="card--article">
            <div class="article--left">
                <img src="<?php echo catch_that_image() ?>" >
            </div>
            <div class="article--right">
                <h2><?php the_title();?></h2>
                <h3>Découvrez nos offres du moment</h3>
                <p><?php the_content();?></p>
            </div>
        </div>
        <div class="card--article">
            <div class="article--left">
                <img src="asset/img/ImageAB.png" >
            </div>
            <div class="article--right">
                <h2>Title</h2>
                <h3>Découvrez nos offres du moment</h3>
                <p>Croché du droit nuque ouverte reste plus qu'a visé la lucarne</p>
            </div>
        </div>
    </div>

    <?php 
        endwhile;
        endif;
        get_footer();
    ?>