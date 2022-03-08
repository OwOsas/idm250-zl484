<?php
/* Template Name: Portfolio */
?>

<?php
get_header();
?>


<h1 class="title">
    <?php echo strtoupper(wp_title("", false)); ?>
</h1>

<div class="category_container">
    <h2>UI DESIGN</h2>
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

            <div class="card">
                <div class="card_img" style="background-image: url('<?php echo $featured_image['src']; ?>');"></div>
                <h3 class="card_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                <div class="card_info">
                    <div class="tag">
                        <?php
                        if (has_tag()) {
                            echo get_the_tag_list();
                        }
                        ?>
                    </div>
                    <div class="card_year">
                        <?php echo get_the_date("Y"); ?>
                    </div>
                </div>
            </div>

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