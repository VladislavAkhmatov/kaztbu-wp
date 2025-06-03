<?php
function kaztbu_assets()
{
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('script-js', get_template_directory_uri() . '/assets/src/script.js');
}

add_action('wp_enqueue_scripts', 'kaztbu_assets');
add_action('init', 'translate_strings');
show_admin_bar(false);


function formatting_date($date)
{
    return date('d.m.Y', strtotime($date));
}

// ПРЕВОД САЙТА
function translate_strings()
{
    if (!function_exists('pll_register_string')) {
        return;
    }

    // Шапка
    pll_register_string('color', 'color', 'header', false);
    pll_register_string('contacts', 'contacts', 'header', false);
    pll_register_string('vestnik', 'vestnik', 'header', false);
    pll_register_string('college', 'college', 'header', false);
    pll_register_string('entrace', 'entrace', 'header', false);
    pll_register_string('site_map', 'site_map', 'header', false);
    pll_register_string('about_university', 'about_university', 'header', false);
    pll_register_string('applicant', 'applicant', 'header', false);
    pll_register_string('career', 'career', 'header', false);
    pll_register_string('life', 'life', 'header', false);
    pll_register_string('education', 'education', 'header', false);
    pll_register_string('science', 'science', 'header', false);
    pll_register_string('blog', 'blog', 'header', false);

    // Подменю об университете
    pll_register_string('about_us', 'about_us', 'submenu-about-university', false);
    pll_register_string('media', 'media', 'submenu-about-university', false);
    pll_register_string('development_strategy', 'development_strategy', 'submenu-about-university', false);
    pll_register_string('hr', 'hr', 'submenu-about-university', false);
    pll_register_string('regulatory_documents', 'regulatory_documents', 'submenu-about-university', false);
    pll_register_string('anti-corruption_measures', 'anti-corruption_measures', 'submenu-about-university', false);
    pll_register_string('academic_council', 'academic_council', 'submenu-about-university', false);
    pll_register_string('accreditation_and_ratings', 'accreditation_and_ratings', 'submenu-about-university', false);
    pll_register_string('technopark', 'technopark', 'submenu-about-university', false);
    pll_register_string('administrative_divisions', 'administrative_divisions', 'submenu-about-university', false);
    pll_register_string('administration', 'administration', 'submenu-about-university', false);

    // Подменю абитуриента
    pll_register_string('virtual_admissions_office', 'virtual_admissions_office', 'submenu-applicant', false);
    pll_register_string('virtual_office_registrar', 'virtual_office_registrar', 'submenu-applicant', false);
    pll_register_string('admission_rules', 'admission_rules', 'submenu-applicant', false);
    pll_register_string('online_registration_for_applicants', 'online_registration_for_applicants', 'submenu-applicant', false);
    pll_register_string('contacts_of_the_admissions_committee', 'contacts_of_the_admissions_committee', 'submenu-applicant', false);
    pll_register_string('admission_of_foreign_citizens', 'admission_of_foreign_citizens', 'submenu-applicant', false);
    pll_register_string('bachelor_course', 'bachelor_course', 'submenu-applicant', false);
    pll_register_string('magistracy', 'magistracy', 'submenu-applicant', false);
    pll_register_string('graduates', 'graduates', 'submenu-applicant', false);
    pll_register_string('frequently_asked_questions', 'frequently_asked_questions', 'submenu-applicant', false);
    pll_register_string('why', 'why', 'submenu-applicant', false);
    pll_register_string('distance_education', 'distance_education', 'submenu-applicant', false);

    // Подменю international
    pll_register_string('international_cooperation', 'international_cooperation', 'submenu-international', false);
    pll_register_string('internships', 'internships', 'submenu-international', false);
    pll_register_string('academic_mobility', 'academic_mobility', 'submenu-international', false);
    pll_register_string('associations_organizations_and_consortia', 'associations_organizations_and_consortia', 'submenu-international', false);
    pll_register_string('international_partners', 'international_partners', 'submenu-international', false);

    // Подменю жизнь в казутб
    pll_register_string('сommittee_on_youth_affairs', 'сommittee_on_youth_affairs', 'submenu-life', false);
    pll_register_string('social_package_for_students', 'social_package_for_students', 'submenu-life', false);
    pll_register_string('educational_work', 'educational_work', 'submenu-life', false);
    pll_register_string('interest_clubs', 'interest_clubs', 'submenu-life', false);
    pll_register_string('hostel', 'hostel', 'submenu-life', false);

    // Подменю карьера
    pll_register_string('employment_of_graduates', 'employment_of_graduates', 'submenu-career', false);
    pll_register_string('vacancies_for_students_and_graduates', 'vacancies_for_students_and_graduates', 'submenu-career', false);
    pll_register_string('career_center', 'career_center', 'submenu-career', false);
    pll_register_string('online_job_sites', 'online_job_sites', 'submenu-career', false);
    pll_register_string('resume', 'resume', 'submenu-career', false);
    pll_register_string('practice', 'practice', 'submenu-career', false);
    pll_register_string('partners', 'partners', 'submenu-career', false);
    pll_register_string('employer_reviews', 'employer_reviews', 'submenu-career', false);
    pll_register_string('rules', 'rules', 'submenu-career', false);

    // Подменю образование
    pll_register_string('schedule', 'schedule', 'submenu-education', false);
    pll_register_string('academic_calendar', 'academic_calendar', 'submenu-education', false);
    pll_register_string('online_learning', 'online_learning', 'submenu-education', false);
    pll_register_string('educational_programs', 'educational_programs', 'submenu-education', false);
    pll_register_string('quality', 'quality', 'submenu-education', false);
    pll_register_string('transfer', 'transfer', 'submenu-education', false);
    pll_register_string('100_new_textbooks', '100_new_textbooks', 'submenu-education', false);
    pll_register_string('logistical_support', 'logistical_support', 'submenu-education', false);
    pll_register_string('academic_collaboration', 'academic_collaboration', 'submenu-education', false);
    pll_register_string('student_service_center', 'student_service_center', 'submenu-education', false);
    pll_register_string('the_code_of_academic_integrity', 'the_code_of_academic_integrity', 'submenu-education', false);
    pll_register_string('E-libraries', 'E-libraries', 'submenu-education', false);
    pll_register_string('information_for_state_grant_holders', 'information_for_state_grant_holders', 'submenu-education', false);
    pll_register_string('reference_guide', 'reference_guide', 'submenu-education', false);

    // Подменю наука
    pll_register_string('about_the_department', 'about_the_department', 'submenu-science', false);
    pll_register_string('international_cooperation', 'international_cooperation', 'submenu-science', false);
    pll_register_string('direct', 'direct', 'submenu-science', false);
    pll_register_string('research_centers', 'research_centers', 'submenu-science', false);
    pll_register_string('scientific_publications', 'scientific_publications', 'submenu-science', false);
    pll_register_string('publications_staff', 'publications_staff', 'submenu-science', false);
    pll_register_string('council_of_young_scientists', 'council_of_young_scientists', 'submenu-science', false);
    pll_register_string('scientific_and_technical_council', 'scientific_and_technical_council', 'submenu-science', false);
    pll_register_string('students_work', 'students_work', 'submenu-science', false);

    // Главная страница
    pll_register_string('button_awards', 'button_awards', 'main', false);
    pll_register_string('button_egov', 'button_egov', 'main', false);
    pll_register_string('international_coop', 'international_coop', 'main', false);
    pll_register_string('students', 'students', 'main', false);
    pll_register_string('life', 'life', 'main', false);
    pll_register_string('science', 'science', 'main', false);
    pll_register_string('career', 'career', 'main', false);
    pll_register_string('rector', 'rector', 'main', false);
    pll_register_string('faculties', 'faculties', 'main', false);
    pll_register_string('sections', 'sections', 'main', false);
    pll_register_string('training', 'training', 'main', false);
    pll_register_string('events', 'events', 'main', false);
    pll_register_string('science_sections', 'science_sections', 'main', false);
    pll_register_string('section_training_title1', 'section_training_title1', 'main', false);
    pll_register_string('section_training_text1', 'section_training_text1', 'main', false);
    pll_register_string('section_training_title2', 'section_training_title2', 'main', false);
    pll_register_string('section_training_text2', 'section_training_text2', 'main', false);
    pll_register_string('section_training_title3', 'section_training_title3', 'main', false);
    pll_register_string('section_training_text3', 'section_training_text3', 'main', false);
    pll_register_string('section_science_title1', 'section_science_title1', 'main', false);
    pll_register_string('section_science_text1', 'section_science_text1', 'main', false);
    pll_register_string('section_science_title2', 'section_science_title2', 'main', false);
    pll_register_string('section_science_text2', 'section_science_text2', 'main', false);
    pll_register_string('section_science_title3', 'section_science_title3', 'main', false);
    pll_register_string('section_science_text3', 'section_science_text3', 'main', false);
    pll_register_string('more', 'more', 'main', false);
    pll_register_string('about_title', 'about_title', 'main', false);
    pll_register_string('about_text', 'about_text', 'main', false);
    pll_register_string('links_title', 'links_title', 'main', false);
    pll_register_string('links_title_mob', 'links_title_mob', 'main', false);
    pll_register_string('links_sale_title', 'links_sale_title', 'main', false);
    pll_register_string('links_sale_text', 'links_sale_text', 'main', false);
    pll_register_string('links_entrace_title', 'links_entrace_title', 'main', false);
    pll_register_string('links_entrace_text', 'links_entrace_text', 'main', false);
    pll_register_string('about_university', 'about_university', 'main', false);
    pll_register_string('about_university_specialization', 'about_university_specialization', 'main', false);
    pll_register_string('about_university_students', 'about_university_students', 'main', false);
    pll_register_string('about_university_teachers', 'about_university_teachers', 'main', false);
    pll_register_string('live_title', 'live_title', 'main', false);
    pll_register_string('our_partners', 'our_partners', 'main', false);

    // Контакты
    pll_register_string('main_address', 'main_address', 'contacts', false);
    pll_register_string('address', 'address', 'contacts', false);
    pll_register_string('phones', 'phones', 'contacts', false);
    pll_register_string('admission_committee', 'admission_committee', 'contacts', false);
    pll_register_string('map_title', 'map_title', 'contacts', false);

    // Блог ректора
    pll_register_string('rector_title', 'rector_title', 'rector', false);
    pll_register_string('rector_text', 'rector_text', 'rector', false);

    // О нас
    pll_register_string('about_subtitle', 'about_subtitle', 'about', false);
}