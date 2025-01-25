<?php
get_header();
// Template name: main

?>

<header class="header-main">
    <div class="container">
        <div class="header-main-wrap">
            <div class="header-main-left">
                <h1 class="header-main-title"><?php the_title() ?></h1>
                <div class="header-main-link">
                    <a class="header-main-reward"
                        href="#"><?= get_post_meta($post->ID, 'main_button_awards', true); ?></a>
                    <a class="header-main-egov" href="#"><?= get_post_meta($post->ID, 'main_button_egov', true); ?></a>
                    <a href="#" class="platonus-btn">PLATONUS</a>
                </div>
            </div>
            <div class="header-main-right">
                <img src="http://kaztbu/wp-content/uploads/2025/01/header-main-image.png">
            </div>
        </div>
    </div>
</header>
<header class="header-buttons">
    <div class="container">
        <div class="header-buttons-wrap">
            <a href="#"><?= get_post_meta($post->ID, 'main_international_coop', true); ?> &#x2A01;</a>
            <a href="#"><?= get_post_meta($post->ID, 'main_students', true); ?> &#x2A01;</a>
            <a href="#"><?= get_post_meta($post->ID, 'main_life', true); ?> &#x2A01;</a>
            <a href="#"><?= get_post_meta($post->ID, 'main_science', true); ?> &#x2A01;</a>
            <a href="#"><?= get_post_meta($post->ID, 'main_career', true); ?> &#x2A01;</a>
            <a style="background: #f3f0a5; color:#000;"
                href="#"><?= get_post_meta($post->ID, 'main_rector', true); ?></a>
            <a href="#"><?= get_post_meta($post->ID, 'main_faculties', true); ?> &#x2A01;</a>
        </div>
    </div>
