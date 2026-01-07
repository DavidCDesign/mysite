<?php
require_once 'includes/config.php';

// Page Configuration
$pageTitle = pageTitle('Water Conservation — Case Study');
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
                <span>Water Conservation</span>
            </nav>
            <h1 class="page-title"><em>Water Conservation</em></h1>
            <p class="page-description">An educational platform promoting sustainable water usage.</p>
        </div>
    </section>

    <main class="container portfolio-detail">
        <section class="portfolio-detail-header">
            <div class="portfolio-detail-image">
                <img src="images/Water conservation/conservation-thumb.gif" alt="Water Conservation hero">
            </div>
        </section>

        <section class="portfolio-detail-content">
            <div class="portfolio-detail-text">
                <h2>Overview</h2>
                <p>The Water Conservation initiative needed an educational website to raise awareness about water sustainability and provide practical tips for reducing water consumption.</p>

                <h2>Challenge</h2>
                <p>Making environmental education engaging and accessible while providing actionable information that motivates behavior change across diverse audiences.</p>

                <h2>Approach</h2>
                <p>I created an informative, visually compelling website with interactive elements, data visualizations, and practical conservation guides that made learning about water sustainability engaging.</p>

                <h2>Results</h2>
                <p>The website achieved significant reach with over 50,000 visitors in the first year and helped educate communities about sustainable water practices.</p>

                <h2>Gallery</h2>
                <div class="case-gallery">
                    <div class="spotlight gallery-grid" data-src="images/Water conservation/conservation-thumb.gif">
                        <img src="images/Water conservation/conservation-thumb.gif" alt="Water Conservation showcase">
                    </div>
                </div>
            </div>

            <aside class="portfolio-detail-sidebar">
                <div class="sidebar-item">
                    <h4>Client</h4>
                    <p>Water Conservation Initiative</p>
                </div>
                <div class="sidebar-item">
                    <h4>Year</h4>
                    <p>2023</p>
                </div>
                <div class="sidebar-item">
                    <h4>Services</h4>
                    <p>Web Design, Development, Data Visualization</p>
                </div>
                <div class="sidebar-item">
                    <h4>Tech</h4>
                    <div class="tech-tags">
                        <span class="tech-tag">HTML</span>
                        <span class="tech-tag">CSS</span>
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">D3.js</span>
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
                    <h2>Have an educational initiative?</h2>
                    <p>Let's create an impactful website that educates and inspires action.</p>
                    <a href="<?php echo url('index.php#contact'); ?>" class="btn btn-primary">Get a Quote</a>
                </div>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>
