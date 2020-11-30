<?php 
get_header();
?>

<h1>
<?php the_archive_title(); ?>
</h1>
<p><?php the_archive_description(); ?></p>

<?php 
while(have_posts()) {
    the_post(); ?>
<div class="post-item">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="metabox">
        <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
    </div>
    <div class="generic-content">
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>">Continue reading</a></p>
    </div>
</div>
<?php
}
// next blog page
echo paginate_links();
?>

<?php
get_footer();
?>