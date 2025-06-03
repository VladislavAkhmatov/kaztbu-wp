document.addEventListener('DOMContentLoaded', () => {
    const arrow = document.getElementById('arrow');
    const sidePanel = document.getElementById('sidePanel');

    // Загрузка сохраненного цвета из LocalStorage при загрузке страницы
    const savedColor = localStorage.getItem('selectedColor');
    if (savedColor) {
        applyColor(savedColor); // Применяем сохраненный цвет
    } else {
        applyDefaultColor(); // Применяем цвет по умолчанию
    }

    // Добавляем обработчик событий для стрелки
    if (arrow && sidePanel) {
        arrow.addEventListener('click', () => {
            sidePanel.classList.toggle('panel-open');
            arrow.classList.toggle('panel-open');
        });
    } else {
        console.warn("Элементы 'arrow' или 'sidePanel' не найдены.");
    }

    // Обработчик выбора цвета
    const colorElements = document.querySelectorAll('.side-panel-card div');
    if (colorElements.length > 0) {
        colorElements.forEach(element => {
            element.addEventListener('click', function () {
                const selectedColor = this.getAttribute('data-color');
                applyColor(selectedColor);

                // Сохраняем выбранный цвет в LocalStorage
                localStorage.setItem('selectedColor', selectedColor);
            });
        });
    } else {
        console.warn("Элементы выбора цвета не найдены.");
    }

    // Функция для применения цвета
    function applyColor(color) {
        switch (color) {
            case 'blue':
                document.documentElement.style.setProperty('--main-color', '#345A86');
                document.documentElement.style.setProperty('--second-color', '#4974B2');
                document.documentElement.style.setProperty('--button-hover', '#193453');
                break;
            case 'green':
                document.documentElement.style.setProperty('--main-color', '#2D6B4B');
                document.documentElement.style.setProperty('--second-color', '#3C8A62');
                document.documentElement.style.setProperty('--button-hover', '#1e5338');
                break;
            case 'pink':
                document.documentElement.style.setProperty('--main-color', '#8A3C64');
                document.documentElement.style.setProperty('--second-color', '#B2527D');
                document.documentElement.style.setProperty('--button-hover', '#5e2040');
                break;
            default:
                applyDefaultColor();
        }
    }

    function applyDefaultColor() {
        document.documentElement.style.setProperty('--main-color', '#345A86'); // Белый цвет
        document.documentElement.style.setProperty('--second-color', '#4974B2');
        document.documentElement.style.setProperty('--button-hover', '#193453'); // Светло-серый для кнопок
    }

    // Бургер меню
    const burger = document.querySelector('.burger');
    if (burger) {
        burger.addEventListener('click', () => {
            const menu = document.getElementById('sideMenu');
            const overlay = document.querySelector('.overlay');
            if (menu && overlay) {
                menu.classList.toggle('open');
                overlay.style.display = overlay.style.display === 'block' ? 'none' : 'block';
            }
        });
    } else {
        console.warn("Элемент 'burger' не найден.");
    }

    const closeButton = document.querySelector('.close-btn');
    if (closeButton) {
        closeButton.addEventListener('click', () => {
            const menu = document.querySelector('.menu-mobile-burger');
            const overlay = document.querySelector('.overlay');
            if (menu && overlay) {
                menu.classList.remove('open');
                overlay.style.display = 'none';
            }
        });
    }

    const overlay = document.querySelector('.overlay');
    if (overlay) {
        overlay.addEventListener('click', () => {
            const menu = document.querySelector('.menu-mobile-burger');
            if (menu) {
                menu.classList.remove('open');
                overlay.style.display = 'none';
            }
        });
    }



    // Обработчик для всех выпадающих меню
    const menuToggles = document.querySelectorAll('.menu-toggle');
    if (menuToggles.length > 0) {
        menuToggles.forEach(toggle => {
            toggle.addEventListener('click', event => {
                event.preventDefault(); // Предотвращаем переход по ссылке
                const parentDropdown = toggle.parentElement;
                parentDropdown.classList.toggle('open'); // Переключаем класс 'open'

                // Закрываем другие выпадающие меню
                document.querySelectorAll('.dropdown').forEach(dropdown => {
                    if (dropdown !== parentDropdown) {
                        dropdown.classList.remove('open');
                    }
                });
            });
        });
    } else {
        console.warn("Элементы '.menu-toggle' не найдены.");
    }
    // Обработчик для submenu-toggle
    const submenuToggles = document.querySelectorAll('.submenu-toggle');
    if (submenuToggles.length > 0) {
        submenuToggles.forEach(toggle => {
            toggle.addEventListener('click', event => {
                event.preventDefault(); // Предотвращаем переход по ссылке
                const parentDropdown = toggle.closest('li'); // Получаем родительский <li>
                parentDropdown.classList.toggle('open'); // Переключаем класс 'open'

                // Закрываем другие подменю
                document.querySelectorAll('.dropdown-li').forEach(dropdown => {
                    if (dropdown !== parentDropdown) {
                        dropdown.classList.remove('open');
                    }
                });
            });
        });
    } else {
        console.warn("Элементы '.submenu-toggle' не найдены.");
    }


    const buttons = document.querySelectorAll('.sections-buttons button');
    const sections = document.querySelectorAll('.sections-cards');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // Если кнопка уже активная, то не делаем ничего
            if (button.classList.contains('active')) return;

            // Убираем класс active у всех кнопок и добавляем disabled
            buttons.forEach(btn => {
                btn.classList.remove('active');
                btn.classList.add('disabled');
            });

            // Теперь добавляем класс active только к той кнопке, на которую кликнули
            button.classList.add('active');
            button.classList.remove('disabled');

            // Плавное переключение секций
            sections.forEach(section => {
                if (section.classList.contains('active-section')) {
                    section.classList.remove('active-section');
                    section.style.display = 'none'; // Скрываем через задержку
                }
            });

            // Показываем новый блок
            const target = button.getAttribute('data-target');
            const newSection = document.querySelector(`[data-section="${target}"]`);
            newSection.style.display = 'flex';
            newSection.style.marginTop = '30px';
            newSection.style.gap = '75px';
            newSection.style.flexWrap = 'wrap';
            setTimeout(() => newSection.classList.add('active-section'), 10);
        });
    });

    document.querySelectorAll('.sections-card-text h3').forEach(h3 => {
        const maxLength = 50; // Максимальное количество символов
        if (h3.textContent.length > maxLength) {
            h3.textContent = h3.textContent.substring(0, maxLength) + '...';
        }
    });

    document.querySelectorAll('.sections-card-text p').forEach(p => {
        const maxLength = 200; // Максимальное количество символов
        if (p.textContent.length > maxLength) {
            p.textContent = p.textContent.substring(0, maxLength) + '...';
        }
    });

    const swiper = new Swiper('.swiper', {
        slidesPerView: 1,  // Показывать один слайд за раз
        spaceBetween: 10,  // Отступы между слайдами
        navigation: {      // Добавление кнопок для прокрутки
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 3000,  // Задержка между слайдами (в миллисекундах)
            disableOnInteraction: false,  // Прокрутка будет продолжаться даже после взаимодействия
        },
        loop: true,
    });


    const submenu = document.getElementById("custom-submenu");
    const submenuLinks = document.getElementById("custom-submenu-links");
    let submenuTimeout;

    // Обрабатываем наведение на пункты основного меню
    document.querySelectorAll(".custom-nav-options li").forEach(item => {
        item.addEventListener("mouseenter", (e) => {
            clearTimeout(submenuTimeout);

            let key = e.target.getAttribute("data-links");
            let links = linksData[key] ? linksData[key][currentLanguage] : null;

            if (links) {
                submenuLinks.innerHTML = links.map(link =>
                    `<a class="custom-submenu-links" href="${link.url}"><li class="custom-submenu-links-li">${link.name}</li></a>`
                ).join("");

                submenu.style.display = "block";
                submenu.style.top = e.target.offsetTop + "px";
            }
        });
    });

    // Убираем задержку скрытия, если курсор на меню или подменю
    const menuContainer = document.querySelector(".custom-nav-options");

    function hideSubmenu() {
        submenuTimeout = setTimeout(() => {
            if (!submenu.matches(":hover") && !menuContainer.matches(":hover")) {
                submenu.style.display = "none";
            }
        }, 300);
    }

    menuContainer.addEventListener("mouseleave", hideSubmenu);
    submenu.addEventListener("mouseleave", hideSubmenu);

    menuContainer.addEventListener("mouseenter", () => clearTimeout(submenuTimeout));
    submenu.addEventListener("mouseenter", () => clearTimeout(submenuTimeout));



    document.addEventListener("DOMContentLoaded", function () {
        const settings = localStorage.getItem("accessibilitySettings");
        if (settings) {
            document.body.classList.add(...settings.split(" "));
        }

        document.querySelectorAll("#wpac-panel button").forEach(button => {
            button.addEventListener("click", function () {
                setTimeout(() => {
                    const activeClasses = Array.from(document.body.classList)
                        .filter(cls => cls.startsWith("wpac-"));
                    localStorage.setItem("accessibilitySettings", activeClasses.join(" "));
                }, 500);
            });
        });
    });



    document.addEventListener("DOMContentLoaded", function () {
        const dropdownToggles = document.querySelectorAll('.dropdown .menu-toggle');

        dropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', function (e) {
                const dropdown = this.closest('.dropdown');
                dropdown.classList.toggle('open');
            });
        });
    });

    jQuery(document).ready(function ($) {
        $('.custom-dropdown-toggle').click(function (e) {
            e.preventDefault();
            $(this).next('.custom-dropdown-menu').slideToggle();
        });

        $(document).click(function (e) {
            if (!$(e.target).closest('.custom-dropdown').length) {
                $('.custom-dropdown-menu').slideUp();
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const textElements = document.querySelectorAll(".page-news-content p");
    const maxLength = 300; // Максимальное количество символов

    textElements.forEach(textElement => {
        if (textElement.textContent.length > maxLength) {
            textElement.textContent = textElement.textContent.substring(0, maxLength) + "...";
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const textElements = document.querySelectorAll(".page-news-content h2");
    const maxLength = 55; // Максимальное количество символов

    textElements.forEach(textElement => {
        if (textElement.textContent.length > maxLength) {
            textElement.textContent = textElement.textContent.substring(0, maxLength) + "...";
        }
    });
});

