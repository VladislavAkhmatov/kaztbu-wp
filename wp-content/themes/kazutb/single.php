<?php
get_header();

?>

<section class="rector-blog-page">
    <div class="container">
        <h1 style="padding-top: 20px; margin: 0;"></h1>
    </div>
    <?php if (get_post_type() == "our_live"):
        $image_id = get_post_meta(get_the_ID(), 'our_live_img', true);
        $image_url = wp_get_attachment_image_url($image_id, 'full');
        ?>
        <div class="container">
            <div class="rector-blog-wrapper">
                <div class="rector-blog-card">
                    <img src="<?= $image_url ?>" alt="rector-blog-img">
                    <div class="rector-blog-card-text">
                        <h2 style="font-size: 20px;"><?= the_title() ?></h2>
                        <p style="font-size: 18px"><?= get_post_meta(get_the_ID(), 'our_live_text', true) ?></p>
                        <p style="font-size: 12px" class="rector-blog-info">
                            <?= formatting_date(get_post_meta(get_the_ID(), 'our_live_date', true)) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if (get_post_type() == "news"):
        echo 123;
        $image_id = get_post_meta(get_the_ID(), 'news_img', true);
        $image_url = wp_get_attachment_image_url($image_id, 'full');
        ?>
        <div class="container">
            <div class="rector-blog-wrapper">
                <div class="rector-blog-card">
                    <img src="<?= $image_url ?>" alt="rector-blog-img">
                    <div class="rector-blog-card-text">
                        <h2 style="font-size: 20px;"><?= the_title() ?></h2>
                        <p style="font-size: 18px"><?= get_post_meta(get_the_ID(), 'news_text', true) ?></p>
                        <p style="font-size: 12px" class="rector-blog-info">
                            <?= formatting_date(get_post_meta(get_the_ID(), 'news_date', true)) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>

<?php
get_footer();
?>