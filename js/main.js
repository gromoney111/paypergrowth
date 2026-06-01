// ===== PayPerGrowth.com - Main JavaScript =====

document.addEventListener('DOMContentLoaded', function() {
    // Mobile Navigation
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navMenu = document.querySelector('.nav-menu');
    const overlay = document.querySelector('.overlay');

    if (mobileToggle) {
        mobileToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            navMenu.classList.toggle('active');
            overlay.classList.toggle('active');
            document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
        });
    }

    if (overlay) {
        overlay.addEventListener('click', function() {
            mobileToggle.classList.remove('active');
            navMenu.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = '';
        });
    }

    // Mobile dropdown toggle
    const dropdowns = document.querySelectorAll('.nav-dropdown > a');
    dropdowns.forEach(function(dropdown) {
        dropdown.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                this.parentElement.classList.toggle('active');
            }
        });
    });

    // Header scroll effect
    const header = document.querySelector('.header');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });


    // Scroll animations (fade-in)
    const fadeElements = document.querySelectorAll('.fade-in');
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    fadeElements.forEach(function(el) {
        observer.observe(el);
    });

    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(function(item) {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', function() {
            const isActive = item.classList.contains('active');
            // Close all
            faqItems.forEach(function(i) { i.classList.remove('active'); });
            // Open current if wasn't active
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });

    // Counter animation
    const counters = document.querySelectorAll('[data-count]');
    const counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                const target = entry.target;
                const count = parseInt(target.getAttribute('data-count'));
                const suffix = target.getAttribute('data-suffix') || '';
                const prefix = target.getAttribute('data-prefix') || '';
                let current = 0;
                const increment = count / 60;
                const timer = setInterval(function() {
                    current += increment;
                    if (current >= count) {
                        current = count;
                        clearInterval(timer);
                    }
                    target.textContent = prefix + Math.floor(current) + suffix;
                }, 25);
                counterObserver.unobserve(target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(function(counter) {
        counterObserver.observe(counter);
    });

    // Contact form handling
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Simple validation
            let valid = true;
            const required = this.querySelectorAll('[required]');
            required.forEach(function(field) {
                if (!field.value.trim()) {
                    field.style.borderColor = '#ef4444';
                    valid = false;
                } else {
                    field.style.borderColor = '';
                }
            });

            if (valid) {
                // Show success message
                const btn = this.querySelector('button[type="submit"]');
                btn.textContent = 'Message Sent! ✓';
                btn.style.background = '#10b981';
                setTimeout(function() {
                    btn.textContent = 'Send Message';
                    btn.style.background = '';
                    contactForm.reset();
                }, 3000);
            }
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId !== '#') {
                e.preventDefault();
                const target = document.querySelector(targetId);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }
        });
    });
});
