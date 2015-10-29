<?php get_header(); ?>

  <div class="container">   
    <div class="row">
      
      <div class="col-md-9">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">            

            <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail();
              }             ?>
            <p class="featured-image"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"></p>

            <h1><?php the_title(); ?></h1>
            <p class="entry-meta"><em>
              <span class="author">By <?php the_author(); ?></span>
              on <span class="time"><?php echo the_time('l, F jS, Y');?></span>
              in <span class="category"><?php the_category( ', ' ); ?></span>.
              <span class="comments"><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></span>
            </em></p>
          </div>

          <?php the_content(); ?>

          <hr>

          <?php comments_template(); ?>

        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>


      </div>
      
      <?php get_sidebar( 'blog' ); ?>

    </div>

<?php get_footer(); ?>