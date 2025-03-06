<section id="projects" class="projects section">
    <div class="container">
        <h2 class="section-title animate-on-scroll">Featured Projects</h2>
        
        <div class="project-filters animate-on-scroll">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="web">Web Development</button>
            <button class="filter-btn" data-filter="app">Applications</button>
            <button class="filter-btn" data-filter="game">Game Development</button>
            <button class="filter-btn" data-filter="system">System Integration</button>
        </div>
        
        <div class="projects-grid">
            <!-- Project 1: CEMR -->
            <div class="project-card animate-on-scroll" data-categories="web system">
                <div class="project-image">
                    <img src="assets/images/projects/cemr.jpg" alt="Centralized Employee Master Records" onerror="this.src='https://via.placeholder.com/600x400?text=CEMR+Project'">
                    <div class="project-overlay">
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fas fa-link"></i></a>
                            <a href="#" class="project-details-btn" data-project="cemr"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-info">
                    <h3>Centralized Employee Master Records</h3>
                    <p>A comprehensive HR data management system with API integration</p>
                    <div class="project-tech">
                        <span>PHP</span>
                        <span>Laravel</span>
                        <span>MySQL</span>
                        <span>API</span>
                    </div>
                </div>
            </div>
            
            <!-- Project 2: Gaming Website -->
            <div class="project-card animate-on-scroll" data-categories="web game">
                <div class="project-image">
                    <img src="assets/images/projects/gaming.jpg" alt="Gaming Website" onerror="this.src='https://via.placeholder.com/600x400?text=Gaming+Website'">
                    <div class="project-overlay">
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fas fa-link"></i></a>
                            <a href="#" class="project-details-btn" data-project="gaming"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-info">
                    <h3>Gaming Company Website</h3>
                    <p>A dynamic website with game integration and e-commerce functionality</p>
                    <div class="project-tech">
                        <span>Laravel</span>
                        <span>JavaScript</span>
                        <span>E-commerce</span>
                    </div>
                </div>
            </div>
            
            <!-- Project 3: Asset Monitoring -->
            <div class="project-card animate-on-scroll" data-categories="app system">
                <div class="project-image">
                    <img src="assets/images/projects/asset.jpg" alt="Asset Monitoring Application" onerror="this.src='https://via.placeholder.com/600x400?text=Asset+Monitoring'">
                    <div class="project-overlay">
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fas fa-link"></i></a>
                            <a href="#" class="project-details-btn" data-project="asset"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-info">
                    <h3>Asset Monitoring Application</h3>
                    <p>Real-time tracking and management of company assets</p>
                    <div class="project-tech">
                        <span>.NET</span>
                        <span>C#</span>
                        <span>SQL Server</span>
                    </div>
                </div>
            </div>
            
            <!-- Project 4: Survey System -->
            <div class="project-card animate-on-scroll" data-categories="web app">
                <div class="project-image">
                    <img src="assets/images/projects/survey.jpg" alt="Real-time Survey System" onerror="this.src='https://via.placeholder.com/600x400?text=Survey+System'">
                    <div class="project-overlay">
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fas fa-link"></i></a>
                            <a href="#" class="project-details-btn" data-project="survey"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-info">
                    <h3>Real-time Survey System</h3>
                    <p>Interactive survey platform with live results using Laravel and Pusher</p>
                    <div class="project-tech">
                        <span>Laravel</span>
                        <span>Pusher</span>
                        <span>AJAX</span>
                    </div>
                </div>
            </div>
            
            <!-- Project 5: Game Development -->
            <div class="project-card animate-on-scroll" data-categories="game">
                <div class="project-image">
                    <img src="assets/images/projects/game.jpg" alt="Indie Game Development" onerror="this.src='https://via.placeholder.com/600x400?text=Game+Development'">
                    <div class="project-overlay">
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fas fa-link"></i></a>
                            <a href="#" class="project-details-btn" data-project="game"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-info">
                    <h3>Indie Game Development</h3>
                    <p>Game development with anti-hack measures and licensing systems</p>
                    <div class="project-tech">
                        <span>C++</span>
                        <span>Unity</span>
                        <span>Security</span>
                    </div>
                </div>
            </div>
            
            <!-- Project 6: AI Assistant -->
            <div class="project-card animate-on-scroll" data-categories="web app">
                <div class="project-image">
                    <img src="assets/images/projects/ai.jpg" alt="AI Assistant for Seafarers" onerror="this.src='https://via.placeholder.com/600x400?text=AI+Assistant'">
                    <div class="project-overlay">
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fas fa-link"></i></a>
                            <a href="#" class="project-details-btn" data-project="ai"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-info">
                    <h3>AI Assistant for Seafarers</h3>
                    <p>Assessment management system with integrated AI support</p>
                    <div class="project-tech">
                        <span>PHP</span>
                        <span>AI Integration</span>
                        <span>MySQL</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Project Details Modal -->
    <div class="modal" id="project-modal">
        <div class="modal-content">
            <span class="modal-close">&times;</span>
            <div class="modal-body">
                <!-- Content will be loaded dynamically -->
            </div>
        </div>
    </div>
