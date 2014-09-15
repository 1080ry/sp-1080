<?php get_template_part( 'header' ); ?>
<?php if ( !is_home() && !is_front_page() ) : ?>
<?php get_template_part( 'bread' ); ?>
<?php endif; ?>

      <div class="special">
        <a href="#" class="btn">
          <img src="<?php bloginfo('template_url'); ?>/img/sp/special.jpg" alt="スペシャル">
        </a>
      </div>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <div id="single">
        <div class="box_title">
          <div class="box_time">
            <time class="time" datetime="<?php echo get_post_time('Y.m.d D'); ?>"><?php echo get_post_time('Y.m.d D'); ?></time>
          </div>
          <h1><?php the_title(); ?></h1>
        </div><!-- box_title -->

        <div class="ad">
          <img src="http://placehold.it/300x250">
        </div>
        <div class="content_entry">
          <?php the_content(''); ?>
        </div>
   </div>
      </div><!-- single -->
<?php endwhile; endif; ?>

<div class="box-ad-line"></div>
        <div class="ad">
          <p>スポンサーリンク</p>
<img src="http://placehold.it/300x250">
        </div>
<?php if ( !is_home() && !is_front_page() ) : ?>
<?php get_template_part( 'bread' ); ?>
<?php endif; ?>


<?php get_template_part( 'footer' ); ?>
  </body>
</html>