</header>
<section class="sections">
    <div class="container">
        <div class="sections-wrap">
            <h2 style="color: #000;"><?= get_post_meta($post->ID, 'main_sections', true); ?></h2>
            <div class="sections-buttons">
                <button class="active"
                    data-target="training"><?= get_post_meta($post->ID, 'main_training', true); ?></button>
                <button class="disabled"
                    data-target="events"><?= get_post_meta($post->ID, 'main_events', true); ?></button>
                <button class="disabled"
                    data-target="science"><?= get_post_meta($post->ID, 'main_science_sections', true); ?></button>
            </div>
        </div>

        <!-- Training Section -->
        <div class="sections-cards active-section" data-section="training">
            <div class="sections-card-info">
                <img src="<?= wp_get_attachment_image_url(get_post_meta($post->ID, 'main_section_training_img', true), 'full'); ?>"
                    alt="">
                <div class="sections-card-text">
                    <h3><?= get_post_meta($post->ID, 'main_section_training_title1', true) ?></h3>
                    <p><?= get_post_meta($post->ID, 'main_section_training_text1', true) ?></p>
                </div>
                <a href="#"><?= get_post_meta($post->ID, 'main_more', true) ?> </a>
            </div>
            <div class="sections-card-info">
                <img src="<?= wp_get_attachment_image_url(get_post_meta($post->ID, 'main_section_training_img2', true), 'full'); ?>"
                    alt="">
                <div class="sections-card-text">
                    <h3><?= get_post_meta($post->ID, 'main_section_training_title2', true) ?></h3>
                    <p><?= get_post_meta($post->ID, 'main_section_training_text2', true) ?></p>
                </div>
                <a href="#"><?= get_post_meta($post->ID, 'main_more', true) ?> </a>
            </div>
            <div class="sections-card-info">
                <img src="<?= wp_get_attachment_image_url(get_post_meta($post->ID, 'main_section_training_img3', true), 'full'); ?>"
                    alt="">
                <div class="sections-card-text">
                    <h3><?= get_post_meta($post->ID, 'main_section_training_title3', true) ?></h3>
                    <p><?= get_post_meta($post->ID, 'main_section_training_text3', true) ?></p>
                </div>
                <a href="#"><?= get_post_meta($post->ID, 'main_more', true) ?> </a>
            </div>
        </div>

        <!-- Events Section -->
        <div class="sections-cards" data-section="events">
            <?php
            // параметры по умолчанию
            $news = get_posts(array(
                'numberposts' => 3,
                'category_name' => 'news',
                'orderby' => 'date',
                'order' => 'DESC',
                'include' => array(),
                'exclude' => array(),
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));


            foreach ($news as $item) {
                setup_postdata($item);
                ?>
                <div class="sections-card-info events">
                    <img src="<?= wp_get_attachment_image_url($item->news_img, 'full'); ?>" alt="">
                    <div class="sections-card-text">
                        <h3><?= $item->post_title ?>
                        </h3>
                        <p><?= $item->news_text ?></p>
                    </div>
                    <div class="sections-card-meta">
                        <?php $date = DateTime::createFromFormat('Y-m-d', $item->news_date) ?>
                        <a><?= date_format($date, 'd-m-Y') ?></a>
                        <a href="#"><?= get_post_meta($post->ID, 'main_more', true) ?> </a>
                    </div>
                </div>
                <?php
            }

            wp_reset_postdata(); // сброс
            ?>

        </div>
        <!-- Science Section -->
        <div class="sections-cards" data-section="science">
            <div class="sections-card-info">
                <img src="<?= wp_get_attachment_image_url(get_post_meta($post->ID, 'main_section_science_img1', true), 'full'); ?>"
                    alt="">
                <div class="sections-card-text">
                    <h3><?= get_post_meta($post->ID, 'main_section_science_title1', true) ?></h3>
                    <p><?= get_post_meta($post->ID, 'main_section_science_text1', true) ?></p>
                </div>
                <a href="#"><?= get_post_meta($post->ID, 'main_more', true) ?> </a>
            </div>
            <div class="sections-card-info">
                <img src="<?= wp_get_attachment_image_url(get_post_meta($post->ID, 'main_section_science_img2', true), 'full'); ?>"
                    alt="">
                <div class="sections-card-text">
                    <h3><?= get_post_meta($post->ID, 'main_section_science_title2', true) ?></h3>
                    <p><?= get_post_meta($post->ID, 'main_section_science_text2', true) ?></p>
                </div>
                <a href="#"><?= get_post_meta($post->ID, 'main_more', true) ?> </a>
            </div>
            <div class="sections-card-info">
                <img src="<?= wp_get_attachment_image_url(get_post_meta($post->ID, 'main_section_science_img3', true), 'full'); ?>"
                    alt="">
                <div class="sections-card-text">
                    <h3><?= get_post_meta($post->ID, 'main_section_science_title3', true) ?></h3>
                    <p><?= get_post_meta($post->ID, 'main_section_science_text3', true) ?></p>
                </div>
                <a href="#"><?= get_post_meta($post->ID, 'main_more', true) ?> </a>
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="container">
        <div class="about-text">
            <h3><?= get_post_meta($post->ID, 'main_about_title', true) ?></h3>
            <p><?= get_post_meta($post->ID, 'main_about_text', true) ?></p>
        </div>
    </div>
