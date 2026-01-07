# Portfolio Website - PHP Version

This portfolio website has been rebuilt with PHP to make reusable components easier to update globally.

## Structure

```
project/
├── includes/
│   ├── config.php      # Global site configuration
│   ├── head.php        # Reusable <head> section
│   ├── header.php      # Reusable header/navigation
│   └── footer.php      # Reusable footer
├── css/
│   ├── style.css           # Main stylesheet
│   ├── spotlight.css       # Spotlight gallery styles
├── js/
│   ├── script.js           # Main JavaScript
│   ├── spotlight.js        # Spotlight gallery functionality
├── images/             # Image assets
├── index.php           # Main portfolio page
├── case-study.php      # Case study template
├── case-baja.php       # Baja Tarmac Racing case study
```

## Key Features

### 1. Global Configuration (`includes/config.php`)
All site-wide settings are centralized in one file:
- Site name and tagline
- Contact information
- Social media links
- Helper functions

**To update site-wide information:** Edit `includes/config.php`

### 2. Reusable Components

#### Header (`includes/header.php`)
- Navigation menu
- Logo
- Mobile menu button
- Automatically highlights active page

**To update navigation:** Edit `includes/header.php`

#### Footer (`includes/footer.php`)
- Footer content
- Social links
- Copyright information
- Uses config variables for dynamic content

**To update footer:** Edit `includes/footer.php`

#### Head (`includes/head.php`)
- Meta tags
- Font includes
- CSS includes
- Supports additional CSS/JS per page

**To update meta tags or global CSS:** Edit `includes/head.php`

## Usage

### Creating a New Page

```php
<?php
require_once 'includes/config.php';

// Page Configuration
$pageTitle = pageTitle('Your Page Title');
$activeNav = 'home'; // or 'about', 'portfolio', 'services'
$additionalCSS = ['custom.css']; // Optional
$additionalScripts = ['custom.js']; // Optional (loaded in head)
?>
<?php include 'includes/head.php'; ?>

    <?php include 'includes/header.php'; ?>

    <!-- Your page content here -->

<?php 
// Optional: Add scripts to load at end of body
$additionalScripts = ['script-at-end.js'];
include 'includes/footer.php'; 
?>
```

### Updating Global Settings

**To change site name:**
1. Open `includes/config.php`
2. Update `SITE_NAME` constant
3. Changes apply to all pages automatically

**To add/update social media links:**
1. Open `includes/config.php`
2. Update `SOCIAL_*` constants
3. Links update across entire site

**To update navigation menu:**
1. Open `includes/header.php`
2. Modify the navigation list
3. Changes appear on all pages

**To update footer content:**
1. Open `includes/footer.php`
2. Make changes
3. All pages reflect the update

**To update Call to Action content:**
1. Open `includes/cta.php`
2. Make changes
3. All pages reflect the update

## Running the Site

### Option 1: Local PHP Server
```bash
php -S localhost:8000
```
Then visit: http://localhost:8000/index.php

### Option 2: XAMPP/WAMP/MAMP
1. Place project in htdocs folder
2. Start Apache server
3. Visit: http://localhost/your-project-folder/index.php

### Option 3: Production Server
Upload all files to your web host with PHP support (PHP 7.0+)

## Benefits of PHP Structure

1. **Single Source of Truth**: Update header/footer once, changes apply everywhere
2. **Easy Maintenance**: No need to edit multiple files for common changes
3. **Consistency**: Ensures all pages have identical headers/footers
4. **Scalability**: Easy to add new pages using the same structure
5. **Configuration Management**: All settings in one place

## Migration Notes

The following HTML files have been converted to PHP:
- `index.html` → `index.php`
- `case-study.html` → `case-study.php`
- `case-baja.html` → `case-baja.php`

Original HTML files are still present for reference but can be deleted once you verify the PHP versions work correctly.

## Customization Tips

1. **Add a new component**: Create a new file in `includes/` and include it where needed
2. **Page-specific CSS**: Use the `$additionalCSS` array
3. **Page-specific JS**: Use the `$additionalScripts` array
4. **Update copyright year**: Edit `SITE_YEAR` in `config.php`
5. **Change contact info**: Update constants in `config.php`

## Requirements

- PHP 7.0 or higher
- Web server (Apache, Nginx, or PHP built-in server)
- No database required

## Support

For issues or questions, please refer to the PHP documentation or contact the developer.
