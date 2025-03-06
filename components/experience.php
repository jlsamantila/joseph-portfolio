<section id="experience" class="experience section">
    <div class="container">
        <h2 class="section-title animate-on-scroll">Professional Experience</h2>
        
        <div class="timeline-wrapper">
            <div class="timeline">
                <?php foreach ($config['experience'] as $index => $job): ?>
                    <div class="timeline-item <?php echo $index % 2 === 0 ? 'left' : 'right'; ?> animate-on-scroll">
                        <div class="timeline-badge">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header">
                                <h3><?php echo $job['title']; ?></h3>
                                <h4><?php echo $job['company']; ?></h4>
                                <span class="timeline-date"><?php echo $job['period']; ?></span>
                            </div>
                            <div class="timeline-body">
                                <ul class="timeline-list">
                                    <?php foreach ($job['highlights'] as $highlight): ?>
                                        <li><?php echo $highlight; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<style>
/* Experience section styles */
.timeline-wrapper {
    position: relative;
    padding: 3rem 0;
}

.timeline {
    position: relative;
    max-width: 1000px;
    margin: 0 auto;
}

.timeline::before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 2px;
    background: linear-gradient(to bottom, 
        rgba(37, 99, 235, 0.2), 
        rgba(37, 99, 235, 1), 
        rgba(37, 99, 235, 0.2));
    transform: translateX(-50%);
}

.timeline-item {
    position: relative;
    width: 50%;
    margin-bottom: 4rem;
}

.timeline-item.left {
    left: 0;
    padding-right: 2.5rem;
}

.timeline-item.right {
    left: 50%;
    padding-left: 2.5rem;
}

.timeline-badge {
    position: absolute;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: var(--primary);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-primary);
    font-size: 1.2rem;
    z-index: 1;
    box-shadow: 0 0 0 4px var(--bg-primary), 0 0 0 6px var(--border);
}

.timeline-item.left .timeline-badge {
    right: -25px;
}

.timeline-item.right .timeline-badge {
    left: -25px;
}

.timeline-panel {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: 1rem;
    padding: 1.5rem;
    position: relative;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.timeline-panel:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.timeline-item.left .timeline-panel::after {
    content: '';
    position: absolute;
    top: 20px;
    right: -10px;
    width: 20px;
    height: 20px;
    background: var(--bg-card);
    border-right: 1px solid var(--border);
    border-top: 1px solid var(--border);
    transform: rotate(45deg);
}

.timeline-item.right .timeline-panel::after {
    content: '';
    position: absolute;
    top: 20px;
    left: -10px;
    width: 20px;
    height: 20px;
    background: var(--bg-card);
    border-left: 1px solid var(--border);
    border-bottom: 1px solid var(--border);
    transform: rotate(45deg);
}

.timeline-header {
    margin-bottom: 1rem;
    border-bottom: 1px solid var(--border);
    padding-bottom: 1rem;
}

.timeline-header h3 {
    margin: 0 0 0.5rem;
    color: var(--text-primary);
    font-size: 1.3rem;
}

.timeline-header h4 {
    margin: 0 0 0.5rem;
    color: var(--primary);
    font-size: 1.1rem;
}

.timeline-date {
    display: inline-block;
    padding: 0.3rem 0.8rem;
    background: var(--bg-secondary);
    border-radius: 1rem;
    font-size: 0.9rem;
    color: var(--text-secondary);
}

.timeline-list {
    list-style-type: none;
    padding: 0;
}

.timeline-list li {
    position: relative;
    padding-left: 1.5rem;
    margin-bottom: 0.8rem;
}

.timeline-list li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 10px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--primary);
}

@media (max-width: 768px) {
    .timeline::before {
        left: 30px;
    }
    
    .timeline-item {
        width: 100%;
        padding-left: 5rem;
        padding-right: 0;
        left: 0 !important;
    }
    
    .timeline-badge {
        left: 5px !important;
        right: auto !important;
    }
    
    .timeline-item.left .timeline-panel::after,
    .timeline-item.right .timeline-panel::after {
        left: -10px;
        right: auto;
        border-right: none;
        border-top: none;
        border-left: 1px solid var(--border);
        border-bottom: 1px solid var(--border);
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add animation to timeline items when they come into view
    const timelineItems = document.querySelectorAll('.timeline-item');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });
    
    timelineItems.forEach(item => observer.observe(item));
    
    // Add hover effect to timeline badges
    const timelineBadges = document.querySelectorAll('.timeline-badge');
    
    timelineBadges.forEach(badge => {
        badge.addEventListener('mouseenter', () => {
            badge.style.transform = 'scale(1.2)';
            badge.style.transition = 'transform 0.3s ease';
        });
        
        badge.addEventListener('mouseleave', () => {
            badge.style.transform = 'scale(1)';
        });
    });
});
</script>