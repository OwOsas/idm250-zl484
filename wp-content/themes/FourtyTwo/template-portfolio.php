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
            'post_type' => 'idm_portfolio',
            'post_status' => 'publish',
            'posts_per_page' => 10,
            'order' => 'DESC',

        ];
        $project_query = new WP_Query($arg);

        ?>


        <?php
        while ($project_query->have_posts()) : $project_query->the_post(); ?>
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