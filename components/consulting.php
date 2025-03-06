<section id="consulting" class="consulting section">
    <div class="container">
        <h2 class="section-title animate-on-scroll">Consulting Work</h2>
        
        <div class="consulting-intro animate-on-scroll">
            <p>As an IT consultant, I've helped various organizations solve complex technical challenges and implement innovative solutions. My consulting approach focuses on understanding client needs, delivering tailored solutions, and ensuring knowledge transfer for long-term success.</p>
        </div>
        
        <div class="consulting-clients">
            <?php foreach ($config['consulting'] as $index => $client): ?>
                <div class="client-card animate-on-scroll">
                    <div class="client-header">
                        <h3><?php echo isset($client['client']) ? $client['client'] : $client['title']; ?></h3>
                        <span class="client-period"><?php echo $client['period']; ?></span>
                    </div>
                    
                    <div class="client-projects">
                        <h4>Key Projects</h4>
                        <ul class="project-list">
                            <?php foreach ($client['projects'] as $project): ?>
                                <li class="project-item">
                                    <div class="project-marker"></div>
                                    <div class="project-content"><?php echo $project; ?></div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    
                    <div class="client-cta">
                        <button class="btn-outline client-details-btn" data-client="<?php echo $index; ?>">View Details</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Testimonials Carousel -->
        <div class="testimonials animate-on-scroll">
            <h3>Client Testimonials</h3>
            
            <div class="testimonial-carousel">
                <div class="testimonial-track">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>"Joseph's expertise in developing our assessment management system with AI integration has transformed how we support our seafarers. His technical skills and understanding of our industry needs were exceptional."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="assets/images/testimonials/client1.jpg" alt="Client" onerror="this.src='https://via.placeholder.com/60x60?text=Client'">
                            </div>
                            <div class="author-info">
                                <h4>John Smith</h4>
                                <p>Director, IMA Assessment and Training Center</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 2 -->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>"The real-time survey application Joseph developed for us has significantly improved our data collection and analysis capabilities. His attention to detail and responsive support made the project a success."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="assets/images/testimonials/client2.jpg" alt="Client" onerror="this.src='https://via.placeholder.com/60x60?text=Client'">
                            </div>
                            <div class="author-info">
                                <h4>Maria Rodriguez</h4>
                                <p>Operations Manager, IMA Assessment</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 3 -->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>"Joseph's implementation of anti-hack measures and licensing systems for our games has been invaluable. His technical expertise and proactive approach to security challenges have protected our intellectual property."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="assets/images/testimonials/client3.jpg" alt="Client" onerror="this.src='https://via.placeholder.com/60x60?text=Client'">
                            </div>
                            <div class="author-info">
                                <h4>David Chen</h4>
                                <p>Game Studio Owner</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-controls">
                    <button class="carousel-prev"><i class="fas fa-chevron-left"></i></button>
                    <div class="carousel-dots"></div>
                    <button class="carousel-next"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Client Details Modal -->
    <div class="modal" id="client-modal">
        <div class="modal-content">
            <span class="modal-close">&times;</span>
            <div class="modal-body">
                <!-- Content will be loaded dynamically -->
            </div>
        </div>
    </div>
</section>

<style>
/* Consulting section styles */
.consulting-intro {
    max-width: 800px;
    margin: 0 auto 3rem;
    text-align: center;
}

.consulting-clients {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 4rem;
}

