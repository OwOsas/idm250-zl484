<?php
// https://developer.wordpress.org/reference/classes/wp_query/

$arg = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 4,
    'order' => 'DESC',

];
$project_query = new WP_Query($arg);

?>


<div class="showcase">
    <div class="bg_text"><span><?php get_post_type($project_query); ?></span></div>
    <div class="sc_container">
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
        <div class="sc_card">
            <a href="<?php the_permalink(); ?>">            
                <img src="<?php echo $featured_image['src']; ?>"
                     alt="<?php echo $featured_image['alt']; ?>">
            </a>

            <div class="sc_card_description">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
                <h4>
                    <?php
                        if(has_tag()){
                            echo get_the_tag_list();
                        }
                    ?>
                </h4>
                <h3><?php echo get_the_date("Y");?></h3>
            </div>
        </div>
        <?php
            endwhile;
            // After looping through a separate query, this function restores the $post global to the current post in the main query.
            wp_reset_postdata();
        ?>
    </div>
</div>

