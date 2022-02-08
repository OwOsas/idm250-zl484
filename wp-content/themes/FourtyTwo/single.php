<?php
get_header();
?>
<?php while(have_posts()): the_post(); ?>
<div id="thumbnail">
    <div id="thumbnail_img" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    </div>

    <h1><?php echo get_the_title(); ?></h1>
    <div id="tag_year">
        <h3>
            <?php
            if(has_tag()){
                echo get_the_tag_list();
            }
            ?></h3>
        <h3><i><?php echo get_the_date("Y");?></i></h3>
    </div>
</div>

<div class="content">
<?php echo get_the_content()?>
</div>



<?php endwhile; ?>

<!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure libero esse provident sed quo voluptatibus placeat tempora excepturi sapiente dignissimos, asperiores, facere ullam, fugiat quod dolore quaerat. Tempora, quae hic.</p> -->

<?php
get_footer();

