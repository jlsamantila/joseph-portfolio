<section id="skills" class="skills section">
    <div class="container">
        <h2 class="section-title animate-on-scroll">Technical Skills</h2>
        
        <div class="skills-tabs">
            <div class="tabs-nav">
                <button class="tab-btn active" data-tab="languages">Programming Languages</button>
                <button class="tab-btn" data-tab="technologies">Technologies</button>
                <button class="tab-btn" data-tab="other">Other Skills</button>
            </div>
            
            <div class="tabs-content">
                <!-- Programming Languages Tab -->
                <div class="tab-pane active" id="languages">
                    <div class="skills-grid">
                        <?php foreach ($config['skills']['languages'] as $skill): ?>
                            <div class="skill-item animate-on-scroll">
                                <div class="skill-info">
                                    <h4><?php echo $skill['name']; ?></h4>
                                    <span class="skill-percentage"><?php echo $skill['level']; ?>%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="<?php echo $skill['level']; ?>"></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <!-- Technologies Tab -->
                <div class="tab-pane" id="technologies">
                    <div class="skills-grid">
                        <?php foreach ($config['skills']['technologies'] as $skill): ?>
                            <div class="skill-item animate-on-scroll">
                                <div class="skill-info">
                                    <h4><?php echo $skill['name']; ?></h4>
                                    <span class="skill-percentage"><?php echo $skill['level']; ?>%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="<?php echo $skill['level']; ?>"></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <!-- Other Skills Tab -->
                <div class="tab-pane" id="other">
                    <div class="other-skills">
                        <div class="skill-category animate-on-scroll">
                            <h3>Tools</h3>
                            <div class="skill-tags">
                                <?php foreach ($config['skills']['tools'] as $tool): ?>
                                    <span class="skill-tag"><?php echo $tool; ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <div class="skill-category animate-on-scroll">
                            <h3>Methodologies</h3>
                            <div class="skill-tags">
                                <?php foreach ($config['skills']['methodologies'] as $methodology): ?>
                                    <span class="skill-tag"><?php echo $methodology; ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <div class="skill-category animate-on-scroll">
                            <h3>Soft Skills</h3>
                            <div class="skill-tags">
                                <?php foreach ($config['skills']['soft_skills'] as $softSkill): ?>
                                    <span class="skill-tag"><?php echo $softSkill; ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Skills section styles */
.skills-tabs {
    margin-top: 3rem;
}

.tabs-nav {
    display: flex;
    justify-content: center;
    margin-bottom: 2rem;
    border-bottom: 1px solid var(--border);
}

.tab-btn {
    padding: 1rem 2rem;
    background: transparent;
    border: none;
    color: var(--text-secondary);
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    position: relative;
    transition: color 0.3s ease;
}

.tab-btn::after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--primary), var(--secondary));
    transition: width 0.3s ease;
}

.tab-btn.active {
    color: var(--text-primary);
}

.tab-btn.active::after {
    width: 100%;
}

.tab-pane {
    display: none;
}

.tab-pane.active {
    display: block;
    animation: fadeIn 0.5s ease;
}

.skills-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
}

.skill-item {
    margin-bottom: 1.5rem;
}

.skill-info {
    display: flex;
    justify-content: space-between;
    margin-bottom: 0.5rem;
}

.skill-info h4 {
    margin: 0;
    font-size: 1.1rem;
}

.skill-percentage {
    color: var(--primary);
    font-weight: 600;
}

.skill-bar {
    height: 8px;
    background: var(--bg-secondary);
    border-radius: 4px;
    overflow: hidden;
}

.skill-progress {
    width: 0;
    height: 100%;
    background: linear-gradient(90deg, var(--primary), var(--secondary));
    border-radius: 4px;
    transition: width 1.5s cubic-bezier(0.1, 0.5, 0.1, 1);
}

.other-skills {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.skill-category {
    margin-bottom: 2rem;
}

.skill-category h3 {
    margin-bottom: 1rem;
    color: var(--primary);
}

.skill-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.8rem;
}

.skill-tag {
    padding: 0.5rem 1rem;
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: 2rem;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.skill-tag:hover {
    background: var(--primary);
    color: var(--text-primary);
    transform: translateY(-3px);
}

@media (max-width: 768px) {
    .skills-grid {
        grid-template-columns: 1fr;
    }
    
    .tabs-nav {
        flex-wrap: wrap;
    }
    
    .tab-btn {
        padding: 0.8rem 1.2rem;
        font-size: 1rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tab functionality
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanes = document.querySelectorAll('.tab-pane');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons and panes
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabPanes.forEach(pane => pane.classList.remove('active'));
            
            // Add active class to clicked button and corresponding pane
            button.classList.add('active');
            const tabId = button.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
            
            // Trigger skill bar animations for the active tab
            const activeSkillBars = document.querySelectorAll('.tab-pane.active .skill-progress');
            activeSkillBars.forEach(bar => {
                const progress = bar.getAttribute('data-progress');
                setTimeout(() => {
                    bar.style.width = progress + '%';
                }, 100);
            });
        });
    });
});
</script>