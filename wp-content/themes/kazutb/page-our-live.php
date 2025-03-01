<?php
get_header();
// Template name: our-live
?>
<section class="page-news">
    <div class="container">
        <h1><?= the_title() ?></h1>
        <div class="page-news-wrapper">
            <?php
            // параметры по умолчанию
            $news = get_posts(array(
                'numberposts' => -1,
                'orderby' => 'date',
                'order' => 'DESC',
                'include' => array(),
                'exclude' => array(),
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'our_live',
                'suppress_filters' => true,
            ));


            foreach ($news as $item) {
            setup_postdata($item);
            ?>
            <div class="page-news-card">
                <img src="<?= wp_get_attachment_url($item->our_live_img, 'full') ?>" alt="img">
                <div class="page-news-content">
                    <h2><?= $item->post_title ?? '' ?></h2>
                    <p><?= $item->our_live_text ?? '' ?></p>
                </div>
                <div class="page-news-template">
                    <p class="page-news-date"><?= formatting_date($item->our_live_date) ?></p>
                    <a style="text-decoration: none; color: #000;" href="<?= the_permalink($item->ID) ?>" class="page-news-more"><?= pll_e('more') ?></a>
                </div>
            </div>
                <?php
            }
            wp_reset_postdata(); // сброс
            ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>
