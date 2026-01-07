<?php
/**
 * Header Component
 * Reusable header navigation for all pages
 * 
 * Usage: include 'includes/header.php';
 * Optional variable: $activeNav (string) - 'home', 'about', 'portfolio', 'services'
 */

if (!isset($activeNav)) {
    $activeNav = '';
}
?>
<header class="header" id="header">
    <div class="container">
        <a href="<?php echo url('index.php'); ?>" class="logo">
            <div class="logo-icon"><img src="/images/logo.png" alt="David C Design logo"></div>
        </a>
        
        <nav class="nav">
            <ul class="nav-list" id="navList">
                <li><a href="<?php echo url('index.php#home'); ?>" class="nav-link <?php echo $activeNav === 'home' ? 'active' : ''; ?>">Home</a></li>
                <li><a href="<?php echo url('index.php#about'); ?>" class="nav-link <?php echo $activeNav === 'about' ? 'active' : ''; ?>">About</a></li>
                <li><a href="<?php echo url('index.php#portfolio'); ?>" class="nav-link <?php echo $activeNav === 'portfolio' ? 'active' : ''; ?>">Portfolio</a></li>
                <li><a href="<?php echo url('index.php#services'); ?>" class="nav-link <?php echo $activeNav === 'services' ? 'active' : ''; ?>">Services</a></li>
            </ul>
            <a href="<?php echo url('index.php#contact'); ?>" class="btn btn-primary">Get in Touch</a>
            <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </div>
</header>
