<footer>
    <div class="footer-padding">
        <div class="footer-upper-line">
        </div>
    </div>
    <div class="footer-container">
        <div class="footer-wrapper">
            <?php
            if (function_exists('pll_current_language')) {
                $current_language = pll_current_language();
                if ($current_language == 'ru') {
                    ?>
                    <div class="footer-block">
                        <div class="block-content1">
                            <img src="http://kaztbu:8080/wp-content/uploads/2025/01/logo.png" alt="">
                            <div class="block-content-text">
                                <p>© акционерное Общество</p>
                                <h2>Казахский университет технологии и бизнеса имени К. Кулажанова</h2>
                            </div>
                        </div>
                        <p style="font-weight: bold; margin-top: 35px; font-size: 16px;">Свидетельство IA-A № 0124 от
                            22.05.2021 г. Независимое агентство по обеспечению качества в образовании (НАОКО) Срок действия
                            свидетельства: 22.05.2021 г. – 21.05.2026 г.</p>
                    </div>
                    <div class="footer-block">
                        <div class="block-content2">
                            <h2 style="font-size: 20px;">Полезные ссылки</h2>
                            <p>E-MAIL: <span style="text-decoration: underline;">akutb@mail.ru</span></p>
                        </div>
                    </div>
                    <div class="footer-block">
                        <div class="block-content2">
                            <h2 style="font-size: 20px;">Контакты КАЗУТБ</h2>
                            <p>г. Астана, Левый берег, район Нура, ул. Кайым Мухамедханова, здание 37 А.</p>
                            <p>Приемная ректора:</p>
                            <p>тел: <span style="text-decoration: underline;">+7 (7172) 72 58 12</span></p>
                        </div>
                    </div>
                    <div class="footer-block">
                        <div class="block-content2">
                            <h2 style="font-size: 20px;">Полезные ссылки</h2>
                            <p>+7 775 232 22 66</p>
                            <p>+7 771 766 99 99,</p>
                            <p>+7 7172 725 815</p>
                        </div>
                    </div>
                    <?php
                } elseif ($current_language == 'kk') {
                    ?>
                    <div class="footer-block">
                        <div class="block-content1">
                            <img src="http://kaztbu:8080/wp-content/uploads/2025/01/logo.png" alt="">
                            <div class="block-content-text">
                                <p>© акционерлік қоғам</p>
                                <h2>Қ. Құлажанов атындағы Қазақ технология және бизнес университеті</h2>
                            </div>
                        </div>
                        <p style="font-weight: bold; margin-top: 35px; font-size: 16px;">Ia-a № 0124 куәлік
                            22.05.2021 ж. білім берудегі сапаны қамтамасыз ету жөніндегі тәуелсіз агенттік (КЕАҚҰ) қолданылу
                            мерзімі
                            куәлік: 22.05.2021 ж. – 21.05.2026 ж.</p>
                    </div>
                    <div class="footer-block">
                        <div class="block-content2">
                            <h2 style="font-size: 20px;">Пайдалы сілтемелер</h2>
                            <p>E-MAIL: <span style="text-decoration: underline;">akutb@mail.ru</span></p>
                        </div>
                    </div>
                    <div class="footer-block">
                        <div class="block-content2">
                            <h2 style="font-size: 20px;">ҚазТБУ байланыстары</h2>
                            <p>Астана қаласы, Сол жағалау, Нұра ауданы, Қайым Мұхамедханов көшесі, 37 а ғимарат.</p>
                            <p>Ректордың қабылдау бөлмесі:</p>
                            <p>тел: <span style="text-decoration: underline;">+7 (7172) 72 58 12</span></p>
                        </div>
                    </div>
                    <div class="footer-block">
                        <div class="block-content2">
                            <h2 style="font-size: 20px;">Пайдалы сілтемелер</h2>
                            <p>+7 775 232 22 66</p>
                            <p>+7 771 766 99 99,</p>
                            <p>+7 7172 725 815</p>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="footer-block">
                        <div class="block-content1">
                            <img src="http://kaztbu:8080/wp-content/uploads/2025/01/logo.png" alt="">
                            <div class="block-content-text">
                                <p>© Joint Stock Company</p>
                                <h2>K. Kulazhanov Kazakh University of technology and business</h2>
                            </div>
                        </div>
                        <p style="font-weight: bold; margin-top: 35px; font-size: 16px;">Certificate Ia-a No. 0124
                            22.05.2021 independent agency for quality assurance in education (NPO)
                            term
                            certificate: 22.05.2021 – 21.05.2026</p>
                    </div>
                    <div class="footer-block">
                        <div class="block-content2">
                            <h2 style="font-size: 20px;">Useful links</h2>
                            <p>E-MAIL: <span style="text-decoration: underline;">akutb@mail.ru</span></p>
                        </div>
                    </div>
                    <div class="footer-block">
                        <div class="block-content2">
                            <h2 style="font-size: 20px;">Kaztbu contacts</h2>
                            <p>Astana, Left Bank, Nurinsky district, Kaim Mukhamedkhanov Street, building 37 A.</p>
                            <p>Reception of the rector:</p>
                            <p>тел: <span style="text-decoration: underline;">+7 (7172) 72 58 12</span></p>
                        </div>
                    </div>
                    <div class="footer-block">
                        <div class="block-content2">
                            <h2 style="font-size: 20px;">Useful links</h2>
                            <p>+7 775 232 22 66</p>
                            <p>+7 771 766 99 99,</p>
                            <p>+7 7172 725 815</p>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>

        </div>
</footer>
<?php wp_footer(); ?>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>

</html>