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
                ru: ["История", "Миссия", "Руководство"],
                kk: ["Тарих", "Миссия", "Басшылық"],
                en: ["History", "Mission", "Management"]
            },
            admissions: {
                ru: ["Правила поступления", "Документы", "Контакты"],
                kk: ["Қабылдау ережелері", "Құжаттар", "Байланыс"],
                en: ["Admission Rules", "Documents", "Contacts"]
            },
            international: {
                ru: ["Программы обмена", "Партнеры"],
                kk: ["Алмасу бағдарламалары", "Серіктестер"],
                en: ["Exchange Programs", "Partners"]
            },
            life: {
                ru: ["Студенческие клубы", "Кампус", "События"],
                kk: ["Студенттік клубтар", "Кампус", "Оқиғалар"],
                en: ["Student Clubs", "Campus", "Events"]
            },
            career: {
                ru: ["Вакансии", "Стажировки"],
                kk: ["Бос орындар", "Тәжірибелер"],
                en: ["Vacancies", "Internships"]
            },
            education: {
                ru: ["Факультеты", "Курсы", "Расписание"],
                kk: ["Факультеттер", "Курстар", "Кесте"],
                en: ["Faculties", "Courses", "Schedule"]
            },
            science: {
                ru: ["Исследования", "Гранты", "Публикации"],
                kk: ["Зерттеулер", "Гранттар", "Жарияланымдар"],
                en: ["Research", "Grants", "Publications"]
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
                            <div class="custom-nav">
                                <div class="custom-nav-select">Карта сайта</div>
                                <ul class="custom-nav-options">
                                    <li data-links="about">Об университете</li>
                                    <li data-links="admissions">Абитуриенту</li>
                                    <li data-links="international">International</li>
                                    <li data-links="life">Жизнь в КазУТБ</li>
                                    <li data-links="career">Карьера</li>
                                    <li data-links="education">Образование</li>
                                    <li data-links="science">Наука</li>
                                </ul>
                            </div>
                            <div class="custom-submenu" id="custom-submenu">
                                <ul id="custom-submenu-links"></ul>
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
                                    <a href="#" class="menu-toggle-2">Вестник KazUTB</a>
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
                            <a class="link" href="#">Вестник KazUTB</a>
                            <a class="link" href="#">E-library</a>
                            <a class="link" href="<?= get_permalink(221) ?>">Контакты</a>
                        </div>





                        <?php
                        } elseif ($current_language == 'kk') {
                            ?>




                        <div class="custom-nav">
                            <div class="custom-nav-select">Сайт картасы</div>
                            <ul class="custom-nav-options">
                                <li data-links="about">Университет туралы</li>
                                <li data-links="admissions">Талапкерге</li>
                                <li data-links="international">International</li>
                                <li data-links="life">ҚазТБУ-дағы өмір</li>
                                <li data-links="career">Мансап</li>
                                <li data-links="education">Білім</li>
                                <li data-links="science">Ғылым</li>
                            </ul>
                        </div>
                        <div class="custom-submenu" id="custom-submenu">
                            <ul id="custom-submenu-links"></ul>
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
                                <a href="#" class="menu-toggle-2">Хабаршы KazUTB</a>
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
                        <a class="link" href="#">Хабаршы KazUTB</a>
                        <a class="link" href="#">E-library</a>
                        <a class="link" href="<?= get_permalink(227) ?>">Байланыс</a>
                    </div>



                    <?php
                        } else {
                            ?>



                    <div class="custom-nav">
                        <div class="custom-nav-select">Site map</div>
                        <ul class="custom-nav-options">
                            <li data-links="about">About the University</li>
                            <li data-links="admissions">To the applicant</li>
                            <li data-links="international">International</li>
                            <li data-links="life">Life in KazUTB</li>
                            <li data-links="career">Career</li>
                            <li data-links="education">Education</li>
                            <li data-links="science">Science</li>
                        </ul>
                    </div>
                    <div class="custom-submenu" id="custom-submenu">
                        <ul id="custom-submenu-links"></ul>
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
                            <a href="#" class="menu-toggle-2">KazUTB Bulletin</a>
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
                    <a class="link" href="#">KazUTB Bulletin</a>
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