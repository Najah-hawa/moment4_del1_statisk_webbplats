<?php
/**
 * Plugin Name: Custom Contact Plugin
 * Description: Plugin لإنشاء صفحة Contact Us.
 * Version: 1.0
 * Author: Najah Hawa
 */
// عرض نموذج الاتصال باستخدام شورت كود
function add_custom_contact_form() {
    ob_start();
    echo custom_contact_form();
    return ob_get_clean();
}
add_shortcode('custom_contact_form', 'add_custom_contact_form');
// إضافة صفحة Contact Us إلى القائمة
function add_contact_page() {
    add_menu_page('Contact Us', 'Contact Us', 'manage_options', 'custom-contact', 'custom_contact_page', '', 6);
}
function custom_contact_page() {
    echo do_shortcode('[custom_contact_form]');
}
add_action('admin_menu', 'add_contact_page');

?>