<?php  
  get_header();
?>

    <div class="container">
      <!-- Home page2-->
      <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php if ( has_post_thumbnail() ) {?>
            <div class="col-xs-12 col-sm-4">
            <?php  the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?>
            </div>
          <?php } ?>
        <div class="col-xs-12 <?php if( has_post_thumbnail() ){ echo 'col-sm-8';} ?> ">
          <?php the_content() ?>
          <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>


        </div>
        <?php endif; ?>
      </div>
<?php  
  get_footer();
?>