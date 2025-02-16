<?php
get_header();
// Template name: elib
?>
<section class="elib">
    <div class="container">
        <h2 class="elib-h2"><?= the_title() ?></h2>
        <div class="elib-wrapper">
            <?php
            $my_posts = get_posts(array(
                'numberposts' => -1,
                'category_name' => 'elib',
                'orderby' => 'date',
                'order' => 'DESC',
                'include' => array(),
                'exclude' => array(),
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'post',
                'suppress_filters' => true,
            ));


            foreach ($my_posts as $item) {
                setup_postdata($item);
                ?>
                <div class="elib-card">
                    <div class="elib-content">
                        <p><?= get_post_meta($post->ID, 'date_upload_text', true) ?>
                            - <?= formatting_date($item->date_upload) ?></p>
                        <h3 class="elib-h3"><?= $item->post_title ?></h3>
                        <div class="elib-download">
                            <a href="<?= wp_get_attachment_url($item->file) ?>" download>
                                <img src="<?= get_template_directory_uri() . '/assets/img/icon/download.svg' ?>"
                                    alt="download.png">
                                <span><?= get_post_meta($post->ID, 'download_file', true) ?></span>
                            </a>
                        </div>
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