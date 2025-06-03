<?php
get_header();

//Template name: about
?>
<section class="rector-blog-page">
    <div class="container">
        <h1><?= the_title() ?></h1>
    </div>
    <div class="container">
        <div class="rector-blog-wrapper">
            <div class="rector-blog-card">
                <div class="rector-blog-image-container">
                    <img src="http://kaztbu:8080/wp-content/uploads/2025/04/tekh-i-biznesajpg.jpeg"
                        alt="rector-blog-img">
                    <div class="image-overlay"></div>
                </div>
                <div class="rector-blog-card-text">
                    <h2><?= pll_e('about_subtitle') ?></h2>
                    <div><?= the_content() ?></div>
                </div>
                <div class="rector-blog-info">
                    <?= get_the_date() ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();

?>