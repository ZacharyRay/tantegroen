<?php 
get_header(); 

while(have_posts()) {
    the_post(); ?>

    <h2><a href="<?= the_permalink() ?>"><?= the_title(); ?></a></h2>
    <?php 
        the_content();
    ?>
    <h1>this is the frontpage</h1>
    <?php
} ?>


<!-- featured products -->

<?php 
$featured_products = get_field('featured_products');
$the_product_one = $featured_products['product_one'];
$the_product_two = $featured_products['product_two'];
$the_product_three = $featured_products['product_three'];
$the_product_four = $featured_products['product_four'];
if( $the_product_one || $the_product_two || $the_product_three || $the_product_four ): ?>

<h3><?= esc_html( $the_product_one->post_title ); ?></h3>
<h3><?= esc_html( $the_product_two->post_title ); ?></h3>
<h3><?= esc_html( $the_product_three->post_title ); ?></h3>
<h3><?= esc_html( $the_product_four->post_title ); ?></h3>

<?php endif; ?>


<!-- custom query example -->
<div class="latest-posts">
        <?php
        $homepagePosts = new WP_Query(array(
            'posts_per_page' => '2'
        ));
            while ($homepagePosts->have_posts()) {
                $homepagePosts->the_post();
        ?>
            <?php the_title(); ?>
        <?php } wp_reset_postdata(); ?>
</div>

<?php
get_footer();
?>
