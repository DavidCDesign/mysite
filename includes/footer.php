<?php
/**
 * Footer Component
 * Reusable footer for all pages
 * 
 * Usage: include 'includes/footer.php';
 * Optional variable: $additionalScripts (array) - additional JS files to include at end of body
 */

if (!isset($additionalScripts)) {
    $additionalScripts = [];
}
?>
    <!-- ========================================
         FOOTER
    ======================================== -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column footer-about">
                    <a href="<?php echo url('index.php'); ?>" class="footer-logo">
                        <div class="logo-icon"><img src="/images/logo.png" alt="David C Design Logo"></div>
                    </a>
                    <p class="footer-description">
                        Creating digital experiences that make an impact. Let's work together to bring your vision to life.
                    </p>
                    <div class="social-links">
                        <a href="<?php echo SOCIAL_TWITTER; ?>" class="social-link" aria-label="Twitter">𝕏</a>
                        <a href="<?php echo SOCIAL_LINKEDIN; ?>" class="social-link" aria-label="LinkedIn">in</a>
                        <a href="<?php echo SOCIAL_GITHUB; ?>" class="social-link" aria-label="GitHub">⌘</a>
                        <a href="<?php echo SOCIAL_DRIBBBLE; ?>" class="social-link" aria-label="Dribbble">◉</a>
                    </div>
                </div>
                
                <div class="footer-column">
                </div>
                
                <div class="footer-column">
                </div>
                
                <div class="footer-column">
                    <h4 class="footer-title">Resources</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo url('index.php#home'); ?>" class="footer-link">Home</a></li>
                        <li><a href="<?php echo url('index.php#about'); ?>" class="footer-link">About</a></li>
                        <li><a href="<?php echo url('index.php#portfolio'); ?>" class="footer-link">Portfolio</a></li>
                        <li><a href="<?php echo url('index.php#services'); ?>" class="footer-link">Services</a></li>
                        <li><a href="<?php echo url('index.php#contact'); ?>" class="footer-link">Contact</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p class="footer-copyright">
                    © <?php echo SITE_YEAR; ?> <?php echo SITE_AUTHOR; ?>. All rights reserved.
                </p>
                <div class="footer-legal">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="<?php echo url('/js/script.js'); ?>"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
    function(){
        emailjs.init({
            publicKey: "Eg_ZIU4sjExi_cNVj",
        });
    }();
    function onSubmit(token) {
          document.getElementById("contactForm").submit();
    }
    </script>
    <?php foreach ($additionalScripts as $script): ?>
        <script src="<?php echo url($script); ?>"></script>
    <?php endforeach; ?>
</body>
</html>