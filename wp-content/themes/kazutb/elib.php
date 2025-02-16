<?php
get_header();
// Template name: elib
?>
<section class="elib">
    <div class="container">
        <h2 class="elib-h2"><?= the_title() ?></h2>
        <div class="elib-wrapper">
            <div class="elib-card">
                <div class="elib-content">
                    <p>Дата загрузки - 27.12.2024</p>
                    <h3 class="elib-h3">Lorem ipsum odor</h3>
                    <div class="elib-download">
                        <a href="">
                            <img src="./img/icon/download.svg" alt="download.png">
                            <span>Скачать документ</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="elib-card">
                <div class="elib-content">
                    <p>Дата загрузки - 27.12.2024</p>
                    <h3 class="elib-h3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                    </h3>
                    <div class="elib-download">
                        <a href="">
                            <img src="<?= get_template_directory_uri() . '/assets/img/icon/download.svg' ?>"
                                alt="download.png">
                            <span>Скачать документ</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="elib-card">
                <div class="elib-content">
                    <p>Дата загрузки - 27.12.2024</p>
                    <h3 class="elib-h3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                    </h3>
                    <div class="elib-download">
                        <a href="">
                            <img src="./img/icon/download.svg" alt="download.png">
                            <span>Скачать документ</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>