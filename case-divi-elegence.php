<?php
require_once 'includes/config.php';

// Page Configuration
$pageTitle = pageTitle('Divi Elegence — Case Study');
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
                <span>Divi Elegence</span>
            </nav>
            <h1 class="page-title"><em>Divi Elegence</em></h1>
            <p class="page-description">Elegant design solutions with modern sophistication.</p>
        </div>
    </section>

    <main class="container portfolio-detail">
        <section class="portfolio-detail-header">
            <div class="portfolio-detail-image">
                <img src="images/divi elegence/elegence-thumb.gif" alt="Divi Elegence hero">
            </div>
        </section>

        <section class="portfolio-detail-content">
            <div class="portfolio-detail-text">
                <h2>Overview</h2>
                <p>Divi Elegence required a sophisticated web presence that reflected their premium brand positioning and showcased their elegant design philosophy.</p>

                <h2>Challenge</h2>
                <p>The client needed to differentiate themselves in a crowded market while maintaining a balance between visual appeal and usability.</p>

                <h2>Approach</h2>
                <p>I developed a refined design system focusing on clean typography, sophisticated color palettes, and seamless user interactions that embody elegance.</p>

                <h2>Results</h2>
                <p>The new design elevated the brand's perception and created a memorable user experience that resonated with their target audience.</p>

                <h2>Gallery</h2>
                <div class="case-gallery gallery-grid">
                    <div class="spotlight" data-src="images/divi elegence/elegence-thumb.gif">
                        <img src="images/divi elegence/elegence-thumb.gif" alt="Divi Elegence showcase">
                    </div>
                </div>
            </div>

            <aside class="portfolio-detail-sidebar">
                <div class="sidebar-item">
                    <h4>Client</h4>
                    <p>Divi Elegence</p>
                </div>
                <div class="sidebar-item">
                    <h4>Year</h4>
                    <p>2024</p>
                </div>
                <div class="sidebar-item">
                    <h4>Services</h4>
                    <p>Web Design, Branding, UI/UX</p>
                </div>
                <div class="sidebar-item">
                    <h4>Tech</h4>
                    <div class="tech-tags">
                        <span class="tech-tag">WordPress</span>
                        <span class="tech-tag">Divi</span>
                        <span class="tech-tag">CSS</span>
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
                    <h2>Want a sophisticated design?</h2>
                    <p>Contact me to discuss how we can create an elegant online presence for your brand.</p>
                    <a href="<?php echo url('index.php#contact'); ?>" class="btn btn-primary">Get a Quote</a>
                </div>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>
