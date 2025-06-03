const arrow = document.getElementById('arrow');
const sidePanel = document.getElementById('sidePanel');

// Загрузка сохраненного цвета из LocalStorage при загрузке страницы
const savedColor = localStorage.getItem('selectedColor');
if (savedColor) {
    applyColor(savedColor); // Применяем сохраненный цвет
}

// Добавляем обработчик событий
arrow.addEventListener('click', () => {
    // Переключаем класс 'active' для панели и стрелки
    sidePanel.classList.toggle('panel-open');
    arrow.classList.toggle('panel-open');

    // Меняем текст стрелки в зависимости от состояния
    arrow.textContent = sidePanel.classList.contains('panel-open') ? '<-' : '->';
});

// Обработчик выбора цвета
document.querySelectorAll('.side-panel-card div').forEach(element => {
    element.addEventListener('click', function () {
        const selectedColor = this.getAttribute('data-color');
        applyColor(selectedColor);

        // Сохраняем выбранный цвет в LocalStorage
        localStorage.setItem('selectedColor', selectedColor);
    });
});

// Функция для применения цвета
function applyColor(color) {
    switch (color) {
        case 'blue':
            document.documentElement.style.setProperty('--main-color', '#345A86');
            document.documentElement.style.setProperty('--second-color', '#4974B2');
            break;
        case 'green':
            document.documentElement.style.setProperty('--main-color', '#2D6B4B');
            document.documentElement.style.setProperty('--second-color', '#3C8A62');
            break;
        case 'pink':
            document.documentElement.style.setProperty('--main-color', '#8A3C64');
            document.documentElement.style.setProperty('--second-color', '#B2527D');
            break;
    }
}

// Бургер
document.querySelector('.burger').addEventListener('click', function () {
    const menu = document.getElementById('sideMenu');
    const overlay = document.querySelector('.overlay');
    menu.classList.toggle('open');
    overlay.style.display = overlay.style.display === 'block' ? 'none' : 'block';
});

document.querySelector('.close-btn').addEventListener('click', function () {
    const menu = document.querySelector('.menu-mobile-burger');
    const overlay = document.querySelector('.overlay');
    menu.classList.remove('open');
    overlay.style.display = 'none';
});

document.querySelector('.overlay').addEventListener('click', function () {
    const menu = document.querySelector('.menu-mobile-burger');
    const overlay = document.querySelector('.overlay');
    menu.classList.remove('open');
    overlay.style.display = 'none';
});

document.querySelector('.menu-toggle').addEventListener('click', function () {
    const menuItems = document.querySelector('.menu-items');
    menuItems.classList.toggle('open'); // Переключаем класс 'open' для показа/скрытия навигации
});

// Обработчик для всех выпадающих меню
document.querySelectorAll('.menu-toggle').forEach(function (toggle) {
    toggle.addEventListener('click', function (event) {
        event.preventDefault(); // Предотвращаем переход по ссылке
        const parentDropdown = this.parentElement;
        parentDropdown.classList.toggle('open'); // Переключаем класс 'open'

        // Закрываем другие выпадающие меню
        document.querySelectorAll('.dropdown').forEach(function (dropdown) {
            if (dropdown !== parentDropdown) {
                dropdown.classList.remove('open');
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

