<?php get_template_part( 'header' ); ?>

<?php if ( !is_home() && !is_front_page() ) : ?>
<?php get_template_part( 'bread' ); ?>
<?php endif; ?>

<div class="special">
<a href="#" class="btn"><img src="<?php bloginfo('template_url'); ?>/img/sp/special.jpg" alt="スペシャル"></a>
</div>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div id="single">
 <div class="box_title">
  <div class="box_time">
    <time class="time" datetime="<?php echo get_post_time('Y.m.d D'); ?>"><?php echo get_post_time('Y.m.d D'); ?></time>

<?php
 $cat = get_the_category();
 $cat = $cat[0];
 $category= $cat->cat_name;
 $catslug = $cat->slug;
 ?>
     <div class="<?php echo $catslug; ?> cat">
      <p><?php echo $category ?></p>
     </div>
  </div>

  <div class="tag">
   <?php the_tags('<ul><li>','</li><li>','</li></ul>');?>
  </div>

  <h1><?php the_title(); ?></h1>
</div><!-- box_title -->

 <div class="ad">
  <img src="http://placehold.it/300x250">
 </div>

 <div class="content_entry">
  <?php the_content(''); ?>
 </div>


 <div class="box-sns">
  <?php SocialButtonVertical(); ?>
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

<div class="box_paging">

 <div class="prev">
 <?php if(get_adjacent_post(true, '', true)) {?>
 <?php previous_post_link('%link', '&laquo; 前の記事へ', TRUE); ?>
 <?php }else{ ?>
  <span>最初の記事です</span>
<?php } ?>
 </div>

 <div class="next">
 <?php if(get_adjacent_post(true, '', false)) {?>
 <?php next_post_link('%link ', '次の記事へ &raquo;', TRUE); ?>
 <?php }else{  ?>
  <span>最新の記事です</span>　
 <?php } ?>
 </div>

</div>

<?php get_template_part( 'footer' ); ?>

</body>
</html>