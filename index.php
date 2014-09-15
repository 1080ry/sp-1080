<?php get_template_part( 'header' ); ?>
      <div class="special">
        <a href="#" class="btn">
          <img src="<?php bloginfo('template_url'); ?>/img/sp/special.jpg" alt="スペシャル">
        </a>
      </div>
      <div class="entry-list">
        <?php if(is_category()): ?>
        <div class="main-cat">
          <h1 class="list_title">
            <strong><?php single_cat_title(); ?></strong>の記事一覧
          </h1>
        </div>
     <?php endif; ?>
　　　<?php if(is_tag()): ?>
        <div class="main-cat">
          <h1 class="list_title">
            <strong><?php single_tag_title(); ?></strong>の記事一覧
          </h1>
        </div>
        <?php endif; ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <article class="entry">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
            <?php if ( has_post_thumbnail()) : ?>
            <figure class="figure">
              <p>
                <?php the_post_thumbnail('spicatch'); ?>
              </p>
              <?php endif; ?>
            </figure>
            <div class="entry-title">
              <div class="entry-header">
                <div class="box-timedate">
                  <p>
                    <?php echo get_post_time('Y.m.d D'); ?>
                  </p>
                </div>
                <?php
 $cat = get_the_category();
 $cat = $cat[0];
 $category= $cat->cat_name;
 $catslug = $cat->slug;
 ?>
                <div class="<?php echo $catslug; ?> cat">
                  <p>
                    <?php echo $category ?>
                  </p>
                </div>
              </div>
              <div class="entry-h1">
                <h1>
                  <?php the_title(); ?>
                </h1>
              </div>
            </div>
          </a>
        </article>
        <?php endwhile; endif; ?>
<nav id="paging">
  <div class="btn_back"><?php previous_posts_link('<i class="fa fa-angle-double-left"></i> 前へ')?></div>
  <div class="page_num">
   <p> <?php max_show_page_number(''); ?>ページ中<strong><?php show_page_number(''); ?>ページ目</strong> </p>
  </div>
  <div class="btn_next"><?php next_posts_link('次へ <i class="fa fa-angle-double-right"></i>')?>
  </div>
 </nav>
      </div>
      <!--/entry-list-->
<div class="box-ad-line"></div>
        <div class="ad">
          <p>スポンサーリンク</p>
<img src="http://placehold.it/300x250">
        </div>
<?php get_template_part( 'footer' ); ?>
  </body>
<script type="text/javascript">
$(function() {
        var a = $("#menu");
        $(".menu_btn").click(function() {
            $(this).toggleClass("active"), a.slideToggle(300)
        }), $("#list_more").on("click", function() {
            return $(this).hide(), $("#category_list li:hidden").slideDown(), !
                1
        })
    })
</script>
</html>