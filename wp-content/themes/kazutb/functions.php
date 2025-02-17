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


function translate_strings()
{
    if (!function_exists('pll_register_string')) {
        return;
    }
    // Главная
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
    pll_register_string('reference_guide', 'reference_guide', 'submenu-education', false);
}