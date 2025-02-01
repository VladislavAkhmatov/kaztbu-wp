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
                    { name: "История", url: "/about/history" },
                    { name: "Миссия", url: "/about/mission" },
                    { name: "Руководство", url: "/about/management" }
                ],
                kk: [
                    { name: "Тарих", url: "/kk/about/history" },
                    { name: "Миссия", url: " /kk/about/mission" },
                    { name: "Басшылық", url: "/kk/about/management" }
                ],
                en: [
                    { name: "History", url: "/en/about/history" },
                    { name: "Mission", url: "/en/about/mission" },
                    { name: "Management", url: "/en/about/management" }
                ]
            },
            admissions: {
                ru: [
                    { name: "Правила поступления", url: "/admissions/rules" },
                    { name: "Документы", url: "/admissions/documents" },
                    { name: "Контакты", url: "/admissions/contacts" }
                ],
                kk: [
                    { name: "Қабылдау ережелері", url: "/kk/admissions/rules" },
                    { name: "Құжаттар", url: "/kk/admissions/documents" },
                    { name: "Байланыс", url: "/kk/admissions/contacts" }
                ],
                en: [
                    { name: "Admission Rules", url: "/en/admissions/rules" },
                    { name: "Documents", url: "/en/admissions/documents" },
                    { name: "Contacts", url: "/en/admissions/contacts" }
                ]
            },
            international: {
                ru: [
                    { name: "Программы обмена", url: "/international/exchange" },
                    { name: "Партнеры", url: "/international/partners" }
                ],
                kk: [
                    { name: "Алмасу бағдарламалары", url: "/kk/international/exchange" },
                    { name: "Серіктестер", url: "/kk/international/partners" }
                ],
                en: [
                    { name: "Exchange Programs", url: "/en/international/exchange" },
                    { name: "Partners", url: "/en/international/partners" }
                ]
            },
            life: {
                ru: [
                    { name: "Студенческие клубы", url: "/life/clubs" },
                    { name: "Кампус", url: "/life/campus" },
                    { name: "События", url: "/life/events" }
                ],
                kk: [
                    { name: "Студенттік клубтар", url: "/kk/life/clubs" },
                    { name: "Кампус", url: "/kk/life/campus" },
                    { name: "Оқиғалар", url: "/kk/life/events" }
                ],
                en: [
                    { name: "Student Clubs", url: "/en/life/clubs" },
                    { name: "Campus", url: "/en/life/campus" },
                    { name: "Events", url: "/en/life/events" }
                ]
            },
            career: {
                ru: [
                    { name: "Вакансии", url: "/career/jobs" },
                    { name: "Стажировки", url: "/career/internships" }
                ],
                kk: [
                    { name: "Бос орындар", url: "/kk/career/jobs" },
                    { name: "Тәжірибелер", url: "/kk/career/internships" }
                ],
                en: [
                    { name: "Vacancies", url: "/en/career/jobs" },
                    { name: "Internships", url: "/en/career/internships" }
                ]
            },
            education: {
                ru: [
                    { name: "Факультеты", url: "/education/faculties" },
                    { name: "Курсы", url: "/education/courses" },
                    { name: "Расписание", url: "/education/schedule" }
                ],
                kk: [
                    { name: "Факультеттер", url: "/kk/education/faculties" },
                    { name: "Курстар", url: "/kk/education/courses" },
                    { name: "Кесте", url: "/kk/education/schedule" }
                ],
                en: [
                    { name: "Faculties", url: "/en/education/faculties" },
                    { name: "Courses", url: "/en/education/courses" },
                    { name: "Schedule", url: "/en/education/schedule" }
                ]
            },
            science: {
                ru: [
                    { name: "Исследования", url: "/science/research" },
                    { name: "Гранты", url: "/science/grants" },
                    { name: "Публикации", url: "/science/publications" }
                ],
                kk: [
                    { name: "Зерттеулер", url: "/kk/science/research" },
                    { name: "Гранттар", url: "/kk/science/grants" },
                    { name: "Жарияланымдар", url: "/kk/science/publications" }
                ],
                en: [
                    { name: "Research", url: "/en/science/research" },
                    { name: "Grants", url: "/en/science/grants" },
                    { name: "Publications", url: "/en/science/publications" }
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
                        <a class="eye" href="">
                            <img src="<?= get_template_directory_uri() . '/assets/img/icon/eye.svg' ?>" alt="">
                        </a>
                        <a class="search" href="">
                            <img src="<?= get_template_directory_uri() . '/assets/img/icon/search.svg' ?>" alt="">
                        </a>
                        <div class="header-help-select">
                            <?php pll_the_languages([
                                'dropdown' => 1,   // Использовать выпадающий список
                                'show_flags' => 1,   // Показывать флаги
                                'show_names' => 0,   // Не показывать названия языков
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
                                            <a href="#">Тест 1</a>
                                            <a href="#">Тест 2</a>
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
                                        <a href="#">Тест 1</a>
                                        <a href="#">Тест 2</a>
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
                                    <a href="#">test 1</a>
                                    <a href="#">test 2</a>
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
                            <a href="https://vestnik.kaztbu.edu.kz/index.php/kazutb" class="menu-toggle-2">KazUTB Bulletin</a>
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