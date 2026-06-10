/**
 * PayPerGrowth WordPress Theme - Main JavaScript
 *
 * @package PayPerGrowth
 * @version 1.0.0
 */

(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {

        // ===== Mobile Navigation =====
        const mobileToggle = document.querySelector('.mobile-toggle');
        const navMenu = document.querySelector('.nav-menu');
        const overlay = document.querySelector('.overlay');

        if (mobileToggle) {
            mobileToggle.addEventListener('click', function() {
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !isExpanded);
                this.classList.toggle('active');
                navMenu.classList.toggle('active');
                if (overlay) overlay.classList.toggle('active');
                document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
            });
        }

        if (overlay) {
            overlay.addEventListener('click', function() {
                if (mobileToggle) {
                    mobileToggle.classList.remove('active');
                    mobileToggle.setAttribute('aria-expanded', 'false');
                }
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
                    const parent = this.parentElement;
                    const isActive = parent.classList.contains('active');
                    // Close all dropdowns
                    document.querySelectorAll('.nav-dropdown').forEach(function(d) {
                        d.classList.remove('active');
                    });
                    if (!isActive) {
                        parent.classList.add('active');
                    }
                    this.setAttribute('aria-expanded', !isActive);
                }
            });
        });

        // ===== Header Scroll Effect =====
        const header = document.querySelector('.header');
        let lastScroll = 0;

        function handleScroll() {
            const currentScroll = window.scrollY;
            if (header) {
                if (currentScroll > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            }
            lastScroll = currentScroll;
        }

        window.addEventListener('scroll', handleScroll, { passive: true });

        // ===== Scroll Animations (Intersection Observer) =====
        const fadeElements = document.querySelectorAll('.fade-in');

        if (fadeElements.length > 0 && 'IntersectionObserver' in window) {
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
        } else {
            // Fallback for browsers without IntersectionObserver
            fadeElements.forEach(function(el) {
                el.classList.add('visible');
            });
        }

        // ===== FAQ Accordion =====
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(function(item) {
            const question = item.querySelector('.faq-question');
            if (question) {
                question.addEventListener('click', function() {
                    const isActive = item.classList.contains('active');
                    // Close all
                    faqItems.forEach(function(i) {
                        i.classList.remove('active');
                    });
                    // Open current if wasn't active
                    if (!isActive) {
                        item.classList.add('active');
                    }
                });

                // Keyboard accessibility
                question.setAttribute('tabindex', '0');
                question.setAttribute('role', 'button');
                question.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        this.click();
                    }
                });
            }
        });

        // ===== Counter Animation =====
        const counters = document.querySelectorAll('[data-count]');

        if (counters.length > 0 && 'IntersectionObserver' in window) {
            const counterObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        const target = entry.target;
                        const count = parseInt(target.getAttribute('data-count'));
                        const suffix = target.getAttribute('data-suffix') || '';
                        const prefix = target.getAttribute('data-prefix') || '';
                        let current = 0;
                        const duration = 1500; // ms
                        const steps = 60;
                        const increment = count / steps;
                        const stepTime = duration / steps;

                        const timer = setInterval(function() {
                            current += increment;
                            if (current >= count) {
                                current = count;
                                clearInterval(timer);
                            }
                            target.textContent = prefix + Math.floor(current).toLocaleString('en-IN') + suffix;
                        }, stepTime);

                        counterObserver.unobserve(target);
                    }
                });
            }, { threshold: 0.5 });

            counters.forEach(function(counter) {
                counterObserver.observe(counter);
            });
        }

        // ===== Contact Form AJAX Handling =====
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(this);
                const btn = this.querySelector('button[type="submit"]');
                const msgEl = document.getElementById('form-message');

                // Client-side validation
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

                // Email validation
                const emailField = this.querySelector('#email');
                if (emailField && emailField.value) {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(emailField.value)) {
                        emailField.style.borderColor = '#ef4444';
                        valid = false;
                    }
                }

                if (!valid) {
                    if (msgEl) {
                        msgEl.style.display = 'block';
                        msgEl.style.background = '#fef2f2';
                        msgEl.style.color = '#ef4444';
                        msgEl.textContent = 'Please fill in all required fields correctly.';
                    }
                    return;
                }

                // Send via AJAX if WordPress localized script is available
                if (typeof paypergrowth_ajax !== 'undefined') {
                    btn.textContent = 'Sending...';
                    btn.disabled = true;

                    formData.append('action', 'paypergrowth_contact');
                    formData.append('nonce', paypergrowth_ajax.nonce);

                    fetch(paypergrowth_ajax.ajax_url, {
                        method: 'POST',
                        body: formData,
                    })
                    .then(function(response) { return response.json(); })
                    .then(function(data) {
                        if (data.success) {
                            if (msgEl) {
                                msgEl.style.display = 'block';
                                msgEl.style.background = '#ecfdf5';
                                msgEl.style.color = '#10b981';
                                msgEl.textContent = data.data.message;
                            }
                            btn.textContent = 'Message Sent! \u2713';
                            btn.style.background = '#10b981';
                            contactForm.reset();

                            // Track conversion in GA4
                            if (typeof gtag === 'function') {
                                gtag('event', 'generate_lead', {
                                    'event_category': 'Contact Form',
                                    'event_label': formData.get('service') || 'General',
                                });
                            }

                            // Push to dataLayer for GTM
                            if (typeof dataLayer !== 'undefined') {
                                dataLayer.push({
                                    'event': 'form_submission',
                                    'form_type': 'contact',
                                    'service_interest': formData.get('service') || 'General',
                                });
                            }

                            setTimeout(function() {
                                btn.textContent = 'Send Message \u2192';
                                btn.style.background = '';
                                btn.disabled = false;
                                if (msgEl) msgEl.style.display = 'none';
                            }, 5000);
                        } else {
                            if (msgEl) {
                                msgEl.style.display = 'block';
                                msgEl.style.background = '#fef2f2';
                                msgEl.style.color = '#ef4444';
                                msgEl.textContent = data.data.message || 'Something went wrong.';
                            }
                            btn.textContent = 'Send Message \u2192';
                            btn.disabled = false;
                        }
                    })
                    .catch(function() {
                        if (msgEl) {
                            msgEl.style.display = 'block';
                            msgEl.style.background = '#fef2f2';
                            msgEl.style.color = '#ef4444';
                            msgEl.textContent = 'Network error. Please try again.';
                        }
                        btn.textContent = 'Send Message \u2192';
                        btn.disabled = false;
                    });
                } else {
                    // Fallback: simple success message
                    btn.textContent = 'Message Sent! \u2713';
                    btn.style.background = '#10b981';
                    setTimeout(function() {
                        btn.textContent = 'Send Message \u2192';
                        btn.style.background = '';
                        contactForm.reset();
                    }, 3000);
                }
            });
        }

        // ===== Smooth Scroll for Anchor Links =====
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId !== '#' && targetId.length > 1) {
                    e.preventDefault();
                    const target = document.querySelector(targetId);
                    if (target) {
                        const headerHeight = header ? header.offsetHeight : 0;
                        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 20;
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });

        // ===== Lazy Load Images (native) =====
        if ('loading' in HTMLImageElement.prototype) {
            const images = document.querySelectorAll('img:not([loading])');
            images.forEach(function(img) {
                if (!img.closest('.hero')) {
                    img.setAttribute('loading', 'lazy');
                }
            });
        }

    });
})();
