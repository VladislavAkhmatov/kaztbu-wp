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
                    <h2><?= get_post_meta($post->ID, 'rector_title', true) ?></h2>
                    <p><?= get_post_meta($post->ID, 'rector_text', true) ?></p>
                    <p class="rector-blog-info"><?= formatting_date(get_post_meta($post->ID, 'rector_date', true)) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>