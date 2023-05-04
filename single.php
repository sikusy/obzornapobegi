<?php get_header(); ?>
<div class="entry-content-media">
     <div class="post-thumb"> 
        <?php the_post_thumbnail('thumbnail'); 
        ?> 
        </div>
     </div>
     <ul class="post-nav group">
<?php
the_post_navigation( array(
'prev_text' => '<li class="prev">' "<strong>Предыдущая запись</strong>' '%title</li>',
'next_text' => '<li class="next">' '<strong>Следующая запись</strong>' %title</li>'
) );
 ?>
</ul>
<div id="comments">
<?php if ( comments_open() || get_comments_number() ) { comments_template(); } ?>
</div> 

<div id="content-wrap"> <?php the post(); ?>
<div class="row">

<?php get_footer(); ?>