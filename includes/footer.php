</main>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-info">
                <h3><?php echo $config['personal']['name']; ?></h3>
                <p><?php echo $config['personal']['title']; ?></p>
                <p class="contact-info">
                    <a href="mailto:<?php echo $config['personal']['email']; ?>"><?php echo $config['personal']['email']; ?></a><br>
                    <?php echo $config['personal']['phone']; ?>
                </p>
            </div>
            
            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#consulting">Consulting</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-social">
                <h4>Connect</h4>
                <div class="social-links">
                    <?php if ($config['social']['github']): ?>
                        <a href="<?php echo $config['social']['github']; ?>" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-github"></i>
                        </a>
                    <?php endif; ?>
                    
                    <?php if ($config['social']['linkedin']): ?>
                        <a href="<?php echo $config['social']['linkedin']; ?>" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    <?php endif; ?>
                    
                    <?php if ($config['social']['twitter']): ?>
                        <a href="<?php echo $config['social']['twitter']; ?>" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-twitter"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <span class="current-year"></span> <?php echo $config['personal']['name']; ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- Scripts -->
<script src="assets/js/main.js"></script>
</body>
</html>