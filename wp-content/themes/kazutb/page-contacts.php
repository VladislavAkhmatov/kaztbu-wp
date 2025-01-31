<?php
get_header();

// Template name: contacts
?>
<section class="contacts">
    <div class="container">
        <h1><?= the_title() ?></h1>
        <div class="contacts-info">
            <div>
                <h2><?= get_post_meta($post->ID, 'contacts_main_address', true) ?></h2>
                <p><?= get_post_meta($post->ID, 'contacts_address', true) ?></p>
            </div>
            <div>
                <h2><?= get_post_meta($post->ID, 'contacts_phones', true) ?></h2>
                <h3><?= get_post_meta($post->ID, 'contacts_admission_committee', true) ?></h3>
                <p>+7 (7172) 72‒58‒12</p>
                <p>+7 (7172) 72‒58‒15</p>
                <p>+7‒771‒766‒99‒99</p>
                <p>+7‒775‒232‒22‒66</p>
            </div>
            <div>
                <h2>Email</h2>
                <p>kazutb@mail.ru</p>
            </div>
        </div>
    </div>
</section>

<section class="map">
    <div class="container">
        <h2><?= get_post_meta($post->ID, 'contacts_map_title', true) ?></h2>
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.979769412035!2d71.36629397696743!3d51.14470223713433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4245865c38da8c39%3A0x10d17fb12709cbec!2z0JrQsNC30LDRhdGB0LrQuNC5INGD0L3QuNCy0LXRgNGB0LjRgtC10YIg0YLQtdGF0L3QvtC70L7Qs9C40Lgg0Lgg0LHQuNC30L3QtdGB0LA!5e1!3m2!1sru!2skz!4v1737898844600!5m2!1sru!2skz"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>
<?php
get_footer();
?>