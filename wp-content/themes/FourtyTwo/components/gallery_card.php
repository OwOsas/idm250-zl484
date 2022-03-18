<?php
            // Has to be done in the loop so we have access to the featured image ID
            $featured_image = idm_get_asset_by_id(get_post_thumbnail_id());

            if (!$featured_image) {
                $featured_image['alt'] = 'Missing Image';
                $featured_image['src'] = '//via.placeholder.com/600x450';
            };
            ?>

            <div class="card">
                <a href="<?php the_permalink(); ?>" class="card_img" style="background-image: url('<?php echo $featured_image['src']; ?>');"></a>
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