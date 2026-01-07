<?php
require_once 'includes/config.php';

// Page Configuration
$pageTitle = pageTitle('Case Study Template');
$activeNav = 'portfolio';
?>
<?php include 'includes/head.php'; ?>

<?php include 'includes/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <nav class="breadcrumb">
                <a href="<?php echo url('index.php'); ?>">Home</a>
                <span class="breadcrumb-separator">/</span>
                <a href="<?php echo url('index.php#portfolio'); ?>">Portfolio</a>
                <span class="breadcrumb-separator">/</span>
                <span>Case Study</span>
            </nav>
            <h1 class="page-title">Project Name — Case Study</h1>
            <p class="page-description">Short one-line description that summarises the project impact and audience.</p>
        </div>
    </section>

    <!-- Case Study Hero -->
    <main class="container portfolio-detail">
        <section class="portfolio-detail-header">
            <div class="portfolio-detail-image">
                <img src="images/site-mockup-copy-1.png" alt="Project hero image">
            </div>
        </section>

        <section class="portfolio-detail-content">
            <div class="portfolio-detail-text">
                <h2>Overview</h2>
                <p>This section contains a concise overview: goals, timeline, and your role.</p>

                <h2>Challenge</h2>
                <p>Outline the main problem the client faced and constraints.</p>

                <h2>Approach</h2>
                <p>Describe your process: research, wireframes, visual design, development, and launch.</p>

                <h2>Results</h2>
                <p>Summarise outcomes with metrics where possible (traffic, conversions, revenue, engagement).</p>

                <h2>Gallery</h2>
                <div class="case-gallery">
                    <div class="gallery-grid">
                        <img src="images/site-mockup-copy-1.png" alt="Project screenshot 1">
                        <img src="images/59763652_10155944979891244_996446233876758528_n.jpg" alt="Project screenshot 2">
                    </div>
                </div>
            </div>

            <aside class="portfolio-detail-sidebar">
                <div class="sidebar-item">
                    <h4>Client</h4>
                    <p>Client Name</p>
                </div>

                <div class="sidebar-item">
                    <h4>Year</h4>
                    <p><?php echo SITE_YEAR; ?></p>
                </div>

                <div class="sidebar-item">
                    <h4>Services</h4>
                    <p>UI/UX, Web Development, Branding</p>
                </div>

                <div class="sidebar-item">
                    <h4>Tech</h4>
                    <div class="tech-tags">
                        <span class="tech-tag">HTML</span>
                        <span class="tech-tag">CSS</span>
                        <span class="tech-tag">Vanilla JS</span>
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
                    <h2>Want similar results?</h2>
                    <p>Let's discuss your project and how we can achieve measurable results together.</p>
                    <a href="<?php echo url('index.php#contact'); ?>" class="btn btn-primary">Get in Touch</a>
                </div>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>
