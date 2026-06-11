(function(){'use strict';document.addEventListener('DOMContentLoaded',function(){
// Mobile Nav
var toggle=document.querySelector('.mobile-toggle'),nav=document.querySelector('.main-nav'),overlay=document.querySelector('.overlay');
if(toggle){toggle.addEventListener('click',function(){this.classList.toggle('active');nav.classList.toggle('active');if(overlay)overlay.classList.toggle('active');document.body.style.overflow=nav.classList.contains('active')?'hidden':'';});}
if(overlay){overlay.addEventListener('click',function(){if(toggle)toggle.classList.remove('active');nav.classList.remove('active');overlay.classList.remove('active');document.body.style.overflow='';});}

// Header scroll
var header=document.querySelector('.site-header');
window.addEventListener('scroll',function(){if(header){header.classList.toggle('scrolled',window.scrollY>50);}},{passive:true});

// Fade-in animations
var fades=document.querySelectorAll('.fade-in');
if(fades.length&&'IntersectionObserver' in window){
var obs=new IntersectionObserver(function(entries){entries.forEach(function(e){if(e.isIntersecting){e.target.classList.add('visible');obs.unobserve(e.target);}});},{threshold:0.1,rootMargin:'0px 0px -50px 0px'});
fades.forEach(function(el){obs.observe(el);});
}else{fades.forEach(function(el){el.classList.add('visible');});}

// FAQ Accordion
document.querySelectorAll('.faq-item').forEach(function(item){
var q=item.querySelector('.faq-question');
if(q){q.addEventListener('click',function(){var active=item.classList.contains('active');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('active');});if(!active)item.classList.add('active');});
q.setAttribute('tabindex','0');q.addEventListener('keydown',function(e){if(e.key==='Enter'||e.key===' '){e.preventDefault();this.click();}});}
});

// Contact Form
var form=document.getElementById('contactForm');
if(form){form.addEventListener('submit',function(e){e.preventDefault();
var fd=new FormData(this),btn=this.querySelector('button[type="submit"]'),msg=document.getElementById('form-message');
var valid=true;this.querySelectorAll('[required]').forEach(function(f){if(!f.value.trim()){f.style.borderColor='#ef4444';valid=false;}else{f.style.borderColor='';}});
if(!valid){if(msg){msg.style.display='block';msg.style.background='#fef2f2';msg.style.color='#ef4444';msg.textContent='Please fill all required fields.';}return;}
if(typeof ppg_ajax!=='undefined'){
btn.textContent='Sending...';btn.disabled=true;
fd.append('action','ppg_contact');fd.append('nonce',ppg_ajax.nonce);
fetch(ppg_ajax.ajax_url,{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(d){
if(d.success){if(msg){msg.style.display='block';msg.style.background='#ecfdf5';msg.style.color='#10b981';msg.textContent=d.data.message;}btn.textContent='Sent! \u2713';btn.style.background='#10b981';form.reset();
if(typeof gtag==='function')gtag('event','generate_lead',{event_category:'Contact Form'});
if(typeof dataLayer!=='undefined')dataLayer.push({event:'form_submission',form_type:'contact'});
setTimeout(function(){btn.textContent='Send Message \u2192';btn.style.background='';btn.disabled=false;if(msg)msg.style.display='none';},5000);
}else{if(msg){msg.style.display='block';msg.style.background='#fef2f2';msg.style.color='#ef4444';msg.textContent=d.data.message||'Error occurred.';}btn.textContent='Send Message \u2192';btn.disabled=false;}
}).catch(function(){if(msg){msg.style.display='block';msg.style.background='#fef2f2';msg.style.color='#ef4444';msg.textContent='Network error. Please try again.';}btn.textContent='Send Message \u2192';btn.disabled=false;});
}else{btn.textContent='Sent! \u2713';btn.style.background='#10b981';setTimeout(function(){btn.textContent='Send Message \u2192';btn.style.background='';form.reset();},3000);}
});}

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(function(a){a.addEventListener('click',function(e){var t=this.getAttribute('href');if(t!=='#'&&t.length>1){e.preventDefault();var el=document.querySelector(t);if(el){var h=header?header.offsetHeight:0;window.scrollTo({top:el.getBoundingClientRect().top+window.pageYOffset-h-20,behavior:'smooth'});}}});});
});})();
