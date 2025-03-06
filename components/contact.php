<section id="contact" class="contact section">
    <div class="container">
        <h2 class="section-title animate-on-scroll">Get In Touch</h2>
        
        <div class="contact-intro animate-on-scroll">
            <p>Interested in working together? Have a question about my services? Feel free to reach out using the form below or through my contact information.</p>
        </div>
        
        <div class="contact-container">
            <div class="contact-info animate-on-scroll">
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-content">
                        <h3>Location</h3>
                        <p><?php echo $config['personal']['location']; ?></p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h3>Email</h3>
                        <p><a href="mailto:<?php echo $config['personal']['email']; ?>"><?php echo $config['personal']['email']; ?></a></p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h3>Phone</h3>
                        <p><?php echo $config['personal']['phone']; ?></p>
                    </div>
                </div>
                
                <div class="social-links">
                    <h3>Connect With Me</h3>
                    <div class="social-icons">
                        <?php if ($config['social']['github']): ?>
                            <a href="<?php echo $config['social']['github']; ?>" target="_blank" rel="noopener noreferrer" class="social-icon">
                                <i class="fab fa-github"></i>
                            </a>
                        <?php endif; ?>
                        
                        <?php if ($config['social']['linkedin']): ?>
                            <a href="<?php echo $config['social']['linkedin']; ?>" target="_blank" rel="noopener noreferrer" class="social-icon">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        <?php endif; ?>
                        
                        <?php if ($config['social']['twitter']): ?>
                            <a href="<?php echo $config['social']['twitter']; ?>" target="_blank" rel="noopener noreferrer" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-container animate-on-scroll">
                <form id="contact-form" class="contact-form">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required>
                        <div class="form-border"></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" required>
                        <div class="form-border"></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                        <div class="form-border"></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                        <div class="form-border"></div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary submit-btn">
                        <span class="btn-text">Send Message</span>
                        <span class="btn-icon"><i class="fas fa-paper-plane"></i></span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Notification for form submission -->
    <div class="notification-container"></div>
</section>

<style>
/* Contact section styles */
.contact-intro {
    max-width: 800px;
    margin: 0 auto 3rem;
    text-align: center;
}

.contact-container {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 3rem;
}

/* Contact Info */
.contact-info {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: 1rem;
    padding: 2rem;
}

.info-item {
    display: flex;
    margin-bottom: 2rem;
}

.info-icon {
    width: 50px;
    height: 50px;
    background: var(--bg-secondary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
    color: var(--primary);
    font-size: 1.2rem;
    flex-shrink: 0;
}

.info-content h3 {
    margin: 0 0 0.5rem;
    font-size: 1.2rem;
    color: var(--text-primary);
}

.info-content p {
    margin: 0;
    color: var(--text-secondary);
}

.info-content a {
    color: var(--text-secondary);
    text-decoration: none;
    transition: color 0.3s ease;
}

.info-content a:hover {
    color: var(--primary);
}

.social-links h3 {
    margin: 0 0 1rem;
    font-size: 1.2rem;
    color: var(--text-primary);
}

.social-icons {
    display: flex;
    gap: 1rem;
}

.social-icon {
    width: 40px;
    height: 40px;
    background: var(--bg-secondary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-primary);
    text-decoration: none;
    transition: all 0.3s ease;
}

.social-icon:hover {
    background: var(--primary);
    transform: translateY(-3px);
}

/* Contact Form */
.contact-form-container {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: 1rem;
    padding: 2rem;
}

.form-group {
    margin-bottom: 1.5rem;
    position: relative;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    color: var(--text-secondary);
    font-size: 0.9rem;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 0.8rem 0;
    background: transparent;
    border: none;
    border-bottom: 1px solid var(--border);
    color: var(--text-primary);
    font-family: inherit;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
}

.form-border {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, var(--primary), var(--secondary));
    transition: width 0.3s ease;
}

.form-group input:focus ~ .form-border,
.form-group textarea:focus ~ .form-border {
    width: 100%;
}

.submit-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    padding: 1rem 2rem;
    width: 100%;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.submit-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.7s ease;
}

.submit-btn:hover::before {
    left: 100%;
}

.btn-icon {
    transition: transform 0.3s ease;
}

.submit-btn:hover .btn-icon {
    transform: translateX(5px);
}

/* Notification */
.notification-container {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 1000;
}

.notification {
    padding: 1rem 2rem;
    margin-bottom: 1rem;
    border-radius: 0.5rem;
    color: white;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    display: flex;
    align-items: center;
    transform: translateX(120%);
    transition: transform 0.3s ease;
}

.notification.show {
    transform: translateX(0);
}

.notification.success {
    background: #10b981;
}

.notification.error {
    background: #ef4444;
}

.notification.info {
    background: #3b82f6;
}

@media (max-width: 768px) {
    .contact-container {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(contactForm);
            const formValues = Object.fromEntries(formData.entries());
            
            // Validate form
            let isValid = true;
            let errorMessage = '';
            
            if (!formValues.name.trim()) {
                isValid = false;
                errorMessage = 'Please enter your name';
            } else if (!formValues.email.trim()) {
                isValid = false;
                errorMessage = 'Please enter your email';
            } else if (!isValidEmail(formValues.email)) {
                isValid = false;
                errorMessage = 'Please enter a valid email address';
            } else if (!formValues.subject.trim()) {
                isValid = false;
                errorMessage = 'Please enter a subject';
            } else if (!formValues.message.trim()) {
                isValid = false;
                errorMessage = 'Please enter your message';
            }
            
            if (!isValid) {
                showNotification(errorMessage, 'error');
                return;
            }
            
            // Simulate form submission (in a real implementation, you would send to server)
            const submitButton = contactForm.querySelector('.submit-btn');
            const originalText = submitButton.innerHTML;
            
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitButton.disabled = true;
            
            // Simulate server request
            setTimeout(() => {
                showNotification('Your message has been sent successfully!', 'success');
                contactForm.reset();
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            }, 1500);
        });
    }
    
    // Email validation
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    // Show notification
    function showNotification(message, type = 'info') {
        const notificationContainer = document.querySelector('.notification-container');
        
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        notification.textContent = message;
        
        notificationContainer.appendChild(notification);
        
        // Show notification with animation
        setTimeout(() => {
            notification.classList.add('show');
        }, 10);
        
        // Remove notification after 5 seconds
        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, 5000);
    }
    
    // Form input animations
    const formInputs = document.querySelectorAll('.form-group input, .form-group textarea');
    
    formInputs.forEach(input => {
        // Add focus class when input is focused
        input.addEventListener('focus', () => {
            input.parentElement.classList.add('focused');
        });
        
        // Remove focus class when input loses focus
        input.addEventListener('blur', () => {
            input.parentElement.classList.remove('focused');
            
            // Add filled class if input has value
            if (input.value.trim() !== '') {
                input.parentElement.classList.add('filled');
            } else {
                input.parentElement.classList.remove('filled');
            }
        });
        
        // Check initial state
        if (input.value.trim() !== '') {
            input.parentElement.classList.add('filled');
        }
    });
});
</script>