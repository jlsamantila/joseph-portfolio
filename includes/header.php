<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['site']['title']; ?></title>
    <meta name="description" content="<?php echo $config['site']['description']; ?>">
    <meta name="keywords" content="<?php echo $config['site']['keywords']; ?>">
    <meta name="author" content="<?php echo $config['site']['author']; ?>">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $config['site']['title']; ?>">
    <meta property="og:description" content="<?php echo $config['site']['description']; ?>">
    <meta property="og:type" content="website">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Theme Color -->
    <meta name="theme-color" content="#0f172a">
    
    <!-- Scripts -->
    <script src="assets/js/particles.min.js"></script>
</head>
<body>
    <header class="header">
        <nav class="container">
            <div class="nav-brand">
                <a href="#" class="logo"><?php echo $config['personal']['name']; ?></a>
            </div>
            
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#consulting">Consulting</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            
            <button class="nav-toggle" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>
    
    <main>