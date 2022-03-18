<?php
/* Template Name: Archive */
?>

<?php
get_header();
?>


<h1 class="title">
    <?php echo strtoupper(wp_title("", false)); ?>

    <?php 
    $postType = 'post';
    get_template_part('components/search-form');?>
</h1>





<div class="category_container">
    <h2>PAST WORKS</h2>
    <!-- Category Container -->
    <div class="card_container">

        <!-- CARD -->
        <?php
        // https://developer.wordpress.org/reference/classes/wp_query/

        $arg = [
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 10,
            'order' => 'DESC',

        ];
        $project_query = new WP_Query($arg);

        ?>


        <?php
        while ($project_query->have_posts()) : $project_query->the_post(); ?>
            <?php
            // Has to be done in the loop so we have access to the featured image ID
            $featured_image = idm_get_asset_by_id(get_post_thumbnail_id());

            if (!$featured_image) {
                $featured_image['alt'] = 'Missing Image';
                $featured_image['src'] = '//via.placeholder.com/600x450';
            };
            ?>

            <?php
            get_template_part('components/gallery_card');
            ?>

        <?php
        endwhile;
        // After looping through a separate query, this function restores the $post global to the current post in the main query.
        wp_reset_postdata();
        ?>
    </div>
</div>

<?php
get_footer();
?>