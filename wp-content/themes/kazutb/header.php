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
    <script>
        var currentLanguage = "<?= pll_current_language(); ?>";

        var linksData = {
            about: {
                ru: [
                    { name: "О нас", url: "/about" },
                    { name: "Медиа", url: "/about/media" },
                    { name: "Стратегия развития", url: "/about/strategy" },
                    { name: "Отдел кадров", url: "/about/hr" },
                    { name: "Нормативные документы", url: "/about/regulatory" },
                    { name: "Противодействие коррупции", url: "/about/anti-corruption" },
                    { name: "Ученый совет", url: "/about/academic-council" },
                    { name: "Аккредитация и рейтинги", url: "/about/accreditation-and-ratings" },
                    { name: "Технопарк", url: "/about/technopark" },
                    { name: "Административные подразделения", url: "/about/administrative-units" },
                    { name: "Руководство", url: "/about/management" }
                ],
                kk: [
                    { name: "Біз туралы", url: "/kk/about" },
                    { name: "Медиа", url: "/kk/about/media" },
                    { name: "Даму стратегиясы", url: "/kk/about/strategy" },
                    { name: "Кадрлар бөлімі", url: "/kk/about/hr" },
                    { name: "Нормативтік құжаттар", url: "/kk/about/regulatory" },
                    { name: "Коррупцияға қарсы тұру", url: "/kk/about/anti-corruption" },
                    { name: "Ғылыми кеңес", url: "/kk/about/academic-council" },
                    { name: "Аккредитация және рейтингтер", url: "/kk/about/accreditation-and-ratings" },
                    { name: "Технопарк", url: "/kk/about/technopark" },
                    { name: "Әкімшілік бөлімдер", url: "/kk/about/administrative-units" },
                    { name: "Басшылық", url: "/kk/about/management" }
                ],
                en: [
                    { name: "About Us", url: "/en/about" },
                    { name: "Media", url: "/en/about/media" },
                    { name: "Development Strategy", url: "/en/about/strategy" },
                    { name: "HR Department", url: "/en/about/hr" },
                    { name: "Regulatory Documents", url: "/en/about/regulatory" },
                    { name: "Anti-Corruption", url: "/en/about/anti-corruption" },
                    { name: "Academic Council", url: "/en/about/academic-council" },
                    { name: "Accreditation and Ratings", url: "/en/about/accreditation-and-ratings" },
                    { name: "Technopark", url: "/en/about/technopark" },
                    { name: "Administrative Units", url: "/en/about/administrative-units" },
                    { name: "Management", url: "/en/about/management" }
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
                    { name: "Магистратура", url: "/admissions/magistracy" },
                    { name: "Выпускники", url: "/admissions/alumni" },
                    { name: "Часто задаваемые вопросы", url: "/admissions/faq" },
                    { name: "Почему КАЗУТБ?", url: "/admissions/why-choose-us" },
                    { name: "Дистанционное обучение", url: "/admissions/distance-learning" }
                ],
                kk: [
                    { name: "Виртуалды қабылдау комиссиясы", url: "/kk/admissions/virtual-office" },
                    { name: "Виртуалды тіркеу кеңсесі", url: "/kk/admissions/virtual-registrar" },
                    { name: "Қабылдау ережелері", url: "/kk/admissions/rules" },
                    { name: "Онлайн тіркеу", url: "/kk/admissions/online-registration" },
                    { name: "Қабылдау комиссиясының байланыстары", url: "/kk/admissions/contacts" },
                    { name: "Шетел азаматтарын қабылдау", url: "/kk/admissions/international" },
                    { name: "Бакалавриат", url: "/kk/admissions/bachelor" },
                    { name: "Магистратура", url: "/kk/admissions/magistracy" },
                    { name: "Түлектер", url: "/kk/admissions/alumni" },
                    { name: "Жиі қойылатын сұрақтар", url: "/kk/admissions/faq" },
                    { name: "Неге КАЗУТБ?", url: "/kk/admissions/why-choose-us" },
                    { name: "Қашықтан оқыту", url: "/kk/admissions/distance-learning" }
                ],
                en: [
                    { name: "Virtual Admissions Office", url: "/en/admissions/virtual-office" },
                    { name: "Virtual Registrar Office", url: "/en/admissions/virtual-registrar" },
                    { name: "Admission Rules", url: "/en/admissions/rules" },
                    { name: "Online Registration", url: "/en/admissions/online-registration" },
                    { name: "Contacts of the admissions Committee", url: "/en/admissions/contacts" },
                    { name: "Admission of International Students", url: "/en/admissions/international" },
                    { name: "Bachelor course", url: "/en/admissions/bachelor" },
                    { name: "Magistracy", url: "/en/admissions/magistracy" },
                    { name: "Alumni", url: "/en/admissions/alumni" },
                    { name: "Frequently Asked Questions", url: "/en/admissions/faq" },
                    { name: "Why Choose Us?", url: "/en/admissions/why-choose-us" },
                    { name: "Distance Learning", url: "/en/admissions/distance-learning" }
                ]

            },
            international: {
                ru: [
                    { name: "Международное сотрудничество", url: "/international/exchange" },
                    { name: "Стажировки", url: "/international/internships" },
                    { name: "Академическая мобильность", url: "/international/academic-mobility" },
                    { name: "Ассоциации, организация и консорциумы", url: "/international/associations" },
                    { name: "Партнеры", url: "/international/partners" }
                ],
                kk: [
                    { name: "Халықаралық ынтымақтастық", url: "/kk/international/exchange" },
                    { name: "Тәжірибелер", url: "/kk/international/internships" },
                    { name: "Академиялық ұтқырлық", url: "/kk/international/academic-mobility" },
                    { name: "Қауымдастықтар, ұйымдар және консорциумдар", url: "/kk/international/associations" },
                    { name: "Серіктестер", url: "/kk/international/partners" }
                ],
                en: [
                    { name: "International Cooperation", url: "/en/international/exchange" },
                    { name: "Internships", url: "/en/international/internships" },
                    { name: "Academic Mobility", url: "/en/international/academic-mobility" },
                    { name: "Associations, Organizations, and Consortia", url: "/en/international/associations" },
                    { name: "Partners", url: "/en/international/partners" }
                ]

            },
            life: {
                ru: [
                    { name: "Комитет по делам молодежи", url: "/our-life/youth-affairs" },
                    { name: "Социальный пакет для обучающихся", url: "/our-life/social-package" },
                    { name: "Воспитательная работа", url: "/our-life/educational-work" },
                    { name: "Клубы по интересам", url: "/our-life/clubs" },
                    { name: "Общежитие", url: "/our-life/clubs" }
                ],
                kk: [
                    { name: "Жастар ісі жөніндегі комитет", url: "/kk/our-life/youth-affairs" },
                    { name: "Студенттерге арналған әлеуметтік пакет", url: "/kk/our-life/social-package" },
                    { name: "Тәрбиелік жұмыс", url: "/kk/our-life/educational-work" },
                    { name: "Қызығушылық клубтары", url: "/kk/our-life/clubs" },
                    { name: "Жатақхана", url: "/kk/our-life/clubs" }
                ],
                en: [
                    { name: "Youth Affairs Committee", url: "/en/our-life/youth-affairs" },
                    { name: "Social Package for Students", url: "/en/our-life/social-package" },
                    { name: "Educational Work", url: "/en/our-life/educational-work" },
                    { name: "Interest Clubs", url: "/en/our-life/clubs" },
                    { name: "Dormitory", url: "/en/our-life/clubs" }
                ]
            },
            career: {
                ru: [
                    { name: "Трудоустройство выпускников", url: "/career/graduate-employment" },
                    { name: "Вакансии для студентов и выпускников", url: "/career/vacancies" },
                    { name: "Центр карьеры", url: "/career/career-center" },
                    { name: "Онлайн-площадки по трудоустройству", url: "/career/online-job-platforms" },
                    { name: "Как составить резюме и найти работу мечты", url: "/career/resume" },
                    { name: "Партнеры", url: "/career/career-partners" },
                    { name: "Отзывы работодателей", url: "/career/employer-reviews" },
                    { name: "Правила успешного трудоустройства", url: "/career/rules-employment" }
                ],
                kk: [
                    { name: "Түлектерді жұмысқа орналастыру", url: "/kk/career/graduate-employment" },
                    { name: "Студенттер мен түлектерге арналған бос орындар", url: "/kk/career/vacancies" },
                    { name: "Мансап орталығы", url: "/kk/career/career-center" },
                    { name: "Жұмысқа орналасу бойынша онлайн платформалар", url: "/kk/career/online-job-platforms" },
                    { name: "Резюме жасау және армандаған жұмысты табу", url: "/kk/career/resume" },
                    { name: "Серіктестер", url: "/kk/career/career-partners" },
                    { name: "Жұмыс берушілердің пікірлері", url: "/kk/career/employer-reviews" },
                    { name: "Жұмысқа орналасудың сәтті ережелері", url: "/kk/career/rules-employment" }
                ],
                en: [
                    { name: "Graduate Employment", url: "/en/career/graduate-employment" },
                    { name: "Vacancies for Students and Graduates", url: "/en/career/vacancies" },
                    { name: "Career Center", url: "/en/career/career-center" },
                    { name: "Online Job Platforms", url: "/en/career/online-job-platforms" },
                    { name: "How to Write a Resume and Find Your Dream Job", url: "/en/career/resume" },
                    { name: "Partners", url: "/en/career/career-partners" },
                    { name: "Employer Reviews", url: "/en/career/employer-reviews" },
                    { name: "Rules for Successful Employment", url: "/en/career/rules-employment" }
                ]
            }
            ,
            education: {
                ru: [
                    { name: "Расписание", url: "/education/schedule" },
                    { name: "Академический календарь", url: "/education/academic-calendar" },
                    { name: "Организация онлайн-обучения в университете", url: "/education/online-education" },
                    { name: "Образовательные программы", url: "/education/programs" },
                    { name: "Управление качеством, аккредитации и рейтинга", url: "/education/quality-management" },
                    { name: "Перевод, восстановление и отчисление", url: "/education/transfer" },
                    { name: "100 новых учебников на казахском “100 kitap”", url: "/education/100-kitap" },
                    { name: "Материально-техническое обеспечение", url: "/education/technical-support" },
                    { name: "Академическое сотрудничество", url: "/education/academic-cooperation" },
                    { name: "Центр обслуживания студентов", url: "/education/student-service" },
                    { name: "Кодекс академической честности", url: "/education/academic-integrity" },
                    { name: "Информация для обладателей гос.гранта", url: "/education/state-grant" },
                    { name: "Справочник путеводитель", url: "/education/guidebook" }
                ],
                kk: [
                    { name: "Кесте", url: "/kk/education/schedule" },
                    { name: "Академиялық күнтізбе", url: "/kk/education/academic-calendar" },
                    { name: "Университетте онлайн оқыту ұйымдастыру", url: "/kk/education/online-education" },
                    { name: "Білім беру бағдарламалары", url: "/kk/education/programs" },
                    { name: "Сапа менеджменті, аккредиттеу және рейтинг", url: "/kk/education/quality-management" },
                    { name: "Аударма, қалпына келтіру және шығару", url: "/kk/education/transfer" },
                    { name: "Қазақ тілінде 100 жаңа оқулық “100 kitap”", url: "/kk/education/100-kitap" },
                    { name: "Материалдық-техникалық қамтамасыз ету", url: "/kk/education/technical-support" },
                    { name: "Академиялық ынтымақтастық", url: "/kk/education/academic-cooperation" },
                    { name: "Студенттерге қызмет көрсету орталығы", url: "/kk/education/student-service" },
                    { name: "Академиялық адалдық кодексі", url: "/kk/education/academic-integrity" },
                    { name: "Мемлекеттік грант иегерлері үшін ақпарат", url: "/kk/education/state-grant" },
                    { name: "Көшбасшылық анықтамалық", url: "/kk/education/guidebook" }
                ],
                en: [
                    { name: "Schedule", url: "/education/schedule" },
                    { name: "Academic Calendar", url: "/education/academic-calendar" },
                    { name: "Organization of online education at the university", url: "/education/online-education" },
                    { name: "Educational Programs", url: "/education/programs" },
                    { name: "Quality Management, Accreditation and Ranking", url: "/education/quality-management" },
                    { name: "Transfer, Restoration, and Expulsion", url: "/education/transfer" },
                    { name: "100 New Textbooks in Kazakh “100 kitap”", url: "/education/100-kitap" },
                    { name: "Material and Technical Support", url: "/education/technical-support" },
                    { name: "Academic Cooperation", url: "/education/academic-cooperation" },
                    { name: "Student Service Center", url: "/education/student-service" },
                    { name: "Academic Integrity Code", url: "/education/academic-integrity" },
                    { name: "Information for State Grant Holders", url: "/education/state-grant" },
                    { name: "Guidebook", url: "/education/guidebook" }
                ]
            },
            science: {
                ru: [
                    { name: "Об отделе", url: "/science/about" },
                    { name: "Международное сотрудничество", url: "/science/international-cooperation" },
                    { name: "Направление научной деятельности", url: "/science/research-directions" },
                    { name: "Научные центры и лаборатории", url: "/science/centers-labs" },
                    { name: "Научные издания", url: "/science/publications" },
                    { name: "Публикации ППС", url: "/science/faculty-publications" },
                    { name: "Совет молодых ученых", url: "/science/young-scientists-council" },
                    { name: "Научно-технический совет", url: "/science/technical-council" },
                    { name: "Научно-исследовательская работа студентов", url: "/science/student-research" }
                ],
                kk: [
                    { name: "Бөлім туралы", url: "/science/about" },
                    { name: "Халықаралық ынтымақтастық", url: "/science/international-cooperation" },
                    { name: "Ғылыми қызмет бағыттары", url: "/science/research-directions" },
                    { name: "Ғылыми орталықтар мен зертханалар", url: "/science/centers-labs" },
                    { name: "Ғылыми жарияланымдар", url: "/science/publications" },
                    { name: "Педагогикалық қызметкерлердің жарияланымдары", url: "/science/faculty-publications" },
                    { name: "Жас ғалымдар кеңесі", url: "/science/young-scientists-council" },
                    { name: "Ғылыми-техникалық кеңес", url: "/science/technical-council" },
                    { name: "Студенттердің ғылыми-зерттеу жұмысы", url: "/science/student-research" }
                ],
                en: [
                    { name: "About the Department", url: "/science/about" },
                    { name: "International Cooperation", url: "/science/international-cooperation" },
                    { name: "Research Activity Directions", url: "/science/research-directions" },
                    { name: "Research Centers and Laboratories", url: "/science/centers-labs" },
                    { name: "Scientific Publications", url: "/science/publications" },
                    { name: "Publications of Faculty Members", url: "/science/faculty-publications" },
                    { name: "Young Scientists Council", url: "/science/young-scientists-council" },
                    { name: "Scientific and Technical Council", url: "/science/technical-council" },
                    { name: "Student Research Work", url: "/science/student-research" }
                ]
            },
            blog: {
                ru: [
                    { name: "Новости", url: "/news" },
                    { name: "Жизнь наших студентов", url: "/our-life" },

                ],
                kk: [
                    { name: "Жаңалықтар", url: "/kk/news" },
                    { name: "Біздің студенттердің өмірі", url: "/kk/our-life" },

                ]
                ,
                en: [
                    { name: "News", url: "/en/news" },
                    { name: "The life of our students", url: "/en/our-life" },

                ]
            }
        };
    </script>
    <title>KazTBU</title>