</section>

<style>
/* Projects section styles */
.project-filters {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 1rem;
    margin-bottom: 3rem;
}

.filter-btn {
    padding: 0.6rem 1.2rem;
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: 2rem;
    color: var(--text-secondary);
    font-size: 0.9rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.filter-btn.active, .filter-btn:hover {
    background: var(--primary);
    color: var(--text-primary);
}

.projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 2rem;
}

.project-card {
    background: var(--bg-card);
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    opacity: 1;
    transform: translateY(0);
}

.project-card.hide {
    opacity: 0;
    transform: translateY(20px);
    pointer-events: none;
}

.project-image {
    position: relative;
    overflow: hidden;
    height: 250px;
}

.project-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.project-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(15, 23, 42, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.project-card:hover .project-image img {
    transform: scale(1.1);
}

.project-card:hover .project-overlay {
    opacity: 1;
}

.project-links {
    display: flex;
    gap: 1rem;
}

.project-link, .project-details-btn {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: var(--primary);
    color: var(--text-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    font-size: 1.2rem;
    transform: translateY(20px);
    opacity: 0;
    transition: all 0.3s ease;
}

.project-card:hover .project-link,
.project-card:hover .project-details-btn {
    transform: translateY(0);
    opacity: 1;
}

.project-link:hover, .project-details-btn:hover {
    background: var(--secondary);
    transform: translateY(-5px);
}

.project-info {
    padding: 1.5rem;
}

.project-info h3 {
    margin: 0 0 0.5rem;
    font-size: 1.3rem;
    color: var(--text-primary);
}

.project-info p {
    margin: 0 0 1rem;
    color: var(--text-secondary);
    font-size: 0.95rem;
}

.project-tech {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.project-tech span {
    padding: 0.3rem 0.8rem;
    background: var(--bg-secondary);
    border-radius: 1rem;
    font-size: 0.8rem;
    color: var(--text-secondary);
}

/* Modal styles */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    z-index: 1000;
    overflow: auto;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.modal.show {
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 1;
}

.modal-content {
    background: var(--bg-primary);
    border-radius: 1rem;
    width: 90%;
    max-width: 800px;
    position: relative;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
    transform: translateY(20px);
    transition: transform 0.3s ease;
}

.modal.show .modal-content {
    transform: translateY(0);
}

.modal-close {
    position: absolute;
    top: 1rem;
    right: 1.5rem;
    font-size: 2rem;
    color: var(--text-secondary);
    cursor: pointer;
    transition: color 0.3s ease;
}

.modal-close:hover {
    color: var(--primary);
}

.modal-body {
    padding: 2rem;
}

@media (max-width: 768px) {
    .projects-grid {
        grid-template-columns: 1fr;
    }
    
    .project-filters {
        gap: 0.5rem;
    }
    
    .filter-btn {
        padding: 0.5rem 1rem;
        font-size: 0.8rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Project filtering
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            // Get filter value
            const filter = button.getAttribute('data-filter');
            
            // Filter projects
            projectCards.forEach(card => {
                const categories = card.getAttribute('data-categories').split(' ');
                
                if (filter === 'all' || categories.includes(filter)) {
                    card.classList.remove('hide');
                } else {
                    card.classList.add('hide');
                }
            });
        });
    });
    
    // Project modal functionality
    const modal = document.getElementById('project-modal');
    const modalBody = modal.querySelector('.modal-body');
    const modalClose = modal.querySelector('.modal-close');
    const detailButtons = document.querySelectorAll('.project-details-btn');
    
    // Project details data
    const projectDetails = {
        cemr: {
            title: 'Centralized Employee Master Records (CEMR)',
            description: 'Led the development of a comprehensive HR data management system that centralized employee records across the organization. The system features data migration tools, web application interfaces, and API integration with other company systems.',
            challenges: 'Managing data migration from legacy systems while ensuring data integrity and security was a significant challenge. Additionally, creating a system that could integrate with multiple existing platforms required careful API design.',
            solutions: 'Implemented a phased migration approach with thorough validation at each step. Developed a flexible API architecture that could accommodate various integration needs while maintaining security standards.',
            technologies: ['PHP', 'Laravel', 'MySQL', 'RESTful API', 'JavaScript', 'jQuery', 'Bootstrap'],
            results: 'The CEMR system significantly improved HR data accuracy, reduced manual data entry by 70%, and streamlined employee onboarding processes. The system now serves as the central source of truth for employee data across the organization.'
        },
        gaming: {
            title: 'Gaming Company Website',
            description: 'Developed a dynamic website for a gaming company featuring integrated games, news sections, and e-commerce functionality. The site serves as both a showcase for the company\'s games and a platform for direct sales.',
            challenges: 'Creating a seamless integration between the content management system, game demos, and e-commerce functionality while ensuring optimal performance.',
            solutions: 'Utilized Laravel for the backend with a modular architecture that separated concerns between content, game integration, and e-commerce. Implemented efficient caching strategies to optimize performance.',
            technologies: ['Laravel', 'Vanilla JavaScript', 'MySQL', 'E-commerce Integration', 'Payment Gateway API'],
            results: 'The website increased user engagement by 45% and provided a new revenue stream through direct game sales. The platform also improved the company\'s ability to showcase their portfolio to potential clients.'
        },
        // Add more project details as needed
    };
    
    // Open modal with project details
    detailButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            
            const projectId = button.getAttribute('data-project');
            const project = projectDetails[projectId];
            
            if (project) {
                // Populate modal content
                let content = `
                    <h2>${project.title}</h2>
                    <div class="project-detail-section">
                        <h3>Overview</h3>
                        <p>${project.description}</p>
                    </div>
                    <div class="project-detail-section">
                        <h3>Challenges</h3>
                        <p>${project.challenges}</p>
                    </div>
                    <div class="project-detail-section">
                        <h3>Solutions</h3>
                        <p>${project.solutions}</p>
                    </div>
                    <div class="project-detail-section">
                        <h3>Technologies Used</h3>
                        <div class="project-tech-list">
                            ${project.technologies.map(tech => `<span>${tech}</span>`).join('')}
                        </div>
                    </div>
                    <div class="project-detail-section">
                        <h3>Results</h3>
                        <p>${project.results}</p>
                    </div>
                `;
                
                modalBody.innerHTML = content;
                modal.classList.add('show');
                document.body.style.overflow = 'hidden';
            }
        });
    });
    
    // Close modal
    modalClose.addEventListener('click', () => {
        modal.classList.remove('show');
        document.body.style.overflow = 'auto';
    });
    
    // Close modal when clicking outside
    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.remove('show');
            document.body.style.overflow = 'auto';
        }
    });
});
</script>