</section>
<section class="links">
    <div class="container">
        <h2 style="color: #000; text-align: center;"><?= get_post_meta($post->ID, 'main_links_title', true) ?></h2>
        <div class="links-wrap">
            <div class="links-left">
                <img src="<?= wp_get_attachment_image_url(get_post_meta($post->ID, 'main_links_img', true), 'full') ?>"
                    alt="">
            </div>
            <div class="links-right">
                <h2 class="links-h2"><?= get_post_meta($post->ID, 'main_links_title_mob', true) ?></h2>
                <div class="links-card">
                    <div class="links-right-text">
                        <h3><?= get_post_meta($post->ID, 'main_links_sale_title', true) ?></h3>
                        <p><?= get_post_meta($post->ID, 'main_links_sale_text', true) ?></p>
                    </div>
                    <div class="links-right-qr1">
                        <img src="<?= wp_get_attachment_image_url(get_post_meta($post->ID, 'main_links_sale_qr', true), 'full') ?>"
                            alt="">
                    </div>
                </div>
                <div class="links-card">
                    <div class="links-right-text">
                        <h3><?= get_post_meta($post->ID, 'main_links_entrace_title', true) ?></h3>
                        <p><?= get_post_meta($post->ID, 'main_links_entrace_text', true) ?></p>
                    </div>
                    <div class="links-right-qr1">
                        <img src="<?= wp_get_attachment_image_url(get_post_meta($post->ID, 'main_links_entrace_qr', true), 'full') ?>"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="partners">
    <div class="container">
        <div class="partners-info">
            <p>
                <- </p>
                    <div class="partners-info-img">
                        <a href=""><img src="http://kaztbu/wp-content/uploads/2025/01/partners1.jpg" alt="img"></a>
                        <a href=""><img src="http://kaztbu/wp-content/uploads/2025/01/partners2.jpg" alt="img"></a>
                        <a href=""><img src="http://kaztbu/wp-content/uploads/2025/01/partners3.jpg" alt="img"></a>
                    </div>
                    <p> -> </p>
        </div>
    </div>
    </div>
</section>

<section class="about-university">
    <h2><?= get_post_meta($post->ID, 'main_about_university', true) ?></h2>
    <div class="about-university-main">
        <div class="about-university-left">
            <div class="about-university-card">
                <h3>111</h3>
                <div class="about-university-p">
                    <p><?= get_post_meta($post->ID, 'main_about_university_specialization', true) ?></p>
                </div>
            </div>
            <div class="about-university-card">
                <h3>3405</h3>
                <div class="about-university-p">
                    <p><?= get_post_meta($post->ID, 'main_about_university_students', true) ?></p>
                </div>
            </div>
            <div class="about-university-card">
                <h3>52</h3>
                <div class="about-university-p">
                    <p><?= get_post_meta($post->ID, 'main_about_university_teachers', true) ?></p>
                </div>
            </div>
        </div>
        <div class="about-university-right">
            <img src="<?= wp_get_attachment_image_url(get_post_meta($post->ID, 'main_about_university_img', true), 'full') ?>"
                alt="">
        </div>
    </div>
</section>

<section class="live">
    <div class="container">
        <h2><?= get_post_meta($post->ID, 'main_live_title', true) ?></h2>
        <div class="live-wrapper">
            <?php
            // параметры по умолчанию
            $our_live = get_posts(array(
                'numberposts' => 2,
                'category_name' => 'our_live',
                'orderby' => 'date',
                'order' => 'DESC',
                'include' => array(),
                'exclude' => array(),
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));


            foreach ($our_live as $item) {
                setup_postdata($item);
                ?>
                <div class="live-card">
                    <h3><?= $item->post_title ?>
                    </h3>
                    <a href=""><?= get_post_meta($post->ID, 'main_more', true) ?></a>
                    <img src="<?= wp_get_attachment_image_url(($item->our_live_img), 'full') ?>" alt="">
                </div>
                <?php
            }

            wp_reset_postdata(); // сброс
            ?>
        </div>
    </div>
</section>

<section class="partners">
    <div class="container">
        <h2 style="text-align: center; font-size: 30px; margin-bottom: 40px;">
            <?= get_post_meta($post->ID, 'main_our_partners', true) ?>
        </h2>
        <div class="partners-info">
            <p>
                <- </p>
                    <div class="our-partners-info-img">
                        <a href=""><img src="http://kaztbu/wp-content/uploads/2025/01/partners4.png" alt=""></a>
                        <a href=""><img src="http://kaztbu/wp-content/uploads/2025/01/partners5.png" alt=""></a>
                        <a href=""><img src="http://kaztbu/wp-content/uploads/2025/01/partners6.png" alt=""></a>
                    </div>
                    <p> -> </p>
        </div>
    </div>
    </div>
</section>

<?php
get_footer();
?>