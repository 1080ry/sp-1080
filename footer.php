<footer id="footer">
   <section class="footer_cat">
    <h1>ブログ カテゴリー</h1>
    <ul>
     <li><a href="<?php bloginfo('url'); ?>/">カテゴリー</a></li>
     <li><a href="<?php bloginfo('url'); ?>/">カテゴリー</a></li>
     <li><a href="<?php bloginfo('url'); ?>/">カテゴリー</a></li>
     <li><a href="<?php bloginfo('url'); ?>/">カテゴリー</a></li>
     <li><a href="<?php bloginfo('url'); ?>/">カテゴリー</a></li>
     <li><a href="<?php bloginfo('url'); ?>/">カテゴリー</a></li>
     <li class="last"><a href="<?php bloginfo('url'); ?>/">カテゴリー</a></li>
    </ul>
   </section><!-- /footer_cat -->

<nav class="footer_menu">
  <ul>
    <li><a href="<?php bloginfo('url'); ?>"><i class="fa fa-home"></i>HOME</a></li>
    <li><a href="<?php bloginfo('url'); ?>/sitemap">サイトマップ</a></li>
  </ul>
</nav><!-- /footer_menu -->

<div class="copyright">
  <small>©<?php bloginfo('name'); ?></small>
</div>

<div class="pagetop">
  <a href="#logo">
    <div class="pagetop-arrow"></div>
    <p>PAGE TOPへ</p>
  </a>
</div><!-- /page topへ -->

<div class="pc-switch-footer">
 <a href="<?php echo("http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>?pc-switcher=1">PCサイト</a>
</div>


</footer>
</div>

<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/sp-1080.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/smoothScroll.js"></script>

<!-- sns -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=491469110965765";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script type="text/javascript" src="http://static.evernote.com/noteit.js"></script>