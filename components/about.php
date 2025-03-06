<section id="about" class="about section">
    <div class="container">
        <h2 class="section-title animate-on-scroll">About Me</h2>
        
        <div class="about-content">
            <div class="about-image animate-on-scroll">
                <div class="image-container">
                    <img src="assets/images/profile.jpg" alt="<?php echo $config['personal']['name']; ?>" onerror="this.src='https://via.placeholder.com/400x500?text=Profile+Photo'">
                    <div class="image-overlay"></div>
                </div>
            </div>
            
            <div class="about-text">
                <h3 class="animate-on-scroll">Who I Am</h3>
                <p class="animate-on-scroll">
                    I'm a seasoned IT professional with over 7 years of experience spanning application development, 
                    system administration, and project management. My career has been defined by leading innovative 
                    technical solutions and driving process improvements across diverse industries.
                </p>
                
                <h3 class="animate-on-scroll">What I Do</h3>
                <p class="animate-on-scroll">
                    As a Systems Analyst/Developer Supervisor, I lead projects from conception to completion, 
                    manage technical teams, and ensure alignment with business objectives. My expertise includes 
                    full-stack development, database management, and system optimization.
                </p>
                
                <div class="about-details animate-on-scroll">
                    <div class="detail-item">
                        <span class="detail-icon"><i class="fas fa-map-marker-alt"></i></span>
                        <span class="detail-text"><?php echo $config['personal']['location']; ?></span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-icon"><i class="fas fa-envelope"></i></span>
                        <span class="detail-text"><?php echo $config['personal']['email']; ?></span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-icon"><i class="fas fa-phone"></i></span>
                        <span class="detail-text"><?php echo $config['personal']['phone']; ?></span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-icon"><i class="fas fa-graduation-cap"></i></span>
                        <span class="detail-text"><?php echo $config['education']['degree']; ?></span>
                    </div>
                </div>
                
                <div class="about-cta animate-on-scroll">
                    <a href="#contact" class="btn btn-primary">Contact Me</a>
                    <a href="#" class="btn btn-outline download-cv">Download CV</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* About section styles */
.about-content {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 3rem;
    align-items: center;
}

.about-image {
    position: relative;
}

.image-container {
    position: relative;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
}

.image-container img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.5s ease;
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, rgba(37, 99, 235, 0.2), rgba(124, 58, 237, 0.2));
    z-index: 1;
}

.image-container:hover img {
    transform: scale(1.05);
}

.about-text h3 {
    margin-top: 1.5rem;
    margin-bottom: 1rem;
    color: var(--primary);
}

.about-details {
    margin: 2rem 0;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
}

.detail-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.detail-icon {
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--bg-secondary);
    border-radius: 50%;
    color: var(--primary);
}

.about-cta {
    display: flex;
    gap: 1rem;
    margin-top: 2rem;
}

@media (max-width: 768px) {
    .about-content {
        grid-template-columns: 1fr;
    }
    
    .about-image {
        max-width: 300px;
        margin: 0 auto;
    }
    
    .about-details {
        grid-template-columns: 1fr;
    }
}
</style>