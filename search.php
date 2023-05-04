<?php get_header(); ?>
<div id="content-wrap">
<div class="row">
<div id="main" class="eight columns">
<h3>Результаты поиска:</h3>
while (have_posts()) : the_post(); ?>
<article class="entry">
<header class="entry-header">
<h2 class="entry-title">
<a href="<?php the_permalink(); ?>" title="Ссылка на: <?php the_title_attribute(); ?>"> <?php the_title(); ?>
</a>
</h2>
<div class="entry-meta">
<ul>
<li><?php the_time('j F Y') ?></li>
<span class="meta-sep">8bull;</span> <li><a href="#" title="" rel="category tag"><?php the_category(","); ?></a></li>
<span class="meta-sep">&bull;</span>
<li><?php the_author_posts_link() ?></li>
</ul>
</div>
</header>
<div class="entry-content">
<?php the_excerpt(); ?>
</div>
</article>
<?php endwhile; ?>
<?php
if (have_posts()) :
while (have_posts()) : the_post(); ?>
<?php the_title() ?>
<?php endwhile; ?>
<?php
else :
echo "<h4>Извините по Вашему запросу ничего не найдено</h4";
endit;
?>
</div>
<div class="four columns">
<?php get_sidebar(); ?>
</div>
</div>
</div>
<?php get_footer(); ?>