.client-card {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: 1rem;
    padding: 2rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.client-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.client-header {
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid var(--border);
}

.client-header h3 {
    margin: 0 0 0.5rem;
    color: var(--text-primary);
}

.client-period {
    display: inline-block;
    padding: 0.3rem 0.8rem;
    background: var(--bg-secondary);
    border-radius: 1rem;
    font-size: 0.9rem;
    color: var(--text-secondary);
}

.client-projects h4 {
    margin-bottom: 1rem;
    color: var(--primary);
}

.project-list {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.project-item {
    display: flex;
    margin-bottom: 1rem;
}

.project-marker {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: var(--primary);
    margin-top: 0.4rem;
    margin-right: 1rem;
    flex-shrink: 0;
}

.project-content {
    color: var(--text-secondary);
}

.client-cta {
    margin-top: 1.5rem;
    text-align: center;
}

/* Testimonials */
.testimonials {
    margin-top: 4rem;
}

.testimonials h3 {
    text-align: center;
    margin-bottom: 2rem;
    color: var(--text-primary);
}

.testimonial-carousel {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
    overflow: hidden;
}

.testimonial-track {
    display: flex;
    transition: transform 0.5s ease;
}

.testimonial-item {
    min-width: 100%;
    padding: 0 1rem;
}

.testimonial-content {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: 1rem;
    padding: 2rem;
    position: relative;
    margin-bottom: 2rem;
}

.testimonial-content::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 30px;
    width: 20px;
    height: 20px;
    background: var(--bg-card);
    border-right: 1px solid var(--border);
    border-bottom: 1px solid var(--border);
    transform: rotate(45deg);
}

.testimonial-content p {
    font-style: italic;
    color: var(--text-secondary);
}

.testimonial-author {
    display: flex;
    align-items: center;
    padding-left: 1.5rem;
}

.author-image {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 1rem;
}

.author-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.author-info h4 {
    margin: 0 0 0.3rem;
    color: var(--text-primary);
}

.author-info p {
    margin: 0;
    font-size: 0.9rem;
    color: var(--text-secondary);
}

.carousel-controls {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 2rem;
}

.carousel-prev, .carousel-next {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: var(--bg-secondary);
    border: none;
    color: var(--text-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.carousel-prev:hover, .carousel-next:hover {
    background: var(--primary);
}

.carousel-dots {
    display: flex;
    gap: 0.5rem;
    margin: 0 1rem;
}

.carousel-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: var(--bg-secondary);
    cursor: pointer;
    transition: all 0.3s ease;
}

.carousel-dot.active {
    background: var(--primary);
    transform: scale(1.2);
}

@media (max-width: 768px) {
    .consulting-clients {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Client details modal
    const clientModal = document.getElementById('client-modal');
    const clientModalBody = clientModal.querySelector('.modal-body');
    const clientModalClose = clientModal.querySelector('.modal-close');
    const clientDetailButtons = document.querySelectorAll('.client-details-btn');
    
    // Client details data
    const clientDetails = [
        {
            name: 'IMA Assessment and Training Center Inc.',
            period: '2022 - Present',
            description: 'Providing comprehensive IT consulting services to enhance training and assessment capabilities for maritime professionals.',
            challenges: 'The center needed to modernize its assessment processes, improve data collection, and provide better support for seafarers during training.',
            solutions: 'Developed a suite of integrated applications including CRUD modules, a portal website, real-time survey tools, and an AI-assisted assessment management system.',
            technologies: ['PHP', 'Laravel', 'AJAX', 'Pusher', 'MySQL', 'AI Integration'],
            results: 'The solutions have streamlined assessment processes, improved data accuracy, and enhanced the learning experience for seafarers. The AI assistant has reduced support inquiries by 40% while providing 24/7 guidance to users.'
        },
        {
            name: 'Indie Game Development',
            period: 'June 2021 - Present',
            description: 'Providing specialized technical services for game developers focusing on security, licensing, and anti-cheat measures.',
            challenges: 'Game developers faced significant issues with unauthorized access, cheating, and piracy that undermined their revenue and player experience.',
            solutions: 'Implemented robust anti-hack measures, secure licensing systems, and game administration tools that protect intellectual property while maintaining performance.',
            technologies: ['C++', 'C#', 'Security Protocols', 'Encryption', 'License Management'],
            results: 'Successfully reduced unauthorized access by over 85% and implemented licensing systems that have increased revenue capture. The solutions have helped create a more fair and enjoyable gaming environment for legitimate players.'
        }
    ];
    
    // Open modal with client details
    clientDetailButtons.forEach(button => {
        button.addEventListener('click', () => {
            const clientIndex = parseInt(button.getAttribute('data-client'));
            const client = clientDetails[clientIndex];
            
            if (client) {
                // Populate modal content
                let content = `
                    <h2>${client.name}</h2>
                    <div class="client-detail-section">
                        <h3>Overview</h3>
                        <p>${client.description}</p>
                    </div>
                    <div class="client-detail-section">
                        <h3>Challenges</h3>
                        <p>${client.challenges}</p>
                    </div>
                    <div class="client-detail-section">
                        <h3>Solutions</h3>
                        <p>${client.solutions}</p>
                    </div>
                    <div class="client-detail-section">
                        <h3>Technologies Used</h3>
                        <div class="project-tech-list">
                            ${client.technologies.map(tech => `<span>${tech}</span>`).join('')}
                        </div>
                    </div>
                    <div class="client-detail-section">
                        <h3>Results</h3>
                        <p>${client.results}</p>
                    </div>
                `;
                
                clientModalBody.innerHTML = content;
                clientModal.classList.add('show');
                document.body.style.overflow = 'hidden';
            }
        });
    });
    
    // Close modal
    clientModalClose.addEventListener('click', () => {
        clientModal.classList.remove('show');
        document.body.style.overflow = 'auto';
    });
    
    // Close modal when clicking outside
    window.addEventListener('click', (e) => {
        if (e.target === clientModal) {
            clientModal.classList.remove('show');
            document.body.style.overflow = 'auto';
        }
    });
    
    // Testimonial carousel
    const track = document.querySelector('.testimonial-track');
    const items = document.querySelectorAll('.testimonial-item');
    const dotsContainer = document.querySelector('.carousel-dots');
    const prevButton = document.querySelector('.carousel-prev');
    const nextButton = document.querySelector('.carousel-next');
    
    let currentIndex = 0;
    const itemCount = items.length;
    
    // Create dots
    for (let i = 0; i < itemCount; i++) {
        const dot = document.createElement('div');
        dot.classList.add('carousel-dot');
        if (i === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goToSlide(i));
        dotsContainer.appendChild(dot);
    }
    
    // Update carousel
    function updateCarousel() {
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
        
        // Update dots
        document.querySelectorAll('.carousel-dot').forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }
    
    // Go to specific slide
    function goToSlide(index) {
        currentIndex = index;
        updateCarousel();
    }
    
    // Next slide
    function nextSlide() {
        currentIndex = (currentIndex + 1) % itemCount;
        updateCarousel();
    }
    
    // Previous slide
    function prevSlide() {
        currentIndex = (currentIndex - 1 + itemCount) % itemCount;
        updateCarousel();
    }
    
    // Event listeners
    nextButton.addEventListener('click', nextSlide);
    prevButton.addEventListener('click', prevSlide);
    
    // Auto-advance carousel
    setInterval(nextSlide, 5000);
});
</script>