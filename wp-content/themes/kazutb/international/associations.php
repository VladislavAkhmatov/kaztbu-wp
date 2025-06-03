<?php
get_header();

//Template name: associations
?>
    <section class="rector-blog-page">
        <div class="container">
            <h1><?= the_title() ?></h1>
        </div>
        <div class="container">
            <div class="rector-blog-wrapper">
                <div class="rector-blog-card">
                    <img src="http://kaztbu:8080/wp-content/uploads/2025/04/tekh-i-biznesajpg.jpeg" alt="rector-blog-img">
                    <div class="rector-blog-card-text">
                        <p><?= the_content() ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();

?>