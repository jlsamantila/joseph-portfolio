<section id="hero" class="hero">
    <div class="hero-particles" id="particles-js"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="animate-on-scroll">
                <span class="greeting">Hello, I'm</span><br>
                <?php echo $config['personal']['name']; ?>
            </h1>
            <h2 class="typewriter animate-on-scroll"><?php echo $config['personal']['title']; ?></h2>
            <p class="hero-description animate-on-scroll">
                <?php echo $config['personal']['summary']; ?>
            </p>
            <div class="hero-cta animate-on-scroll">
                <a href="#contact" class="btn btn-primary">Get In Touch</a>
                <a href="#projects" class="btn btn-outline">View My Work</a>
            </div>
            <div class="hero-scroll-indicator">
                <a href="#about">
                    <span class="mouse">
                        <span class="wheel"></span>
                    </span>
                    <span class="arrow">
                        <span></span>
                        <span></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Hero-specific styles */
.hero {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    overflow: hidden;
    background: linear-gradient(135deg, var(--bg-primary), var(--bg-secondary));
}

.hero-particles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
    max-width: 800px;
}

.hero h1 {
    font-size: 4rem;
    margin-bottom: 1rem;
}

.hero .greeting {
    font-size: 2rem;
    color: var(--text-secondary);
    font-weight: 400;
}

.hero h2 {
    font-size: 2.5rem;
    margin-bottom: 1.5rem;
    color: var(--primary);
    border-right: 0.1em solid var(--primary);
    white-space: nowrap;
    overflow: hidden;
    animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
}

.hero-description {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    max-width: 600px;
}

.hero-cta {
    display: flex;
    gap: 1rem;
    margin-bottom: 3rem;
}

/* Scroll indicator */
.hero-scroll-indicator {
    position: absolute;
    bottom: 2rem;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
}

.mouse {
    display: block;
    width: 26px;
    height: 42px;
    border: 2px solid var(--text-secondary);
    border-radius: 13px;
    margin: 0 auto 10px;
    position: relative;
}

.wheel {
    display: block;
    width: 4px;
    height: 8px;
    background: var(--primary);
    border-radius: 2px;
    position: absolute;
    top: 8px;
    left: 50%;
    transform: translateX(-50%);
    animation: mouse-wheel 1.2s ease infinite;
}

.arrow {
    display: block;
    margin-top: 5px;
}

.arrow span {
    display: block;
    width: 10px;
    height: 10px;
    border-right: 2px solid var(--text-secondary);
    border-bottom: 2px solid var(--text-secondary);
    transform: rotate(45deg);
    margin: 0 auto;
    animation: arrow-down 1.2s infinite;
}

.arrow span:nth-child(2) {
    animation-delay: 0.2s;
    margin-top: -6px;
}

/* Animations */
@keyframes mouse-wheel {
    0% { transform: translateX(-50%) translateY(0); opacity: 1; }
    100% { transform: translateX(-50%) translateY(15px); opacity: 0; }
}

@keyframes arrow-down {
    0% { opacity: 0; }
    50% { opacity: 1; }
    100% { opacity: 0; }
}

@keyframes typing {
    from { width: 0 }
    to { width: 100% }
}

@keyframes blink-caret {
    from, to { border-color: transparent }
    50% { border-color: var(--primary) }
}

@media (max-width: 768px) {
    .hero h1 {
        font-size: 3rem;
    }
    
    .hero .greeting {
        font-size: 1.5rem;
    }
    
    .hero h2 {
        font-size: 1.8rem;
    }
}
</style>