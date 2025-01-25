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
                            <select class="header-nav-select">
                                <option value="ru">Карта сайта</option>
                            </select>
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
                            <div class="header-nav-logo">
                                <img class="logo" src="http://kaztbu/wp-content/uploads/2025/01/logo.png" alt="">
                            </div>
                        </div>
                        <div class="header-nav-right">
                            <a class="link" href="#">Вестник KazUTB</a>
                            <a class="link" href="#">E-library</a>
                            <a class="link" href="#">Контакты</a>

                        </div>





                        <?php
                        } elseif ($current_language == 'kk') {
                            ?>




                        <select class="header-nav-select">
                            <option value="ru">Сайт картасы</option>
                        </select>
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
                        <div class="header-nav-logo">
                            <img class="logo" src="<?= get_template_directory_uri() . '/assets/img/template/logo.svg' ?>"
                                alt="">
                        </div>
                    </div>
                    <div class="header-nav-right">
                        <a class="link" href="#">Хабаршы KazUTB</a>
                        <a class="link" href="#">E-library</a>
                        <a class="link" href="#">Байланыс</a>
                    </div>



                    <?php
                        } else {
                            ?>



                    <select class="header-nav-select">
                        <option value="ru">Site map</option>
                    </select>
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
                    <div class="header-nav-logo">
                        <img class="logo" src="<?= get_template_directory_uri() . '/assets/img/template/logo.svg' ?>" alt="">
                    </div>
                </div>
                <div class="header-nav-right">
                    <a class="link" href="#">KazUTB Bulletin</a>
                    <a class="link" href="#">E-library</a>
                    <a class="link" href="#">Contacts</a>
                </div>


                <?php
                        }
                    }
                    ?>
        </div>
        </div>
    </header>