<?php
/**
 * Site Configuration
 * Global settings for the portfolio website
 */

// Site Information
define('SITE_NAME', 'David Cantrell');
define('SITE_TAGLINE', 'Portfolio');
define('SITE_AUTHOR', 'David Cantrell');
define('SITE_YEAR', '2026');

// Contact Information
define('CONTACT_EMAIL', 'david@davidcdesign.com');

// Social Media Links
define('SOCIAL_TWITTER', '#');
define('SOCIAL_LINKEDIN', '#');
define('SOCIAL_GITHUB', '#');
define('SOCIAL_DRIBBBLE', '#');

// Base URL (adjust for your environment)
define('BASE_URL', '');

// Helper function to get full URL
function url($path = '') {
    return BASE_URL . $path;
}

// Helper function to check if current page
function isActivePage($page) {
    $currentPage = basename($_SERVER['PHP_SELF']);
    return $currentPage === $page ? 'active' : '';
}

// Helper function to set page title
function pageTitle($title = '') {
    if ($title) {
        return $title . ' — ' . SITE_NAME;
    }
    return SITE_NAME . ' — ' . SITE_TAGLINE;
}
?>
