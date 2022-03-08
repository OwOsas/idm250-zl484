<div class="recent_work">
    <h2>RECENT WORK</h2>
    <?php 
    get_template_part(
        'components/footer_components/footer-showcase-card'
    );
    ?>
</div>

<a class="portfolio_link">
    <h3>Web Design/Dev</h3>
    <img src="<?php echo get_template_directory_uri();?>/img/arrow_right.svg" alt="">
</a>
<a class="portfolio_link">
    <h3>Virtual Production</h3>
    <img src="<?php echo get_template_directory_uri();?>/img/arrow_right.svg" alt="">
</a>
<div class="footer">
    <img src="<?php echo get_template_directory_uri();?>/img/logo_horizontal.svg" alt="">
    <h3>Sylar Li</h3>
    <div>
        <h4>Contact Me:</h4>
        <a href="mailto:ssyyllaarrlleeee@gmail.com">ssyyllaarrlleeee@gmail.com</a>
    </div>
    <div class="social_media">
        <a target="_blank" href="https://www.behance.net/sylarli"><img src="<?php echo get_template_directory_uri();?>/img/behance.svg" alt=""></a>
        <a target="_blank" href="https://github.com/OwOsas"><img src="<?php echo get_template_directory_uri();?>/img/github.svg" alt=""></a>
        <a target="_blank" href="https://shakalaka.artstation.com/"><img src="<?php echo get_template_directory_uri();?>/img/ArtStation.svg" alt=""></a>
    </div>
</div>
<?php wp_footer();?>
</body>
</html>