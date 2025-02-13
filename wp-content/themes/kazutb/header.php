<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>KazTBU</title>
    <script>
        var currentLanguage = "<?= pll_current_language(); ?>";

        var linksData = {
            about: {
                ru: [
                    { name: "О нас", url: "/about" },
                    { name: "Медиа", url: "/about/media" },
                    { name: "Стратегия развития", url: "/about/development-strategy" },
                    { name: "Отдел кадров", url: "/about/hr" },
                    { name: "Нормативные документы", url: "/about/regulatory-documents" },
                    { name: "Противодействие коррупции", url: "/about/anti-corruption" },
                    { name: "Ученый совет", url: "/about/academic-council" },
                    { name: "Аккредитация и рейтинги", url: "/about/accreditation-and-ratings" },
                    { name: "Технопарк", url: "/about/technopark" },
                    { name: "Административные подразделения", url: "/about/administrative-units" },
                    { name: "Руководство", url: "/about/management" }
                ],
                kk: [
                    { name: "Біз туралы", url: "/about" },
                    { name: "Медиа", url: "/about/media" },
                    { name: "Даму стратегиясы", url: "/about/development-strategy" },
                    { name: "Кадрлар бөлімі", url: "/about/hr" },
                    { name: "Нормативтік құжаттар", url: "/about/regulatory-documents" },
                    { name: "Коррупцияға қарсы тұру", url: "/about/anti-corruption" },
                    { name: "Ғылыми кеңес", url: "/about/academic-council" },
                    { name: "Аккредитация және рейтингтер", url: "/about/accreditation-and-ratings" },
                    { name: "Технопарк", url: "/about/technopark" },
                    { name: "Әкімшілік бөлімдер", url: "/about/administrative-units" },
                    { name: "Басшылық", url: "/about/management" }
                ],
                en: [
                    { name: "About Us", url: "/about" },
                    { name: "Media", url: "/about/media" },
                    { name: "Development Strategy", url: "/about/development-strategy" },
                    { name: "HR Department", url: "/about/hr" },
                    { name: "Regulatory Documents", url: "/about/regulatory-documents" },
                    { name: "Anti-Corruption", url: "/about/anti-corruption" },
                    { name: "Academic Council", url: "/about/academic-council" },
                    { name: "Accreditation and Ratings", url: "/about/accreditation-and-ratings" },
                    { name: "Technopark", url: "/about/technopark" },
                    { name: "Administrative Units", url: "/about/administrative-units" },
                    { name: "Management", url: "/about/management" }
                ]
            },
            admissions: {
                ru: [
                    { name: "Виртуальная приемная комиссия", url: "/admissions/virtual-office" },
                    { name: "Виртуальный офис регистратор", url: "/admissions/virtual-registrar" },
                    { name: "Правила приема", url: "/admissions/rules" },
                    { name: "Онлайн регистрация для поступающих", url: "/admissions/online-registration" },
                    { name: "Контакты приемной комиссии", url: "/admissions/contacts" },
                    { name: "Прием иностранных граждан", url: "/admissions/international" },
                    { name: "Бакалавриат", url: "/admissions/bachelor" },
                    { name: "Магистратура", url: "/admissions/master" },
                    { name: "Выпускники", url: "/admissions/alumni" },
                    { name: "Часто задаваемые вопросы", url: "/admissions/faq" },
                    { name: "Почему КАЗУТБ?", url: "/admissions/why-choose-us" },
                    { name: "Дистанционное обучение", url: "/admissions/distance-learning" }
                ],
                kk: [
                    { name: "Виртуалды қабылдау комиссиясы", url: "/admissions/virtual-office" },
                    { name: "Виртуалды тіркеу кеңсесі", url: "/admissions/virtual-registrar" },
                    { name: "Қабылдау ережелері", url: "/admissions/rules" },
                    { name: "Онлайн тіркеу", url: "/admissions/online-registration" },
                    { name: "Байланыс", url: "/admissions/contacts" },
                    { name: "Шетел азаматтарын қабылдау", url: "/admissions/international" },
                    { name: "Бакалавриат", url: "/admissions/bachelor" },
                    { name: "Магистратура", url: "/admissions/master" },
                    { name: "Түлектер", url: "/admissions/alumni" },
                    { name: "Жиі қойылатын сұрақтар", url: "/admissions/faq" },
                    { name: "Неге КАЗУТБ?", url: "/admissions/why-choose-us" },
                    { name: "Қашықтан оқыту", url: "/admissions/distance-learning" }
                ],
                en: [
                    { name: "Virtual Admissions Office", url: "/admissions/virtual-office" },
                    { name: "Virtual Registrar Office", url: "/admissions/virtual-registrar" },
                    { name: "Admission Rules", url: "/admissions/rules" },
                    { name: "Online Registration", url: "/admissions/online-registration" },
                    { name: "Contacts", url: "/admissions/contacts" },
                    { name: "Admission of International Students", url: "/admissions/international" },
                    { name: "Bachelor's Degree", url: "/admissions/bachelor" },
                    { name: "Master's Degree", url: "/admissions/master" },
                    { name: "Alumni", url: "/admissions/alumni" },
                    { name: "Frequently Asked Questions", url: "/admissions/faq" },
                    { name: "Why Choose Us?", url: "/admissions/why-choose-us" },
                    { name: "Distance Learning", url: "/admissions/distance-learning" }
                ]

            },
            international: {
                ru: [
                    { name: "Международное сотрудничество", url: "/international/exchange" },
                    { name: "Стажировки", url: "/international/exchange" },
                    { name: "Академическая мобильность", url: "/international/exchange" },
                    { name: "Ассоциации, организация и консорциумы", url: "/international/exchange" },
                    { name: "Партнеры", url: "/international/partners" }
                ],
                kk: [
                    { name: "Халықаралық ынтымақтастық", url: "/international/exchange" },
                    { name: "Тәжірибелер", url: "/international/exchange" },
                    { name: "Академиялық ұтқырлық", url: "/international/exchange" },
                    { name: "Қауымдастықтар, ұйымдар және консорциумдар", url: "/international/exchange" },
                    { name: "Серіктестер", url: "/international/partners" }
                ],
                en: [
                    { name: "International Cooperation", url: "/international/exchange" },
                    { name: "Internships", url: "/international/exchange" },
                    { name: "Academic Mobility", url: "/international/exchange" },
                    { name: "Associations, Organizations, and Consortia", url: "/international/exchange" },
                    { name: "Partners", url: "/international/partners" }
                ]

            },
            life: {
                ru: [
                    { name: "Комитет по делам молодежи", url: "/life/clubs" },
                    { name: "Социальный пакет для обучающихся", url: "/life/clubs" },
                    { name: "Воспитательная работа", url: "/life/clubs" },
                    { name: "Клубы по интересам", url: "/life/clubs" },
                    { name: "Общежитие", url: "/life/clubs" }
                ],
                kk: [
                    { name: "Жастар ісі жөніндегі комитет", url: "/life/clubs" },
                    { name: "Студенттерге арналған әлеуметтік пакет", url: "/life/clubs" },
                    { name: "Тәрбиелік жұмыс", url: "/life/clubs" },
                    { name: "Қызығушылық клубтары", url: "/life/clubs" },
                    { name: "Жатақхана", url: "/life/clubs" }
                ],
                en: [
                    { name: "Youth Affairs Committee", url: "/life/clubs" },
                    { name: "Social Package for Students", url: "/life/clubs" },
                    { name: "Educational Work", url: "/life/clubs" },
                    { name: "Interest Clubs", url: "/life/clubs" },
                    { name: "Dormitory", url: "/life/clubs" }
                ]
            },
            career: {
                ru: [
                    { name: "Трудоустройство выпускников", url: "/career/jobs" },
                    { name: "Вакансии для студентов и выпускников", url: "/career/jobs" },
                    { name: "Центр карьеры", url: "/career/jobs" },
                    { name: "Онлайн-площадки по трудоустройству", url: "/career/jobs" },
                    { name: "Как составить резюме и найти работу мечты", url: "/career/jobs" },
                    { name: "Практика", url: "/career/jobs" },
                    { name: "Партнеры", url: "/career/jobs" },
                    { name: "Отзывы работодателей", url: "/career/jobs" },
                    { name: "Правила успешного трудоустройства", url: "/career/jobs" }
                ],
                kk: [
                    { name: "Түлектерді жұмысқа орналастыру", url: "/career/jobs" },
                    { name: "Студенттер мен түлектерге арналған бос орындар", url: "/career/jobs" },
                    { name: "Мансап орталығы", url: "/career/jobs" },
                    { name: "Жұмысқа орналасу бойынша онлайн платформалар", url: "/career/jobs" },
                    { name: "Резюме жасау және армандаған жұмысты табу", url: "/career/jobs" },
                    { name: "Тәжірибе", url: "/career/jobs" },
                    { name: "Серіктестер", url: "/career/jobs" },
                    { name: "Жұмыс берушілердің пікірлері", url: "/career/jobs" },
                    { name: "Жұмысқа орналасудың сәтті ережелері", url: "/career/jobs" }
                ],
                en: [
                    { name: "Graduate Employment", url: "/career/jobs" },
                    { name: "Vacancies for Students and Graduates", url: "/career/jobs" },
                    { name: "Career Center", url: "/career/jobs" },
                    { name: "Online Job Platforms", url: "/career/jobs" },
                    { name: "How to Write a Resume and Find Your Dream Job", url: "/career/jobs" },
                    { name: "Internships", url: "/career/jobs" },
                    { name: "Partners", url: "/career/jobs" },
                    { name: "Employer Reviews", url: "/career/jobs" },
                    { name: "Rules for Successful Employment", url: "/career/jobs" }
                ]
            }
            ,
            education: {
                ru: [
                    { name: "Расписание", url: "/education/faculties" },
                    { name: "Академический календарь", url: "/education/faculties" },
                    { name: "Организация онлайн-обучения в университете", url: "/education/faculties" },
                    { name: "Образовательные программы", url: "/education/faculties" },
                    { name: "Управление качеством, аккредитации и рейтинга", url: "/education/faculties" },
                    { name: "Перевод, восстановление и отчисление", url: "/education/courses" },
                    { name: "100 новых учебников на казахском “100 kitap”", url: "/education/schedule" },
                    { name: "Материально-техническое обеспечение", url: "/education/schedule" },
                    { name: "Академическое сотрудничество", url: "/education/schedule" },
                    { name: "Центр обслуживания студентов", url: "/education/schedule" },
                    { name: "Кодекс академической честности", url: "/education/schedule" },
                    { name: "Электронные библиотеки", url: "/education/schedule" },
                    { name: "Информация для обладателей гос.гранта", url: "/education/schedule" },
                    { name: "Справочник путеводитель", url: "/education/schedule" }
                ],
                kk: [
                    { name: "Кесте", url: "/education/faculties" },
                    { name: "Академиялық күнтізбе", url: "/education/faculties" },
                    { name: "Университетте онлайн оқыту ұйымдастыру", url: "/education/faculties" },
                    { name: "Білім беру бағдарламалары", url: "/education/faculties" },
                    { name: "Сапа менеджменті, аккредиттеу және рейтинг", url: "/education/faculties" },
                    { name: "Аударма, қалпына келтіру және шығару", url: "/education/courses" },
                    { name: "Қазақ тілінде 100 жаңа оқулық “100 kitap”", url: "/education/schedule" },
                    { name: "Материалдық-техникалық қамтамасыз ету", url: "/education/schedule" },
                    { name: "Академиялық ынтымақтастық", url: "/education/schedule" },
                    { name: "Студенттерге қызмет көрсету орталығы", url: "/education/schedule" },
                    { name: "Академиялық адалдық кодексі", url: "/education/schedule" },
                    { name: "Электронды кітапханалар", url: "/education/schedule" },
                    { name: "Мемлекеттік грант иегерлері үшін ақпарат", url: "/education/schedule" },
                    { name: "Көшбасшылық анықтамалық", url: "/education/schedule" }
                ]
                ,
                en: [
                    { name: "Schedule", url: "/education/faculties" },
                    { name: "Academic Calendar", url: "/education/faculties" },
                    { name: "Organization of online education at the university", url: "/education/faculties" },
                    { name: "Educational Programs", url: "/education/faculties" },
                    { name: "Quality Management, Accreditation and Ranking", url: "/education/faculties" },
                    { name: "Transfer, Restoration, and Expulsion", url: "/education/courses" },
                    { name: "100 New Textbooks in Kazakh “100 kitap”", url: "/education/schedule" },
                    { name: "Material and Technical Support", url: "/education/schedule" },
                    { name: "Academic Cooperation", url: "/education/schedule" },
                    { name: "Student Service Center", url: "/education/schedule" },
                    { name: "Academic Integrity Code", url: "/education/schedule" },
                    { name: "Electronic Libraries", url: "/education/schedule" },
                    { name: "Information for State Grant Holders", url: "/education/schedule" },
                    { name: "Guidebook", url: "/education/schedule" }
                ]
            },
            science: {
                ru: [
                    { name: "Об отделе", url: "/science/research" },
                    { name: "Международное сотрудничество", url: "/science/research" },
                    { name: "Направление научной деятельности", url: "/science/research" },
                    { name: "Научные центры и лаборатории", url: "/science/research" },
                    { name: "Научные издания", url: "/science/research" }, { name: "Публикации ППС", url: "/science/research" },
                    { name: "Совет молодых ученых", url: "/science/research" },
                    { name: "Научно-технический совет", url: "/science/research" },
                    { name: "Научно-исследовательская работа студентов", url: "/science/research" },
                ],
                kk: [
                    { name: "Бөлім туралы", url: "/science/research" },
                    { name: "Халықаралық ынтымақтастық", url: "/science/research" },
                    { name: "Ғылыми қызмет бағыттары", url: "/science/research" },
                    { name: "Ғылыми орталықтар мен зертханалар", url: "/science/research" },
                    { name: "Ғылыми жарияланымдар", url: "/science/research" },
                    { name: "Педагогикалық қызметкерлердің жарияланымдары", url: "/science/research" },
                    { name: "Жас ғалымдар кеңесі", url: "/science/research" },
                    { name: "Ғылыми-техникалық кеңес", url: "/science/research" },
                    { name: "Студенттердің ғылыми-зерттеу жұмысы", url: "/science/research" }
                ]
                ,
                en: [
                    { name: "About the Department", url: "/science/research" },
                    { name: "International Cooperation", url: "/science/research" },
                    { name: "Research Activity Directions", url: "/science/research" },
                    { name: "Research Centers and Laboratories", url: "/science/research" },
                    { name: "Scientific Publications", url: "/science/research" },
                    { name: "Publications of Faculty Members", url: "/science/research" },
                    { name: "Young Scientists Council", url: "/science/research" },
                    { name: "Scientific and Technical Council", url: "/science/research" },
                    { name: "Student Research Work", url: "/science/research" }
                ]
            }
        };
    </script>
