<?php
require_once 'includes/config.php';

// Page Configuration
$pageTitle = pageTitle('Tipsy Together — Case Study');
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
                <span>Tipsy Together</span>
            </nav>
            <h1 class="page-title"><em>Tipsy Together</em></h1>
            <p class="page-description">A vibrant social platform connecting cocktail enthusiasts.</p>
        </div>
    </section>

    <main class="container portfolio-detail">
        <section class="portfolio-detail-header">
            <div class="portfolio-detail-image">
                <img src="images/Tipsy Together/TT-Thumb.gif" alt="Tipsy Together hero">
            </div>
        </section>

        <section class="portfolio-detail-content">
            <div class="portfolio-detail-text">
                <h2>Overview</h2>
                <p>Tipsy Together wanted to create an engaging social platform where cocktail lovers could discover recipes, share creations, and connect with other enthusiasts.</p>

                <h2>Challenge</h2>
                <p>Building a community-focused platform that balanced social features with recipe functionality while maintaining a fun, approachable brand identity.</p>

                <h2>Approach</h2>
                <p>I developed a vibrant, user-friendly interface with intuitive recipe browsing, social sharing features, and community engagement tools that made mixing cocktails fun and social.</p>

                <h2>Results</h2>
                <p>The platform launched successfully with strong user engagement, growing to over 5,000 active users within the first three months and 10,000+ recipes shared.</p>

                <h2>Gallery</h2>
                <div class="case-gallery">
                    <div class="spotlight gallery-grid" data-src="images/Tipsy Together/TT-Thumb.gif">
                        <img src="images/Tipsy Together/TT-Thumb.gif" alt="Tipsy Together showcase">
                    </div>
                </div>
            </div>

            <aside class="portfolio-detail-sidebar">
                <div class="sidebar-item">
                    <h4>Client</h4>
                    <p>Tipsy Together</p>
                </div>
                <div class="sidebar-item">
                    <h4>Year</h4>
                    <p>2024</p>
                </div>
                <div class="sidebar-item">
                    <h4>Services</h4>
                    <p>Web Design, Development, Branding</p>
                </div>
                <div class="sidebar-item">
                    <h4>Tech</h4>
                    <div class="tech-tags">
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">Node.js</span>
                        <span class="tech-tag">MongoDB</span>
                    </div>
                </div>
                <div class="sidebar-item">
                    <a href="<?php echo url('index.php#portfolio'); ?>" class="btn btn-secondary">Back to Portfolio</a>
                </div>
            </aside>
        </section>
    </main>

        <section class="section cta">
            <div class="container">
                <div class="cta-content">
                    <h2>Building a community platform?</h2>
                    <p>Let's create an engaging social experience that brings your community together.</p>
                    <a href="<?php echo url('index.php#contact'); ?>" class="btn btn-primary">Get a Quote</a>
                </div>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>
