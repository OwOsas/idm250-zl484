<?php
get_header();
?>
<!-- <div id="landing">
    <div id="greeting">
        <div>
            <h1>Hello <br>there,</h1>
            <h2>I'm Sylar Li</h2>
        </div>
    </div>
    <div id="interests">
        <div id="web">
            <div>
                <h3>WEB DESIGN / DEVELOPMENT</h3>
            </div>
        </div>
        <div id="tech_art">
            <div>
                <h3>TECHNICAL ART</h3>
            </div>
        </div>
    </div>

    <div id="continue">

    </div>
</div> -->

<?php 
get_template_part(
    'components/front_page_components/front-page-hero',

    null,
    
    [
        'intro1' => "Hello there,",
        "intro2" => "I'm Sylar Li",
        "category1" => "WEB DESIGN / DEVELOPMENT",
        "category2" => "TECHNICAL ART"
    ]

);

get_template_part(
    'components/front_page_components/front-page-showcase'
);
?>





<?php
get_footer();