</head>

<body>

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
                <img src="<?= get_template_directory_uri() . '/assets/img/icon/color.png' ?>" class="arrow" id="arrow">
                <div class="overlay" id="overlay"></div>

                <div class="side-panel" id="sidePanel">
                    <div class="side-panel-header">
                        <p class="side-panel-text">Цветовые темы</p>
                        <p class="side-panel-subtitle">Выберите подходящую схему</p>
                    </div>

                    <div class="side-panel-content">
                        <div class="side-panel-card">
                            <div class="color-option color-blue" data-color="blue">
                                <div class="color-label">Синий</div>
                            </div>
                            <div class="color-option color-green" data-color="green">
                                <div class="color-label">Зеленый</div>
                            </div>
                            <div class="color-option color-pink" data-color="pink">
                                <div class="color-label">Розовый</div>
                            </div>
                        </div>
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
                    <div class="custom-nav-container">
                        <div class="custom-nav">
                            <div class="custom-nav-select"><?= pll_e('site_map') ?></div>
                            <ul class="custom-nav-options">
                                <li data-links="about"><a
                                        href="<?= get_permalink(255) ?>"><?= pll_e('about_university') ?></a>
                                </li>
                                <li data-links="admissions"><a href="#"><?= pll_e('applicant') ?></a></li>
                                <li data-links="international"><a href="#">International</a></li>
                                <li data-links="life"><a href="#"><?= pll_e('life') ?></a></li>
                                <li data-links="career"><a href="#"><?= pll_e('career') ?></a></li>
                                <li data-links="education"><a href="#"><?= pll_e('education') ?></a></li>
                                <li data-links="science"><a href="#"><?= pll_e('science') ?></a></li>
                                <li data-links="blog"><a href="#"><?= pll_e('blog') ?></a></li>
                            </ul>

                            <div class="custom-submenu" id="custom-submenu">
                                <ul id="custom-submenu-links">
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- mobile -->
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
                                <a href="#" class="menu-toggle"><?= pll_e('site_map') ?></a>
                                <div class="dropdown-menu">
                                    <li data-links="about" class="dropdown-li">
                                        <a href="javascript:void(0)"
                                            class="submenu-toggle"><b><?= pll_e('about_university') ?></b></a>
                                        <ul class="submenu">
                                            <li><a href="/about"><?= pll_e('about_us') ?></a></li>
                                            <li><a href="/about/media"><?= pll_e('media') ?></a></li>
                                            <li><a
                                                    href="/about/development-strategy"><?= pll_e('development_strategy') ?></a>
                                            </li>
                                            <li><a href="/about/hr"><?= pll_e('hr') ?></a></li>
                                            <li><a
                                                    href="/about/regulatory-documents"><?= pll_e('regulatory_documents') ?></a>
                                            </li>
                                            <li><a href="/about/anti-corruption"><?= pll_e('anti-corruption_measures') ?>
                                                </a>
                                            </li>
                                            <li><a href="/about/academic-council"><?= pll_e('academic_council') ?></a>
                                            </li>
                                            <li><a
                                                    href="/about/accreditation-and-ratings"><?= pll_e('accreditation_and_ratings') ?></a>
                                            </li>
                                            <li><a href="/about/technopark"><?= pll_e('technopark') ?></a>
                                            </li>
                                            <li><a
                                                    href="/about/administrative-units"><?= pll_e('administrative_divisions') ?></a>
                                            </li>
                                            <li><a href="/about/management"><?= pll_e('administration') ?></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li data-links="admissions" class="dropdown-li">
                                        <a href="javascript:void(0)"
                                            class="submenu-toggle"><b><?= pll_e('applicant') ?></b></a>
                                        <ul class="submenu">
                                            <li><a
                                                    href="/admissions/virtual-office"><?= pll_e('virtual_admissions_office') ?></a>
                                            </li>
                                            <li><a
                                                    href="/admissions/virtual-registrar"><?= pll_e('virtual_office_registrar') ?></a>
                                            </li>
                                            <li><a href="/admissions/rules"><?= pll_e('admission_rules') ?></a></li>
                                            <li><a
                                                    href="/admissions/online-registration"><?= pll_e('online_registration_for_applicants') ?></a>
                                            </li>
                                            <li><a
                                                    href="/admissions/contacts"><?= pll_e('contacts_of_the_admissions_committee') ?></a>
                                            </li>
                                            <li><a
                                                    href="/admissions/international"><?= pll_e('admission_of_foreign_citizens') ?></a>
                                            </li>
                                            <li><a href="/admissions/bachelor"><?= pll_e('bachelor_course') ?></a></li>
                                            <li><a href="/admissions/master"><?= pll_e('magistracy') ?></a></li>
                                            <li><a href="/admissions/alumni"><?= pll_e('graduates') ?></a></li>
                                            <li><a href="/admissions/faq"><?= pll_e('frequently_asked_questions') ?></a>
                                            </li>
                                            <li><a href="/admissions/why-choose-us"><?= pll_e('why') ?></a></li>
                                            <li><a
                                                    href="/admissions/distance-learning"><?= pll_e('distance_education') ?></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li data-links="international" class="dropdown-li">
                                        <a href="javascript:void(0)" class="submenu-toggle"><b>International</b></a>
                                        <ul class="submenu">
                                            <li><a
                                                    href="/international/exchange"><?= pll_e('international_cooperation') ?></a>
                                            </li>
                                            <li><a href="/international/exchange"><?= pll_e('internships') ?></a></li>
                                            <li><a href="/international/exchange"><?= pll_e('academic_mobility') ?></a>
                                            </li>
                                            <li><a
                                                    href="/international/exchange"><?= pll_e('associations_organizations_and_consortia') ?></a>
                                            </li>
                                            <li><a
                                                    href="/international/partners"><?= pll_e('international_partners') ?></a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li data-links="life" class="dropdown-li">
                                        <a href="javascript:void(0)"
                                            class="submenu-toggle"><b><?= pll_e('life') ?></b></a>
                                        <ul class="submenu">
                                            <li><a href="/life/clubs"><?= pll_e('сommittee_on_youth_affairs') ?></a>
                                            </li>
                                            <li><a href="/life/clubs"><?= pll_e('social_package_for_students') ?></a>
                                            </li>
                                            <li><a href="/life/clubs"><?= pll_e('educational_work') ?></a></li>
                                            <li><a href="/life/clubs"><?= pll_e('interest_clubs') ?></a></li>
                                            <li><a href="/life/clubs"><?= pll_e('hostel') ?></a></li>
                                        </ul>
                                    </li>
                                    <li data-links="career" class="dropdown-li">
                                        <a href="javascript:void(0)"
                                            class="submenu-toggle"><b><?= pll_e('career') ?></b></a>
                                        <ul class="submenu">
                                            <li><a href="/career/jobs"><?= pll_e('employment_of_graduates') ?></a></li>
                                            <li><a
                                                    href="/career/jobs"><?= pll_e('vacancies_for_students_and_graduates') ?></a>
                                            </li>
                                            <li><a href="/career/jobs"><?= pll_e('career_center') ?></a></li>
                                            <li><a href="/career/jobs"><?= pll_e('online_job_sites') ?></a></li>
                                            <li><a href="/career/jobs"><?= pll_e('resume') ?></a>
                                            </li>
                                            <li><a href="/career/jobs"><?= pll_e('practice') ?></a></li>
                                            <li><a href="/career/jobs"><?= pll_e('partners') ?></a></li>
                                            <li><a href="/career/jobs"><?= pll_e('employer_reviews') ?></a></li>
                                            <li><a href="/career/jobs"><?= pll_e('rules') ?></a></li>
                                        </ul>
                                    </li>
                                    <li data-links="education" class="dropdown-li">
                                        <a href="javascript:void(0)"
                                            class="submenu-toggle"><b><?= pll_e('education') ?></b></a>
                                        <ul class="submenu">
                                            <li><a href="/education/faculties"><?= pll_e('schedule') ?></a></li>
                                            <li><a href="/education/faculties"><?= pll_e('academic_calendar') ?></a>
                                            </li>
                                            <li><a href="/education/faculties"><?= pll_e('online_learning') ?></a></li>
                                            <li><a href="/education/faculties"><?= pll_e('educational_programs') ?></a>
                                            </li>
                                            <li><a href="/education/faculties"><?= pll_e('quality') ?></a></li>
                                            <li><a href="/education/courses"><?= pll_e('transfer') ?></a>
                                            </li>
                                            <li><a href="/education/schedule"><?= pll_e('100_new_textbooks') ?></a></li>
                                            <li><a href="/education/schedule"><?= pll_e('logistical_support') ?></a>
                                            </li>
                                            <li><a href="/education/schedule"><?= pll_e('academic_collaboration') ?></a>
                                            </li>
                                            <li><a href="/education/schedule"><?= pll_e('student_service_center') ?></a>
                                            </li>
                                            <li><a
                                                    href="/education/schedule"><?= pll_e('the_code_of_academic_integrity') ?></a>
                                            </li>
                                            <li><a href="/education/schedule"><?= pll_e('E-libraries') ?></a></li>
                                            <li><a
                                                    href="/education/schedule"><?= pll_e('information_for_state_grant_holders') ?></a>
                                            </li>
                                            <li><a href="/education/schedule"><?= pll_e('reference_guide') ?></a></li>
                                        </ul>
                                    </li>
                                    <li data-links="science" class="dropdown-li">
                                        <a href="javascript:void(0)"
                                            class="submenu-toggle"><b><?= pll_e('science') ?></b></a>
                                        <ul class="submenu">
                                            <li><a href="/science/research"><?= pll_e('about_the_department') ?></a>
                                            </li>
                                            <li><a
                                                    href="/science/research"><?= pll_e('international_cooperation') ?></a>
                                            </li>
                                            <li><a href="/science/research"><?= pll_e('direct') ?></a></li>
                                            <li><a href="/science/research"><?= pll_e('research_centers') ?></a></li>
                                            <li><a href="/science/research"><?= pll_e('scientific_publications') ?></a>
                                            </li>
                                            <li><a href="/science/research"><?= pll_e('publications_staff') ?></a></li>
                                            <li><a
                                                    href="/science/research"><?= pll_e('council_of_young_scientists') ?></a>
                                            </li>
                                            <li><a
                                                    href="/science/research"><?= pll_e('scientific_and_technical_council') ?></a>
                                            </li>
                                            <li><a href="/science/research"><?= pll_e('students_work') ?></a></li>

                                        </ul>
                                    </li>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="menu-toggle"><?= pll_e('entrace') ?></a>
                                <div class="dropdown-menu">
                                    <a href="#">Тест 1</a>
                                    <a href="#">Тест 2</a>
                                </div>
                            </div>
                            <a href="#" class="menu-toggle-2"><?= pll_e('college') ?></a>
                            <a href="https://vestnik.kaztbu.edu.kz/index.php/kazutb"
                                class="menu-toggle-2"><?= pll_e('vestnik') ?></a>
                            <a href="<?= esc_url(get_permalink(pll_get_post(336))); ?>"
                                class="menu-toggle-2">E-library</a>
                            <a href="<?= esc_url(get_permalink(pll_get_post(221))); ?>"
                                class="menu-toggle-2"><?= pll_e('contacts') ?></a>
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
                    <a class="link" href="<?= esc_url(get_permalink(pll_get_post(453))) ?>"><?= pll_e('entrace') ?></a>
                    <a class="link" href="#"><?= pll_e('college') ?></a>
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
                    <a class="link" href="https://vestnik.kaztbu.edu.kz/index.php/kazutb"><?= pll_e('vestnik') ?></a>
                    <a class="link" href="<?= get_permalink(pll_get_post(336)); ?>">E-library</a>
                    <a class="link" href="<?= get_permalink(pll_get_post(221)) ?>"><?= pll_e('contacts') ?></a>
                </div>
            </div>
        </div>
    </header>