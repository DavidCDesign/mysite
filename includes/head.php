<?php
/**
 * HTML Head Component
 * Reusable head section with meta tags, fonts, and stylesheets
 * 
 * Usage: include 'includes/head.php';
 * Required variable: $pageTitle (string)
 * Optional variable: $additionalCSS (array) - additional CSS files to include
 * Optional variable: $additionalScripts (array) - additional JS files to include in head
 */

if (!isset($pageTitle)) {
    $pageTitle = pageTitle();
}

if (!isset($additionalCSS)) {
    $additionalCSS = [];
}

if (!isset($additionalScripts)) {
    $additionalScripts = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo url('/images/favicon.ico'); ?>">
    <link rel="stylesheet" href="<?php echo url('/css/style.css'); ?>">
    <?php foreach ($additionalCSS as $css): ?>
        <link rel="stylesheet" href="<?php echo url($css); ?>">
    <?php endforeach; ?>
    <?php foreach ($additionalScripts as $script): ?>
        <script src="<?php echo url($script); ?>"></script>
    <?php endforeach; ?>
</head>
<body>
