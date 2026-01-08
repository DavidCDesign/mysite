<?php
require_once 'includes/config.php';

// Page Configuration
$pageTitle = pageTitle();
$activeNav = 'home';
?>
<?php include 'includes/head.php'; ?>

    <?php include 'includes/header.php'; ?>

    <!-- ========================================
         HERO SECTION
    ======================================== -->
    <section class="hero" id="home">
        <div class="hero-bg"></div>
        <div class="hero-shape"></div>
        
        <div class="hero-content">
            <h1 class="hero-title animate-fade-in-up">
                <em>Functional</em> design
                <span class="line-2">proven <em>success</em></span>
            </h1>
            
            <p class="hero-description animate-fade-in-up delay-1">
                I'm a creative developer and designer helping brands achieve an online presence they are proud of.
            </p>
            
            <div class="hero-cta animate-fade-in-up delay-2">
                <a href="#contact" class="btn btn-primary">Get a Quote</a>
                <a href="#portfolio" class="btn btn-secondary">View My Work</a>
            </div>
            
            <div class="hero-testimonial animate-fade-in-up delay-3">
                <p class="testimonial-text">"It is not an overstatement, he's the best."</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">RP</div>
                    <div class="testimonial-info">
                        <h4>Rainey P.</h4>
                        <p>Marketing and Brand Growth Specialist</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         CLIENTS SECTION
    ======================================== 
    <section class="clients">
        <div class="container">
            <p class="clients-title">Trusted by brands around the world</p>
            <div class="clients-grid">
                <div class="client-logo">HELIO</div>
                <div class="client-logo">MARITZ</div>
                <div class="client-logo">GLEAM</div>
                <div class="client-logo">LEITMOTIV</div>
                <div class="client-logo">SIMMARKET</div>
                <div class="client-logo">EVOLUTION</div>
            </div>
        </div>
    </section> -->

    <!-- ========================================
         ABOUT SECTION
    ======================================== -->
    <section class="section about" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-image">
                    <div class="about-image-wrapper">
                        <img src="images/headshot.png" alt="David Cantrell Headshot">
                    </div>
                </div>
                
                <div class="about-content">
                    <h2>I craft digital experiences that <em>inspire</em></h2>
                    
                    <p>
                        With over 10 years of experience in web and graphic design, I've had the 
                        privilege of working with a diverse range of clients—from innovative startups
                        to regular people looking to establish their online presence.
                    </p>
                    
                    <p>
                        My approach combines clean, modern aesthetics with robust, scalable code. 
                        I believe great design isn't just about looking good—it's about creating 
                        experiences that feel intuitive and engaging.
                    </p>
                    
                    <p>
                        When I'm not designing or coding, you'll find me exploring and auditing AI 
                        creation tools, expanding my quality assurance knowledge and skills with 
                        automation tools such as Laravel Dusk, JUnit, or PHPUnit! I'm also an avid festival go-er, so you could catch me around the country if not at my desk.
                    </p>
                    
                    <!-- <div class="about-stats">
                        <div class="stat-item">
                            <h3>10+</h3>
                            <p>Years Experience</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         SKILLS SECTION
    ======================================== -->
    <section class="section skills">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">My <em>Expertise</em></h2>
                <p class="section-subtitle">
                    A comprehensive skill set that covers every aspect of digital product creation.
                </p>
            </div>
            
            <div class="skills-grid">
                <div class="skill-card">
                    <h3>UI/UX Design</h3>
                    <p>Creating intuitive interfaces and seamless user experiences that delight users and achieve business goals.</p>
                </div>
                
                <div class="skill-card">
                    <h3>Frontend Development</h3>
                    <p>Building responsive, performant websites using technologies such as PHP, HTML, CSS, and JavaScript.</p>
                </div>
                
                <div class="skill-card">
                    <h3>Backend Development</h3>
                    <p>Developing robust server-side solutions with PHP or Python, and various database technologies.</p>
                </div>
                
                <div class="skill-card">
                    <h3>Responsive Design</h3>
                    <p>Ensuring every project looks and works perfectly across all devices and screen sizes.</p>
                </div>
                
                <div class="skill-card">
                    <h3>Performance Optimization</h3>
                    <p>Optimizing load times and runtime performance to deliver lightning-fast user experiences.</p>
                </div>
                
                <div class="skill-card">
                    <h3>Brand Strategy</h3>
                    <p>Helping brands define their visual identity and communicate effectively with their target audience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         PORTFOLIO SECTION
    ======================================== -->
    <section class="section" id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Featured <em>Projects</em></h2>
                <p class="section-subtitle">
                    A selection of my recent work across various industries and disciplines.
                </p>
            </div>
            
            <div class="portfolio-filter">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="web">Web Design</button>
                <button class="filter-btn" data-filter="branding">Branding</button>
                <button class="filter-btn" data-filter="app">App Design</button>
            </div>
            
            <div class="portfolio-grid">
                <!-- Portfolio Item 1 -->
                <div class="portfolio-item" data-category="web">
                    <div class="portfolio-image">
                        <img src="images/bajatarmac/site-mockup-copy-1.png" alt="bajatarmacracing website screenshot">
                        <div class="portfolio-overlay">
                            <div class="portfolio-overlay-content">
                                <a href="<?php echo url('case-baja.php'); ?>" class="btn btn-secondary">View Project</a>
                                <a href="https://www.bajatarmacracing.com" class="btn btn-secondary" target="_blank">Live Site</a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <span class="portfolio-category">Web Design</span>
                        <h3>Baja Tarmac Racing</h3>
                        <p>A fresh rebrand and site update</p>
                    </div>
                </div>
                
                <!-- Portfolio Item 2 -->
                <div class="portfolio-item" data-category="web">
                    <div class="portfolio-image">
                        <img src="images/divi elegence/elegence-thumb.gif" alt="Divi Elegence">
                        <div class="portfolio-overlay">
                            <div class="portfolio-overlay-content">
                                <a href="<?php echo url('case-divi-elegence.php'); ?>" class="btn btn-secondary">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <span class="portfolio-category">Web Design</span>
                        <h3>Divi Elegence</h3>
                        <p>Elegant design solutions with modern sophistication.</p>
                    </div>
                </div>
                
                <!-- Portfolio Item 3 -->
                <div class="portfolio-item" data-category="web">
                    <div class="portfolio-image">
                        <img src="images/Donald And Anel/donald-and-anel-thumb.gif" alt="Donald And Anel">
                        <div class="portfolio-overlay">
                            <div class="portfolio-overlay-content">
                                <a href="<?php echo url('case-donald-anel.php'); ?>" class="btn btn-secondary">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <span class="portfolio-category">Web Design</span>
                        <h3>Donald And Anel</h3>
                        <p>A beautiful wedding website celebrating love and commitment.</p>
                    </div>
                </div>
                
                <!-- Portfolio Item 4 -->
                <div class="portfolio-item" data-category="app">
                    <div class="portfolio-image">
                        <img src="images/Tipsy Together/TT-Thumb.gif" alt="Tipsy Together">
                        <div class="portfolio-overlay">
                            <div class="portfolio-overlay-content">
                                <a href="<?php echo url('case-tipsy-together.php'); ?>" class="btn btn-secondary">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <span class="portfolio-category">App Design</span>
                        <h3>Tipsy Together</h3>
                        <p>A vibrant social platform connecting cocktail enthusiasts.</p>
                    </div>
                </div>
                
                <!-- Portfolio Item 5 -->
                <div class="portfolio-item" data-category="branding">
                    <div class="portfolio-image">
                        <img src="images/Water conservation/conservation-thumb.gif" alt="Water Conservation">
                        <div class="portfolio-overlay">
                            <div class="portfolio-overlay-content">
                                <a href="<?php echo url('case-water-conservation.php'); ?>" class="btn btn-secondary">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <span class="portfolio-category">Branding</span>
                        <h3>Water Conservation</h3>
                        <p>An educational platform promoting sustainable water usage.</p>
                    </div>
                </div>
                

            </div>
        </div>
    </section>

    <!-- ========================================
         SERVICES SECTION
    ======================================== -->
    <section class="section" id="services" style="background: var(--color-bg-secondary);">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Services I <em>Offer</em></h2>
                <p class="section-subtitle">
                    End-to-end solutions tailored to your specific needs and goals.
                </p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-number">01</div>
                    <h3>Web Design & Development</h3>
                    <p>Custom websites that look stunning and perform flawlessly across all devices.</p>
                    <div class="service-features">
                        <span class="service-feature">Responsive Design</span>
                        <span class="service-feature">CMS Integration</span>
                        <span class="service-feature">SEO Optimization</span>
                        <span class="service-feature">Performance Tuning</span>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-number">02</div>
                    <h3>UI/UX Design</h3>
                    <p>User-centered design that creates meaningful and memorable experiences.</p>
                    <div class="service-features">
                        <span class="service-feature">User Research</span>
                        <span class="service-feature">Wireframing</span>
                        <span class="service-feature">Prototyping</span>
                        <span class="service-feature">Usability Testing</span>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-number">03</div>
                    <h3>Brand Identity</h3>
                    <p>Comprehensive branding solutions that tell your story and connect with your audience.</p>
                    <div class="service-features">
                        <span class="service-feature">Logo Design</span>
                        <span class="service-feature">Brand Guidelines</span>
                        <span class="service-feature">Visual Identity</span>
                        <span class="service-feature">Marketing Materials</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         TESTIMONIALS SECTION
    ======================================== -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Client <em>Testimonials</em></h2>
                <p class="section-subtitle">
                    Don't just take my word for it—here's what my clients have to say.
                </p>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">
                        "Working with them was an absolute pleasure. They understood our vision 
                        immediately and delivered a website that exceeded our expectations. The 
                        attention to detail is remarkable."
                    </p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">SM</div>
                        <div class="testimonial-info">
                            <h4>Sarah Mitchell</h4>
                            <p>CEO, TechStart Inc.</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">
                        "The redesign of our e-commerce platform resulted in a 40% increase in 
                        conversions. Professional, creative, and incredibly responsive throughout 
                        the entire project."
                    </p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">JD</div>
                        <div class="testimonial-info">
                            <h4>James Davidson</h4>
                            <p>Marketing Director, StyleCo</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">
                        "Outstanding work on our brand identity. They captured the essence of our 
                        company perfectly. We've received countless compliments on our new look 
                        from clients and partners."
                    </p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">EK</div>
                        <div class="testimonial-info">
                            <h4>Emily Kim</h4>
                            <p>Founder, GreenLeaf</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         CONTACT SECTION
    ======================================== -->
    <section class="section contact" id="contact">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Let's create something <em>amazing</em> together</h2>
                    <p>
                        Have a project in mind? I'd love to hear about it. Whether you need a 
                        complete website, brand refresh, or just want to chat about ideas, 
                        feel free to reach out.
                    </p>
                    
                    <div class="contact-methods">                        
                        <div class="contact-method">
                            <div class="contact-method-icon">📍</div>
                            <div class="contact-method-info">
                                <h4>Location</h4>
                                <p>San Diego, California</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <a href="<?php echo SOCIAL_LINKEDIN; ?>" class="social-link" aria-label="LinkedIn">in</a>
                        <a href="<?php echo SOCIAL_GITHUB; ?>" class="social-link" aria-label="GitHub">⌘</a>
                    </div>
                </div>
                
                <div class="contact-form-wrapper">
                    <form class="contact-form" id="contactForm" action="" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label" for="firstName">First Name</label>
                                <input type="text" id="firstName" name="first_name" class="form-input" placeholder="John" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="lastName">Last Name</label>
                                <input type="text" id="lastName" name="last_name" class="form-input" placeholder="Doe" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="email">Email Address</label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="john@example.com" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="service">Service Interested In</label>
                            <select id="service" name="service" class="form-select" required>
                                <option value="" disabled selected>Select a service</option>
                                <option value="web-design">Web Design & Development</option>
                                <option value="ui-ux">UI/UX Design</option>
                                <option value="branding">Brand Identity</option>
                                <option value="consulting">Consulting</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="budget">Budget Range</label>
                            <select id="budget" name="budget" class="form-select">
                                <option value="" disabled selected>Select budget range</option>
                                <option value="5k-10k">$500 - $1000</option>
                                <option value="10k-25k">$1000 - $2500</option>
                                <option value="25k-50k">$2500 - $5000</option>
                                <option value="50k+">$5000+</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="message">Project Details</label>
                            <textarea id="message" name="message" class="form-textarea" placeholder="Tell me about your project..." required></textarea>
                        </div>

                        <div class="g-recaptcha" data-sitekey="6LcaiEMsAAAAAL2ostR2zh-wY0C1RJHR346hyYBd" data-action="contact"></div>
                        
                        <div class="form-submit">
                            <button type="submit" class="btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/cta.php'; ?>

<?php include 'includes/footer.php'; ?>