</head>

<body>
    <p class="arrow" id="arrow">-></p>
    <div class="side-panel" id="sidePanel">
        <p class="side-panel-text"><?php pll_e('Привет, мир!'); ?></p>
        <div class="side-panel-card">
            <div class="color-blue" data-color="blue"></div>
            <div class="color-green" data-color="green"></div>
            <div class="color-pink" data-color="pink"></div>
        </div>
    </div>
    <header class="header-help">
        <div class="container">
            <div class="header-help-info">
                <div class="header-help-left">
                    <div class="header-help-social">
                        <a href="#"><img src="<?= get_template_directory_uri() . '/assets/img/icon/vk.svg' ?>"
                                alt="vk"></a>
                        <a href="#"><img src="<?= get_template_directory_uri() . '/assets/img/icon/inst.svg' ?>"
                                alt="instagram"></a>
                        <a href="#"><img src="<?= get_template_directory_uri() . '/assets/img/icon/telega.svg' ?>"
                                alt="telegram"></a>
                    </div>
                    <div class="header-help-support">
                        <img src="<?= get_template_directory_uri() . '/assets/img/icon/headphone.svg' ?>"
                            alt="headphone">
                        <p>+7 771 766 99 99</p>
                    </div>
                </div>

                <div class="header-help-right">
                    <div class="header-help-mail">
                        <p>akutb@mail.ru</p>
                        <img src="<?= get_template_directory_uri() . '/assets/img/icon/mail.svg' ?>" alt="headphone">
                    </div>

                    <div class="header-help-menu">
                        <div class="custom-dropdown">
                            <a class="custom-dropdown-toggle" href="#">
                                <img src="<?= get_template_directory_uri() . '/assets/img/icon/eye.svg' ?>" alt="Menu">
                            </a>
                            <ul class="custom-dropdown-menu">
                                <?php echo do_shortcode('[wpa_toolbar]'); ?>
                            </ul>
                        </div>

                        <a class="search" href="">
                            <img src="<?= get_template_directory_uri() . '/assets/img/icon/search.svg' ?>" alt="Search">
                        </a>

                        <div class="header-help-select">
                            <?php pll_the_languages([
                                'dropdown' => 1,
                                'show_flags' => 1,
                                'show_names' => 0,
                            ]); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="header-nav">
        <div class="container">
            <div class="header-nav-info">
                <div class="header-nav-left">
                    <?php
                    if (function_exists('pll_current_language')) {
                        $current_language = pll_current_language();
                        if ($current_language == 'ru') {
                            ?>
                            <div class="custom-nav-container">
                                <div class="custom-nav">
                                    <div class="custom-nav-select">Карта сайта</div>
                                    <ul class="custom-nav-options">
                                        <li data-links="about"><a href="<?= get_permalink(255) ?>">Об университете</a></li>
                                        <li data-links="admissions"><a href="#">Абитуриенту</a></li>
                                        <li data-links="international"><a href="#">International</a></li>
                                        <li data-links="life"><a href="#">Жизнь в КазУТБ</a></li>
                                        <li data-links="career"><a href="#">Карьера</a></li>
                                        <li data-links="education"><a href="#">Образование</a></li>
                                        <li data-links="science"><a href="#">Наука</a></li>
                                    </ul>
                                    <div class="custom-submenu" id="custom-submenu">
                                        <ul id="custom-submenu-links"></ul>
                                    </div>
                                </div>
                            </div>


                            <div class="overlay"></div>
                            <div class="menu-mobile">
                                <img class="burger" src="<?= get_template_directory_uri() . '/assets/img/icon/burger.svg' ?>"
                                    alt="burder">
                                <div class="menu-mobile-burger" id="sideMenu">
                                    <div class="header-help-menu-burger">
                                        <a href=""><img
                                                src="<?= get_template_directory_uri() . '/assets/img/icon/search.svg' ?>"
                                                alt=""></a>
                                        <button class="close-btn">X</button>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="menu-toggle">Карта сайта</a>
                                        <div class="dropdown-menu">
                                            <li data-links="about" class="dropdown-li">
                                                <a href="javascript:void(0)" class="submenu-toggle"><b>Об университете</b></a>
                                                <ul class="submenu">
                                                    <li><a href="/about">О нас</a></li>
                                                    <li><a href="/about/media">Медиа</a></li>
                                                    <li><a href="/about/development-strategy">Стратегия развития</a></li>
                                                    <li><a href="/about/hr">Отдел кадров</a></li>
                                                    <li><a href="/about/regulatory-documents">Нормативные документы</a></li>
                                                    <li><a href="/about/anti-corruption">Противодействие коррупции</a></li>
                                                    <li><a href="/about/academic-council">Ученый совет</a></li>
                                                    <li><a href="/about/accreditation-and-ratings">Аккредитация и рейтинги</a>
                                                    </li>
                                                    <li><a href="/about/technopark">Технопарк</a></li>
                                                    <li><a href="/about/administrative-units">Административные подразделения</a>
                                                    </li>
                                                    <li><a href="/about/management">Руководство</a></li>
                                                </ul>
                                            </li>
                                            <li data-links="admissions" class="dropdown-li">
                                                <a href="javascript:void(0)" class="submenu-toggle"><b>Абитуриенту</b></a>
                                                <ul class="submenu">
                                                    <li><a href="/admissions/virtual-office">Виртуальная приемная комиссия</a>
                                                    </li>
                                                    <li><a href="/admissions/virtual-registrar">Виртуальный офис регистратор</a>
                                                    </li>
                                                    <li><a href="/admissions/rules">Правила приема</a></li>
                                                    <li><a href="/admissions/online-registration">Онлайн регистрация для
                                                            поступающих</a></li>
                                                    <li><a href="/admissions/contacts">Контакты приемной комиссии</a></li>
                                                    <li><a href="/admissions/international">Прием иностранных граждан</a></li>
                                                    <li><a href="/admissions/bachelor">Бакалавриат</a></li>
                                                    <li><a href="/admissions/master">Магистратура</a></li>
                                                    <li><a href="/admissions/alumni">Выпускники</a></li>
                                                    <li><a href="/admissions/faq">Часто задаваемые вопросы</a></li>
                                                    <li><a href="/admissions/why-choose-us">Почему КАЗУТБ?</a></li>
                                                    <li><a href="/admissions/distance-learning">Дистанционное обучение</a></li>
                                                </ul>
                                            </li>
                                            <li data-links="international" class="dropdown-li">
                                                <a href="javascript:void(0)" class="submenu-toggle"><b>International</b></a>
                                                <ul class="submenu">
                                                    <li><a href="/international/exchange">Международное сотрудничество</a></li>
                                                    <li><a href="/international/exchange">Стажировки</a></li>
                                                    <li><a href="/international/exchange">Академическая мобильность</a></li>
                                                    <li><a href="/international/exchange">Ассоциации, организация и
                                                            консорциумы</a></li>
                                                    <li><a href="/international/partners">Партнеры</a></li>

                                                </ul>
                                            </li>
                                            <li data-links="life" class="dropdown-li">
                                                <a href="javascript:void(0)" class="submenu-toggle"><b>Жизнь в КазУТБ</b></a>
                                                <ul class="submenu">
                                                    <li><a href="/life/clubs">Комитет по делам молодежи</a></li>
                                                    <li><a href="/life/clubs">Социальный пакет для обучающихся</a></li>
                                                    <li><a href="/life/clubs">Воспитательная работа</a></li>
                                                    <li><a href="/life/clubs">Клубы по интересам</a></li>
                                                    <li><a href="/life/clubs">Общежитие</a></li>
                                                </ul>
                                            </li>
                                            <li data-links="career" class="dropdown-li">
                                                <a href="javascript:void(0)" class="submenu-toggle"><b>Карьера</b></a>
                                                <ul class="submenu">
                                                    <li><a href="/career/jobs">Трудоустройство выпускников</a></li>
                                                    <li><a href="/career/jobs">Вакансии для студентов и выпускников</a></li>
                                                    <li><a href="/career/jobs">Центр карьеры</a></li>
                                                    <li><a href="/career/jobs">Онлайн-площадки по трудоустройству</a></li>
                                                    <li><a href="/career/jobs">Как составить резюме и найти работу мечты</a>
                                                    </li>
                                                    <li><a href="/career/jobs">Практика</a></li>
                                                    <li><a href="/career/jobs">Партнеры</a></li>
                                                    <li><a href="/career/jobs">Отзывы работодателей</a></li>
                                                    <li><a href="/career/jobs">Правила успешного трудоустройства</a></li>

                                                </ul>
                                            </li>
                                            <li data-links="education" class="dropdown-li">
                                                <a href="javascript:void(0)" class="submenu-toggle"><b>Образование</b></a>
                                                <ul class="submenu">
                                                    <li><a href="/education/faculties">Расписание</a></li>
                                                    <li><a href="/education/faculties">Академический календарь</a></li>
                                                    <li><a href="/education/faculties">Организация онлайн-обучения в
                                                            университете</a></li>
                                                    <li><a href="/education/faculties">Образовательные программы</a></li>
                                                    <li><a href="/education/faculties">Управление качеством, аккредитации и
                                                            рейтинга</a></li>
                                                    <li><a href="/education/courses">Перевод, восстановление и отчисление</a>
                                                    </li>
                                                    <li><a href="/education/schedule">100 новых учебников на казахском “100
                                                            kitap”</a></li>
                                                    <li><a href="/education/schedule">Материально-техническое обеспечение</a>
                                                    </li>
                                                    <li><a href="/education/schedule">Академическое сотрудничество</a></li>
                                                    <li><a href="/education/schedule">Центр обслуживания студентов</a></li>
                                                    <li><a href="/education/schedule">Кодекс академической честности</a></li>
                                                    <li><a href="/education/schedule">Электронные библиотеки</a></li>
                                                    <li><a href="/education/schedule">Информация для обладателей гос.гранта</a>
                                                    </li>
                                                    <li><a href="/education/schedule">Справочник путеводитель</a></li>
                                                </ul>
                                            </li>
                                            <li data-links="science" class="dropdown-li">
                                                <a href="javascript:void(0)" class="submenu-toggle"><b>Наука</b></a>
                                                <ul class="submenu">
                                                    <li><a href="/science/research">Об отделе</a></li>
                                                    <li><a href="/science/research">Международное сотрудничество</a></li>
                                                    <li><a href="/science/research">Направление научной деятельности</a></li>
                                                    <li><a href="/science/research">Научные центры и лаборатории</a></li>
                                                    <li><a href="/science/research">Научные издания</a></li>
                                                    <li><a href="/science/research">Публикации ППС</a></li>
                                                    <li><a href="/science/research">Совет молодых ученых</a></li>
                                                    <li><a href="/science/research">Научно-технический совет</a></li>
                                                    <li><a href="/science/research">Научно-исследовательская работа
                                                            студентов</a></li>

                                                </ul>
                                            </li>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="menu-toggle">Поступление</a>
                                        <div class="dropdown-menu">
                                            <a href="#">Тест 1</a>
                                            <a href="#">Тест 2</a>
                                        </div>
                                    </div>
                                    <a href="#" class="menu-toggle-2">Колледж</a>
                                    <a href="https://vestnik.kaztbu.edu.kz/index.php/kazutb" class="menu-toggle-2">Вестник
                                        KazUTB</a>
                                    <a href="#" class="menu-toggle-2">E-library</a>
                                    <a href="#" class="menu-toggle-2">Контакты</a>
                                    <div class="header-help-social-burger">
                                        <a href="#"><img src="<?= get_template_directory_uri() . '/assets/img/icon/vk.svg' ?>"
                                                alt="vk"></a>
                                        <a href="#"><img src="<?= get_template_directory_uri() . '/assets/img/icon/inst.svg' ?>"
                                                alt="instagram"></a>
                                        <a href="#"><img
                                                src="<?= get_template_directory_uri() . '/assets/img/icon/telega.svg' ?>"
                                                alt="telegram"></a>
                                    </div>
                                </div>
                            </div>
                            <a class="link" href="#">Поступление</a>
                            <a class="link" href="#">Колледж</a>
                        </div>
                        <div class="header-nav-center">
                            <div class="header-nav-ellipse"></div>
                            <a href="<?= home_url() ?>">
                                <div class="header-nav-logo">
                                    <img class="logo" src="http://kaztbu:8080/wp-content/uploads/2025/01/logo.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="header-nav-right">
                            <a class="link" href="https://vestnik.kaztbu.edu.kz/index.php/kazutb">Вестник KazUTB</a>
                            <a class="link" href="#">E-library</a>
                            <a class="link" href="<?= get_permalink(221) ?>">Контакты</a>
                        </div>





                        <?php
                        } elseif ($current_language == 'kk') {
                            ?>



                        <div class="custom-nav-container">
                            <div class="custom-nav">
                                <div class="custom-nav-select">Сайт картасы</div>
                                <ul class="custom-nav-options">
                                    <li data-links="about"><a href="<?= get_permalink(259) ?>">Университет туралы</a></li>
                                    <li data-links="admissions"><a href="#">Талапкерге</a></li>
                                    <li data-links="international"><a href="#">International</a></li>
                                    <li data-links="life"><a href="#">ҚазТБУ-дағы өмір</a></li>
                                    <li data-links="career"><a href="#">Мансап</a></li>
                                    <li data-links="education"><a href="#">Білім</a></li>
                                    <li data-links="science"><a href="#">Ғылым</a></li>
                                </ul>
                                <div class="custom-submenu" id="custom-submenu">
                                    <ul id="custom-submenu-links"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="overlay"></div>
                        <div class="menu-mobile">
                            <img class="burger" src="<?= get_template_directory_uri() . '/assets/img/icon/burger.svg' ?>"
                                alt="burder">
                            <div class="menu-mobile-burger" id="sideMenu">
                                <div class="header-help-menu-burger">

                                    <a href=""><img src="<?= get_template_directory_uri() . '/assets/img/icon/search.svg' ?>"
                                            alt=""></a>
                                    <button class="close-btn">X</button>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="menu-toggle">Сайт картасы</a>
                                    <div class="dropdown-menu">
                                        <li data-links="about" class="dropdown-li">
                                            <a href="javascript:void(0)" class="submenu-toggle"><b>Университет туралы</b></a>
                                            <ul class="submenu">
                                                <li><a href="/kk/about">Біз туралы</a></li>
                                                <li><a href="/kk/about/media">Медиа</a></li>
                                                <li><a href="/kk/about/development-strategy">Даму стратегиясы</a></li>
                                                <li><a href="/kk/about/hr">Кадрлар бөлімі</a></li>
                                                <li><a href="/kk/about/regulatory-documents">Нормативтік құжаттар</a></li>
                                                <li><a href="/kk/about/anti-corruption">Коррупцияға қарсы тұру</a></li>
                                                <li><a href="/kk/about/academic-council">Ғылыми кеңес</a></li>
                                                <li><a href="/kk/about/accreditation-and-ratings">Аккредитация және
                                                        рейтингтер</a></li>
                                                <li><a href="/kk/about/technopark">Технопарк</a></li>
                                                <li><a href="/kk/about/administrative-units">Әкімшілік бөлімдер</a></li>
                                                <li><a href="/kk/about/management">Басшылық</a></li>

                                            </ul>
                                        </li>
                                        <li data-links="admissions" class="dropdown-li">
                                            <a href="javascript:void(0)" class="submenu-toggle"><b>Талапкерге</b></a>
                                            <ul class="submenu">
                                                <li><a href="/kk/admissions/virtual-office">Виртуалды қабылдау комиссиясы</a>
                                                </li>
                                                <li><a href="/kk/admissions/virtual-registrar">Виртуалды тіркеу кеңсесі</a></li>
                                                <li><a href="/kk/admissions/rules">Қабылдау ережелері</a></li>
                                                <li><a href="/kk/admissions/online-registration">Онлайн тіркеу</a></li>
                                                <li><a href="/kk/admissions/contacts">Байланыс</a></li>
                                                <li><a href="/kk/admissions/international">Шетел азаматтарын қабылдау</a></li>
                                                <li><a href="/kk/admissions/bachelor">Бакалавриат</a></li>
                                                <li><a href="/kk/admissions/master">Магистратура</a></li>
                                                <li><a href="/kk/admissions/alumni">Түлектер</a></li>
                                                <li><a href="/kk/admissions/faq">Жиі қойылатын сұрақтар</a></li>
                                                <li><a href="/kk/admissions/why-choose-us">Неге КАЗУТБ?</a></li>
                                                <li><a href="/kk/admissions/distance-learning">Қашықтан оқыту</a></li>

                                            </ul>
                                        </li>
                                        <li data-links="international" class="dropdown-li">
                                            <a href="javascript:void(0)" class="submenu-toggle"><b>International</b></a>
                                            <ul class="submenu">
                                                <li><a href="/kk/international/exchange">Халықаралық ынтымақтастық</a></li>
                                                <li><a href="/kk/international/exchange">Тәжірибелер</a></li>
                                                <li><a href="/kk/international/exchange">Академиялық ұтқырлық</a></li>
                                                <li><a href="/kk/international/exchange">Қауымдастықтар, ұйымдар және
                                                        консорциумдар</a></li>
                                                <li><a href="/kk/international/partners">Серіктестер</a></li>
                                            </ul>
                                        </li>
                                        <li data-links="life" class="dropdown-li">
                                            <a href="javascript:void(0)" class="submenu-toggle"><b>ҚазТБУ-дағы өмір</b></a>
                                            <ul class="submenu">
                                                <li><a href="/kk/life/clubs">Жастар ісі жөніндегі комитет</a></li>
                                                <li><a href="/kk/life/clubs">Студенттерге арналған әлеуметтік пакет</a></li>
                                                <li><a href="/kk/life/clubs">Тәрбиелік жұмыс</a></li>
                                                <li><a href="/kk/life/clubs">Қызығушылық клубтары</a></li>
                                                <li><a href="/kk/life/clubs">Жатақхана</a></li>

                                            </ul>
                                        </li>
                                        <li data-links="career" class="dropdown-li">
                                            <a href="javascript:void(0)" class="submenu-toggle"><b>Мансап</b></a>
                                            <ul class="submenu">
                                                <li><a href="/kk/career/jobs">Түлектерді жұмысқа орналастыру</a></li>
                                                <li><a href="/kk/career/jobs">Студенттер мен түлектерге арналған бос орындар</a>
                                                </li>
                                                <li><a href="/kk/career/jobs">Мансап орталығы</a></li>
                                                <li><a href="/kk/career/jobs">Жұмысқа орналасу бойынша онлайн платформалар</a>
                                                </li>
                                                <li><a href="/kk/career/jobs">Резюме жасау және армандаған жұмысты табу</a></li>
                                                <li><a href="/kk/career/jobs">Тәжірибе</a></li>
                                                <li><a href="/kk/career/jobs">Серіктестер</a></li>
                                                <li><a href="/kk/career/jobs">Жұмыс берушілердің пікірлері</a></li>
                                                <li><a href="/kk/career/jobs">Жұмысқа орналасудың сәтті ережелері</a></li>
                                            </ul>
                                        </li>
                                        <li data-links="education" class="dropdown-li">
                                            <a href="javascript:void(0)" class="submenu-toggle"><b>Білім</b></a>
                                            <ul class="submenu">
                                                <li><a href="/kk/education/faculties">Кесте</a></li>
                                                <li><a href="/kk/education/faculties">Академиялық күнтізбе</a></li>
                                                <li><a href="/kk/education/faculties">Университетте онлайн оқыту ұйымдастыру</a>
                                                </li>
                                                <li><a href="/kk/education/faculties">Білім беру бағдарламалары</a></li>
                                                <li><a href="/kk/education/faculties">Сапа менеджменті, аккредиттеу және
                                                        рейтинг</a></li>
                                                <li><a href="/kk/education/courses">Аударма, қалпына келтіру және шығару</a>
                                                </li>
                                                <li><a href="/kk/education/schedule">Қазақ тілінде 100 жаңа оқулық “100
                                                        kitap”</a></li>
                                                <li><a href="/kk/education/schedule">Материалдық-техникалық қамтамасыз ету</a>
                                                </li>
                                                <li><a href="/kk/education/schedule">Академиялық ынтымақтастық</a></li>
                                                <li><a href="/kk/education/schedule">Студенттерге қызмет көрсету орталығы</a>
                                                </li>
                                                <li><a href="/kk/education/schedule">Академиялық адалдық кодексі</a></li>
                                                <li><a href="/kk/education/schedule">Электронды кітапханалар</a></li>
                                                <li><a href="/kk/education/schedule">Мемлекеттік грант иегерлері үшін
                                                        ақпарат</a></li>
                                                <li><a href="/kk/education/schedule">Көшбасшылық анықтамалық</a></li>

                                            </ul>
                                        </li>
                                        <li data-links="science" class="dropdown-li">
                                            <a href="javascript:void(0)" class="submenu-toggle"><b>Ғылым</b></a>
                                            <ul class="submenu">
                                                <li><a href="/kk/science/research">Бөлім туралы</a></li>
                                                <li><a href="/kk/science/research">Халықаралық ынтымақтастық</a></li>
                                                <li><a href="/kk/science/research">Ғылыми қызмет бағыттары</a></li>
                                                <li><a href="/kk/science/research">Ғылыми орталықтар мен зертханалар</a></li>
                                                <li><a href="/kk/science/research">Ғылыми жарияланымдар</a></li>
                                                <li><a href="/kk/science/research">Педагогикалық қызметкерлердің
                                                        жарияланымдары</a></li>
                                                <li><a href="/kk/science/research">Жас ғалымдар кеңесі</a></li>
                                                <li><a href="/kk/science/research">Ғылыми-техникалық кеңес</a></li>
                                                <li><a href="/kk/science/research">Студенттердің ғылыми-зерттеу жұмысы</a></li>
                                            </ul>
                                        </li>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="menu-toggle">Түсім</a>
                                    <div class="dropdown-menu">
                                        <a href="#">Тест 1</a>
                                        <a href="#">Тест 2</a>
                                    </div>
                                </div>
                                <a href="#" class="menu-toggle-2">Колледж</a>
                                <a href="https://vestnik.kaztbu.edu.kz/index.php/kazutb" class="menu-toggle-2">Хабаршы
                                    KazUTB</a>
                                <a href="#" class="menu-toggle-2">E-library</a>
                                <a href="#" class="menu-toggle-2">Байланыс</a>
                                <div class="header-help-social-burger">
                                    <a href="#"><img src="<?= get_template_directory_uri() . '/assets/img/icon/vk.svg' ?>"
                                            alt="vk"></a>
                                    <a href="#"><img src="<?= get_template_directory_uri() . '/assets/img/icon/inst.svg' ?>"
                                            alt="instagram"></a>
                                    <a href="#"><img src="<?= get_template_directory_uri() . '/assets/img/icon/telega.svg' ?>"
                                            alt="telegram"></a>
                                </div>
                            </div>

                        </div>
                        <a class="link" href="#">Түсім</a>
                        <a class="link" href="#">Колледж</a>
                    </div>
                    <div class="header-nav-center">
                        <div class="header-nav-ellipse"></div>
                        <a href="<?= home_url() ?>">
                            <div class="header-nav-logo">
                                <img class="logo" src="http://kaztbu:8080/wp-content/uploads/2025/01/logo.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="header-nav-right">
                        <a class="link" href="https://vestnik.kaztbu.edu.kz/index.php/kazutb">Хабаршы KazUTB</a>
                        <a class="link" href="#">E-library</a>
                        <a class="link" href="<?= get_permalink(227) ?>">Байланыс</a>
                    </div>



                    <?php
                        } else {
                            ?>


                    <div class="custom-nav-container">
                        <div class="custom-nav">
                            <div class="custom-nav-select">Site map</div>
                            <ul class="custom-nav-options">
                                <li data-links="about"><a href="<?= get_permalink(257) ?>">About the University</a></li>
                                <li data-links="admissions"><a href="#">To the applicant</a></li>
                                <li data-links="international"><a href="#">International</a></li>
                                <li data-links="life"><a href="#">Life in KazUTB</a></li>
                                <li data-links="career"><a href="#">Career</a></li>
                                <li data-links="education"><a href="#">Education</a></li>
                                <li data-links="science"><a href="#">Science</a></li>
                            </ul>
                            <div class="custom-submenu" id="custom-submenu">
                                <ul id="custom-submenu-links"></ul>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                    <div class="menu-mobile">
                        <img class="burger" src="<?= get_template_directory_uri() . '/assets/img/icon/burger.svg' ?>"
                            alt="burder">
                        <div class="menu-mobile-burger" id="sideMenu">
                            <div class="header-help-menu-burger">
                                <a href=""><img src="<?= get_template_directory_uri() . '/assets/img/icon/search.svg' ?>"
                                        alt=""></a>
                                <button class="close-btn">X</button>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="menu-toggle">Site map</a>
                                <div class="dropdown-menu">
                                    <li data-links="about" class="dropdown-li">
                                        <a href="javascript:void(0)" class="submenu-toggle"><b>About the University</b></a>
                                        <ul class="submenu">
                                            <li><a href="en/about">About Us</a></li>
                                            <li><a href="en/about/media">Media</a></li>
                                            <li><a href="en/about/development-strategy">Development Strategy</a></li>
                                            <li><a href="en/about/hr">HR Department</a></li>
                                            <li><a href="en/about/regulatory-documents">Regulatory Documents</a></li>
                                            <li><a href="en/about/anti-corruption">Anti-Corruption</a></li>
                                            <li><a href="en/about/academic-council">Academic Council</a></li>
                                            <li><a href="en/about/accreditation-and-ratings">Accreditation and Ratings</a></li>
                                            <li><a href="en/about/technopark">Technopark</a></li>
                                            <li><a href="en/about/administrative-units">Administrative Units</a></li>
                                            <li><a href="en/about/management">Management</a></li>
                                        </ul>
                                    </li>
                                    <li data-links="admissions" class="dropdown-li">
                                        <a href="javascript:void(0)" class="submenu-toggle"><b>To the applicant</b></a>
                                        <ul class="submenu">
                                            <li><a href="en/admissions/virtual-office">Virtual Admissions Office</a></li>
                                            <li><a href="en/admissions/virtual-registrar">Virtual Registrar Office</a></li>
                                            <li><a href="en/admissions/rules">Admission Rules</a></li>
                                            <li><a href="en/admissions/online-registration">Online Registration</a></li>
                                            <li><a href="en/admissions/contacts">Contacts</a></li>
                                            <li><a href="en/admissions/international">Admission of International Students</a>
                                            </li>
                                            <li><a href="en/admissions/bachelor">Bachelor's Degree</a></li>
                                            <li><a href="en/admissions/master">Master's Degree</a></li>
                                            <li><a href="en/admissions/alumni">Alumni</a></li>
                                            <li><a href="en/admissions/faq">Frequently Asked Questions</a></li>
                                            <li><a href="en/admissions/why-choose-us">Why Choose Us?</a></li>
                                            <li><a href="en/admissions/distance-learning">Distance Learning</a></li>
                                        </ul>
                                    </li>
                                    <li data-links="international" class="dropdown-li">
                                        <a href="javascript:void(0)" class="submenu-toggle"><b>International</b></a>
                                        <ul class="submenu">
                                            <li><a href="en/international/exchange">International Cooperation</a></li>
                                            <li><a href="en/international/exchange">Internships</a></li>
                                            <li><a href="en/international/exchange">Academic Mobility</a></li>
                                            <li><a href="en/international/exchange">Associations, Organizations, and
                                                    Consortia</a></li>
                                            <li><a href="en/international/partners">Partners</a></li>


                                        </ul>
                                    </li>
                                    <li data-links="life" class="dropdown-li">
                                        <a href="javascript:void(0)" class="submenu-toggle"><b>Life in KazUTB</b></a>
                                        <ul class="submenu">
                                            <li><a href="en/life/clubs">Youth Affairs Committee</a></li>
                                            <li><a href="en/life/clubs">Social Package for Students</a></li>
                                            <li><a href="en/life/clubs">Educational Work</a></li>
                                            <li><a href="en/life/clubs">Interest Clubs</a></li>
                                            <li><a href="en/life/clubs">Dormitory</a></li>

                                        </ul>
                                    </li>
                                    <li data-links="career" class="dropdown-li">
                                        <a href="javascript:void(0)" class="submenu-toggle"><b>Career</b></a>
                                        <ul class="submenu">
                                            <li><a href="en/career/jobs">Graduate Employment</a></li>
                                            <li><a href="en/career/jobs">Vacancies for Students and Graduates</a></li>
                                            <li><a href="en/career/jobs">Career Center</a></li>
                                            <li><a href="en/career/jobs">Online Job Platforms</a></li>
                                            <li><a href="en/career/jobs">How to Write a Resume and Find Your Dream Job</a></li>
                                            <li><a href="en/career/jobs">Internships</a></li>
                                            <li><a href="en/career/jobs">Partners</a></li>
                                            <li><a href="en/career/jobs">Employer Reviews</a></li>
                                            <li><a href="en/career/jobs">Rules for Successful Employment</a></li>


                                        </ul>
                                    </li>
                                    <li data-links="education" class="dropdown-li">
                                        <a href="javascript:void(0)" class="submenu-toggle"><b>Education</b></a>
                                        <ul class="submenu">
                                            <li><a href="en/education/faculties">Schedule</a></li>
                                            <li><a href="en/education/faculties">Academic Calendar</a></li>
                                            <li><a href="en/education/faculties">Organization of online education at the
                                                    university</a></li>
                                            <li><a href="en/education/faculties">Educational Programs</a></li>
                                            <li><a href="en/education/faculties">Quality Management, Accreditation and
                                                    Ranking</a></li>
                                            <li><a href="en/education/courses">Transfer, Restoration, and Expulsion</a></li>
                                            <li><a href="en/education/schedule">100 New Textbooks in Kazakh “100 kitap”</a></li>
                                            <li><a href="en/education/schedule">Material and Technical Support</a></li>
                                            <li><a href="en/education/schedule">Academic Cooperation</a></li>
                                            <li><a href="en/education/schedule">Student Service Center</a></li>
                                            <li><a href="en/education/schedule">Academic Integrity Code</a></li>
                                            <li><a href="en/education/schedule">Electronic Libraries</a></li>
                                            <li><a href="en/education/schedule">Information for State Grant Holders</a></li>
                                            <li><a href="en/education/schedule">Guidebook</a></li>
                                        </ul>
                                    </li>
                                    <li data-links="science" class="dropdown-li">
                                        <a href="javascript:void(0)" class="submenu-toggle"><b>Science</b></a>
                                        <ul class="submenu">
                                            <li><a href="en/science/research">About the Department</a></li>
                                            <li><a href="en/science/research">International Cooperation</a></li>
                                            <li><a href="en/science/research">Research Activity Directions</a></li>
                                            <li><a href="en/science/research">Research Centers and Laboratories</a></li>
                                            <li><a href="en/science/research">Scientific Publications</a></li>
                                            <li><a href="en/science/research">Publications of Faculty Members</a></li>
                                            <li><a href="en/science/research">Young Scientists Council</a></li>
                                            <li><a href="en/science/research">Scientific and Technical Council</a></li>
                                            <li><a href="en/science/research">Student Research Work</a></li>
                                        </ul>
                                    </li>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="menu-toggle">Entrance</a>
                                <div class="dropdown-menu">
                                    <a href="#">test 1</a>
                                    <a href="#">test 2</a>
                                </div>
                            </div>
                            <a href="#" class="menu-toggle-2">College</a>
                            <a href="https://vestnik.kaztbu.edu.kz/index.php/kazutb" class="menu-toggle-2">KazUTB
                                Bulletin</a>
                            <a href="#" class="menu-toggle-2">E-library</a>
                            <a href="#" class="menu-toggle-2">Contacts</a>
                            <div class="header-help-social-burger">
                                <a href="#"><img src="<?= get_template_directory_uri() . '/assets/img/icon/vk.svg' ?>"
                                        alt="vk"></a>
                                <a href="#"><img src="<?= get_template_directory_uri() . '/assets/img/icon/inst.svg' ?>"
                                        alt="instagram"></a>
                                <a href="#"><img src="<?= get_template_directory_uri() . '/assets/img/icon/telega.svg' ?>"
                                        alt="telegram"></a>
                            </div>
                        </div>
                    </div>
                    <a class="link" href="#">Entrance</a>
                    <a class="link" href="#">College</a>
                </div>
                <div class="header-nav-center">
                    <div class="header-nav-ellipse"></div>
                    <a href="<?= home_url() ?>">
                        <div class="header-nav-logo">
                            <img class="logo" src="http://kaztbu:8080/wp-content/uploads/2025/01/logo.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="header-nav-right">
                    <a class="link" href="https://vestnik.kaztbu.edu.kz/index.php/kazutb">KazUTB Bulletin</a>
                    <a class="link" href="#">E-library</a>
                    <a class="link" href="<?= get_permalink(223) ?>">Contacts</a>
                </div>


                <?php
                        }
                    }
                    ?>
        </div>
        </div>
    </header>