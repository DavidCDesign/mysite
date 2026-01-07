<?php
require_once 'includes/config.php';

// Page Configuration
$pageTitle = pageTitle('Baja Tarmac Racing — Case Study');
$activeNav = 'portfolio';
$additionalCSS = ['css/spotlight.css'];
$additionalScripts = ['js/spotlight.js'];
?>
<?php include 'includes/head.php'; ?>

    <?php include 'includes/header.php'; ?>

    <section class="page-header">
        <div class="container">
            <nav class="breadcrumb">
                <a href="<?php echo url('index.php'); ?>">Home</a>
                <span class="breadcrumb-separator">/</span>
                <a href="<?php echo url('index.php#portfolio'); ?>">Portfolio</a>
                <span class="breadcrumb-separator">/</span>
                <span>Baja Tarmac Racing</span>
            </nav>
            <h1 class="page-title"><em>Baja Tarmac Racing</em></h1>
            <p class="page-description">A fresh rebrand and site update focused on performance and clarity.</p>
        </div>
    </section>

    <main class="container portfolio-detail">
        <section class="portfolio-detail-header">
            <div class="portfolio-detail-image">
                <img src="images/bajatarmac/site-mockup-copy-1.png" alt="Baja Tarmac Racing hero">
            </div>
        </section>

        <section class="portfolio-detail-content">
            <div class="portfolio-detail-text">
                <h2>Overview</h2>
                <p>Baja Tarmac Racing needed a modern, fast website to showcase events, drivers and ability to register online.</p>

                <h2>Challenge</h2>
                <p>The client had outdated branding and needed a modern, cohesive identity that resonated with their audience as well as a user friendly way to register for events.</p>

                <h2>Approach</h2>
                <p>I started with a complete rebrand, focusing on their new logo design and visual identity, followed by a front-end rebuild emphasizing simplified navigation, improved imagery, and performance optimizations.</p>

                <h2>Results</h2>
                <p>After launch the site saw improved load times, lower bounce rates, and clearer event sign-up flow.
                    Metrics: +48% engagement, +100% online conversions.</p>

                <h2>Gallery</h2>
                <div class="case-gallery  gallery-grid">
                    <div class="spotlight" data-src="images/bajatarmac/site-mockup-copy-1.png">
                        <img src="images/bajatarmac/site-mockup-copy-1.png" alt="Baja Tarmac Racing screenshot 1">
                    </div>

                    <div class="spotlight" data-src="images/bajatarmac/register.png">
                        <img src="images/bajatarmac/registration-thumb.png" alt="Baja Tarmac Racing screenshot 1">
                    </div>
                </div>
            </div>

            <aside class="portfolio-detail-sidebar">
                <div class="sidebar-item">
                    <h4>Client</h4>
                    <p>Baja Tarmac Racing</p>
                </div>
                <div class="sidebar-item">
                    <h4>Year</h4>
                    <p>2025</p>
                </div>
                <div class="sidebar-item">
                    <h4>Services</h4>
                    <p>Branding, Web Design, Front-end</p>
                </div>
                <div class="sidebar-item">
                    <h4>Tech</h4>
                    <div class="tech-tags">
                        <span class="tech-tag">HTML</span>
                        <span class="tech-tag">CSS</span>
                        <span class="tech-tag">WordPress</span>
                        <span class="tech-tag">Elementor</span>
                    </div>
                </div>
                <div class="sidebar-item">
                    <a href="<?php echo url('index.php#portfolio'); ?>" class="btn btn-secondary">Back to Portfolio</a>
                </div>
            </aside>
        </section>
    </main>
<?php include 'includes/cta.php'; ?>

<?php include 'includes/footer.php'; ?>
