<?php
get_header();

// Template name: rector
?>
<section class="rector-blog-page">
    <div class="container">
        <h1><?= the_title() ?></h1>
    </div>
    <div class="container">
        <div class="rector-blog-wrapper">
            <div class="rector-blog-card">
                <img src="http://kaztbu:8080/wp-content/uploads/2025/02/image.png" alt="rector-blog-img">
                <div class="rector-blog-card-text">
                    <h2><?= pll_e('rector_title') ?></h2>
                    <p><?= pll_e('rector_text') ?></p>
                    <p style="font-size: 12px" class="rector-blog-info"> 02.02.2025
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>