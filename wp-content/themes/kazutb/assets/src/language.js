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