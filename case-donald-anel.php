<?php
require_once 'includes/config.php';

// Page Configuration
$pageTitle = pageTitle('Donald And Anel — Case Study');
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
                <span>Donald And Anel</span>
            </nav>
            <h1 class="page-title"><em>Donald And Anel</em></h1>
            <p class="page-description">A beautiful wedding website celebrating love and commitment.</p>
        </div>
    </section>

    <main class="container portfolio-detail">
        <section class="portfolio-detail-header">
            <div class="portfolio-detail-image">
                <img src="images/Donald And Anel/donald-and-anel-thumb.gif" alt="Donald And Anel hero">
            </div>
        </section>

        <section class="portfolio-detail-content">
            <div class="portfolio-detail-text">
                <h2>Overview</h2>
                <p>Donald and Anel needed a personalized wedding website to share their special day with family and friends, featuring event details, RSVP functionality, and their love story.</p>

                <h2>Challenge</h2>
                <p>Creating a website that felt personal and intimate while handling RSVP management and providing clear event information for guests traveling from various locations.</p>

                <h2>Approach</h2>
                <p>I designed a romantic, user-friendly website with custom illustrations, elegant typography, and seamless RSVP integration that captured the couple's unique story.</p>

                <h2>Results</h2>
                <p>The website became a central hub for wedding information, with 95% RSVP completion rate and overwhelmingly positive feedback from guests about the beautiful design.</p>

                <h2>Gallery</h2>
                <div class="case-gallery">
                    <div class="spotlight gallery-grid" data-src="images/Donald And Anel/donald-and-anel-thumb.gif">
                        <img src="images/Donald And Anel/donald-and-anel-thumb.gif" alt="Donald And Anel showcase">
                    </div>
                </div>
            </div>

            <aside class="portfolio-detail-sidebar">
                <div class="sidebar-item">
                    <h4>Client</h4>
                    <p>Donald & Anel</p>
                </div>
                <div class="sidebar-item">
                    <h4>Year</h4>
                    <p>2024</p>
                </div>
                <div class="sidebar-item">
                    <h4>Services</h4>
                    <p>Web Design, Development, Custom Features</p>
                </div>
                <div class="sidebar-item">
                    <h4>Tech</h4>
                    <div class="tech-tags">
                        <span class="tech-tag">HTML</span>
                        <span class="tech-tag">CSS</span>
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">PHP</span>
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
                    <h2>Planning a special event?</h2>
                    <p>Let's create a beautiful website that captures your unique story and makes event management effortless.</p>
                    <a href="<?php echo url('index.php#contact'); ?>" class="btn btn-primary">Get a Quote</a>
                </div>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>
