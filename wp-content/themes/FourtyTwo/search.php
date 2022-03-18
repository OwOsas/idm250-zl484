<?php
/* Template Name: Search Page */

get_header(); ?>
<?php
$args = [
    's' => $_GET['s'],
    'post_type' => $_GET['post_type']
];
$search_query = new WP_Query($args)
?>

<h1 class="title">
    <?php echo strtoupper(wp_title("", false)); ?>
    <?php 
    $postType = 'post';
    get_template_part('components/search-form');?>
</h1>

<div class="category_container">
    <h2>Search Results...</h2>
    <!-- Category Container -->
    <div class="card_container">
    <?php
    if ($search_query->have_posts()) {
        while ($search_query->have_posts()) : $search_query->the_post();
            get_template_part('components/gallery_card');
        endwhile;
        // After looping through a separate query, this function restores the $post global to the current post in the main query.
        wp_reset_postdata();
    } else {
        // no results
        echo '<p>Sorry, there are no results</p>';
    }

    ?>
        </div>
</div>

</div>
<?php get_footer();
