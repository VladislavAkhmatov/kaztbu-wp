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
                    <a class="header-main-reward" href="#"><?= pll_e('button_awards') ?></a>
                    <a class="header-main-egov" href="#"><?= pll_e('button_egov') ?></a>
                    <a href="#" class="platonus-btn">PLATONUS</a>
                </div>
            </div>
            <div class="header-main-right">
                <img src="http://kaztbu:8080/wp-content/uploads/2025/02/image1.jpg">
            </div>
        </div>
    </div>
</header>
<header class="header-buttons">
    <div class="container">
        <div class="header-buttons-wrap">
            <a href="#"><?= pll_e('international_coop') ?> &#x2A01;</a>
            <a href="#"><?= pll_e('students') ?> &#x2A01;</a>
            <a href="#"><?= pll_e('life') ?> &#x2A01;</a>
            <a href="#"><?= pll_e('science') ?> &#x2A01;</a>
            <a href="#"><?= pll_e('career') ?> &#x2A01;</a>
            <a class="rector-btn" href="<?= get_permalink(pll_get_post(267)) ?>"><?= pll_e('rector') ?></a>
            <a href="#"><?= pll_e('faculties') ?> &#x2A01;</a>
        </div>
    </div>
</header>
<section class="sections">
    <div class="container">
        <div class="sections-wrap">
            <h2 style="color: #000;"><?= pll_e('sections') ?></h2>
            <div class="sections-buttons">
                <button class="active" data-target="training"><?= pll_e('training') ?></button>
                <button class="disabled" data-target="events"><?= pll_e('events') ?></button>
                <button class="disabled" data-target="science"><?= pll_e('science_sections') ?></button>
            </div>
        </div>

        <!-- Training Section -->
        <div class="sections-cards active-section" data-section="training">
            <div class="sections-card-info">
                <img src="http://kaztbu:8080/wp-content/uploads/2025/02/section1-1.jpg" alt="">
                <div class="sections-card-text">
                    <h3><?= pll_e('section_training_title1') ?></h3>
                    <p><?= pll_e('section_training_text1') ?></p>
                </div>
                <a href="#"><?= pll_e('more') ?> </a>
            </div>
            <div class="sections-card-info">
                <img src="http://kaztbu:8080/wp-content/uploads/2025/02/section2.jpg" alt="">
                <div class="sections-card-text">
                    <h3><?= pll_e('section_training_title2') ?></h3>
                    <p><?= pll_e('section_training_text2') ?></p>
                </div>
                <a href="#"><?= get_post_meta($post->ID, 'main_more', true) ?> </a>
            </div>
            <div class="sections-card-info">
                <img src="http://kaztbu:8080/wp-content/uploads/2025/02/section3.jpg" alt="">
                <div class="sections-card-text">
                    <h3><?= pll_e('section_training_title3') ?></h3>
                    <p><?= pll_e('section_training_text3') ?></p>
                </div>
                <a href="#"><?= pll_e('more') ?> </a>
            </div>
        </div>

        <!-- Events Section -->
        <div class="sections-cards" data-section="events">
            <?php
            // параметры по умолчанию
            $news = get_posts(array(
                'numberposts' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
                'include' => array(),
                'exclude' => array(),
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'news',
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
                        <a href="<?= the_permalink($item->ID) ?>"><?= get_post_meta($post->ID, 'main_more', true) ?>
                        </a>
                    </div>
                </div>
                <?php
            }

            wp_reset_postdata(); // сброс
            ?>

        </div>
        <!-- Science Section -->
        <div class=" sections-cards" data-section="science">
            <div class="sections-card-info">
                <img src="http://kaztbu:8080/wp-content/uploads/2025/02/85766021873694-3.jpg" alt="">
                <div class="sections-card-text">
                    <h3><?= pll_e('section_science_title1') ?></h3>
                    <p><?= pll_e('section_science_text1') ?></p>
                </div>
                <a href="#"><?= get_post_meta($post->ID, 'main_more', true) ?> </a>
            </div>
            <div class="sections-card-info">
                <img src="http://kaztbu:8080/wp-content/uploads/2025/02/image.jpg" alt="">
                <div class="sections-card-text">
                    <h3><?= pll_e('section_science_title2') ?></h3>
                    <p><?= pll_e('section_science_text2') ?></p>
                </div>
                <a href="#"><?= get_post_meta($post->ID, 'main_more', true) ?> </a>
            </div>
            <div class="sections-card-info">
                <img src="http://kaztbu:8080/wp-content/uploads/2025/02/science.jpg" alt="">
                <div class="sections-card-text">
                    <h3><?= pll_e('section_science_title3') ?></h3>
                    <p><?= pll_e('section_science_text3') ?></p>
                </div>
                <a href="#"><?= pll_e('more') ?> </a>
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="container">
        <div class="about-text">
            <h3><?= pll_e('about_title') ?></h3>
            <p><?= pll_e('about_text') ?></p>
        </div>
    </div>
</section>
<section class="links">
    <div class="container">
        <h2 style="color: #000; text-align: center;"><?= pll_e('links_title') ?></h2>
        <div class="links-wrap">
            <div class="links-left">
                <img src="http://kaztbu:8080/wp-content/uploads/2025/02/image213.jpg" alt="">
            </div>
            <div class="links-right">
                <h2 class="links-h2"><?= pll_e('links_title_mob') ?></h2>
                <div class="links-card">
                    <div class="links-right-text">
                        <h3><?= pll_e('links_sale_title') ?></h3>
                        <p><?= pll_e('links_sale_text') ?></p>
                    </div>
                    <div class="links-right-qr1">
                        <img src="http://kaztbu:8080/wp-content/uploads/2025/02/Поступление-1.jpg" alt="">
                    </div>
                </div>
                <div class="links-card">
                    <div class="links-right-text">
                        <h3><?= pll_e('links_entrace_title') ?></h3>
                        <p><?= pll_e('links_entrace_text') ?></p>
                    </div>
                    <div class="links-right-qr1">
                        <img src="http://kaztbu:8080/wp-content/uploads/2025/02/Поступление-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="partners">
    <div class="partners-info">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="block">
                        <a href=""><img class="swiper-slide-img"
                                src="http://kaztbu:8080/wp-content/uploads/2025/01/partners1-1.jpg" alt="img"></a>
                        <a href=""><img class="swiper-slide-img"
                                src="http://kaztbu:8080/wp-content/uploads/2025/01/partners2.jpg" alt="img"></a>
                        <a href=""><img class="swiper-slide-img"
                                src="http://kaztbu:8080/wp-content/uploads/2025/01/bolashak.png" alt="img"></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="block">
                        <a href=""><img class="swiper-slide-img"
                                src="http://kaztbu:8080/wp-content/uploads/2025/01/link1-1.jpg" alt="img"></a>
                        <a href=""><img class="swiper-slide-img"
                                src="http://kaztbu:8080/wp-content/uploads/2025/01/link3.jpg" alt="img"></a>
                        <a href=""><img class="swiper-slide-img"
                                src="http://kaztbu:8080/wp-content/uploads/2025/01/partners3-1.jpg" alt="img"></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="block">
                        <a href=""><img class="swiper-slide-img"
                                src="http://kaztbu:8080/wp-content/uploads/2025/01/part3.png" alt="img"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-university">
    <h2><?= pll_e('about_university') ?></h2>
    <div class="about-university-main">
        <div class="about-university-left">
            <div class="about-university-card">
                <h3>111</h3>
                <div class="about-university-p">
                    <p><?= pll_e('about_university_specialization') ?></p>
                </div>
            </div>
            <div class="about-university-card">
                <h3>3405</h3>
                <div class="about-university-p">
                    <p><?= pll_e('about_university_students') ?></p>
                </div>
            </div>
            <div class="about-university-card">
                <h3>52</h3>
                <div class="about-university-p">
                    <p><?= pll_e('about_university_teachers') ?></p>
                </div>
            </div>
        </div>
        <div class="about-university-right">
            <img src="http://kaztbu:8080/wp-content/uploads/2025/02/image312.jpg" alt="">
        </div>
    </div>
</section>

<section class="live">
    <div class="container">
        <h2><?= pll_e('live_title') ?></h2>
        <div class="live-wrapper">
            <?php
            // параметры по умолчанию
            $our_live = get_posts(array(
                'numberposts' => 2,
                'orderby' => 'date',
                'order' => 'DESC',
                'include' => array(),
                'exclude' => array(),
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'our_live',
                'suppress_filters' => true,
            ));

            foreach ($our_live as $item) {
                setup_postdata($item);
                ?>
                <div class="live-card">
                    <a href="<?php the_permalink($item->ID) ?>">
                        <h3 style="color: #fff"><?= $item->post_title ?>
                        </h3>
                        <p style="opacity: 0.6"><?= get_post_meta($post->ID, 'main_more', true) ?></p>
                    </a>
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
    <h2 style="text-align: center; font-size: 30px; margin-bottom: 40px;">
        <?= pll_e('our_partners') ?>
    </h2>
    <div class="partners-info">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="block">
                        <a href=""><img class="swiper-slide-img-partners-circle"
                                src="http://kaztbu:8080/wp-content/uploads/2025/02/p1-1.png" alt="img"></a>
                        <a href=""><img class="swiper-slide-img-partners-circle"
                                src="http://kaztbu:8080/wp-content/uploads/2025/02/p2-1.png" alt="img"></a>
                        <a href=""><img class="swiper-slide-img-partners-circle"
                                src="http://kaztbu:8080/wp-content/uploads/2025/02/p4-transformed.png" alt="img"></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="block rectangle">
                        <a href=""><img class="swiper-slide-img-partners-rectangle"
                                src="http://kaztbu:8080/wp-content/uploads/2025/02/p5-0bm3tWFxj-transformed.png"
                                alt="img"></a>
                        <a href=""><img class="swiper-slide-img-partners-rectangle"
                                src="http://kaztbu:8080/wp-content/uploads/2025/02/pp2.jpg" alt="img"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>