<section id="contact" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Contact Information -->
            <div class="col-lg-5">
                <div class=" mb-5">
                    <h2 class="">Contact</h2>
                    <p class="lead">Let's discuss your project. Drop me a message or reach out directly.</p>
                </div>
                
                <!-- Contact Info -->
                <div class="contact-info mb-4">
                    <!-- Location -->
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box me-3">
                            <i class="fas fa-map-marker-alt fa-lg text-dark"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Location</h5>
                            <p class="mb-0 ">London Central, UK</p>
                            <small class="text-muted">Available for remote work worldwide</small>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box me-3">
                            <i class="fas fa-envelope fa-lg text-dark"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Email</h5>
                            <a href="mailto:utsavgohel.ug@outlook.com" class="text-primary text-decoration-none text-dark">
                                utsavgohel.ug@outlook.com
                            </a>
                        </div>
                    </div>

                    <!-- WhatsApp -->
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box me-3">
                            <i class="fab fa-whatsapp fa-lg text-dark"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">WhatsApp</h5>
                            <a href="https://wa.me/447774608622" target="_blank" class="text-primary text-decoration-none text-dark">
                                +44 777 460 8622
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Schedule a Call -->
                <div class="schedule-call mb-4 py-3">
                    <h4 class="h5  ">Schedule a Call</h4>
                    <p class="text-muted mb-3">Book a 30-minute discovery call to discuss your project in detail.</p>
                    <a href="https://calendly.com/utsavgohel-ug/30min" class="btn btn-outline-primary d-block" target="_blank">
                        <i class="far fa-calendar-alt me-2"></i>
                        Schedule Meeting
                    </a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="contact-form-wrapper">
                    <!-- <h3 class="h4 mb-4 text-center">Send a Message</h3> -->
                    <form id="contactForm" class="needs-validation" novalidate>
                        <!-- Name Row -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstName" class="form-label">First Name *</label>
                                    <input type="text" class="form-control" id="firstName" required>
                                    <div class="invalid-feedback">
                                        Please enter your first name
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastName" class="form-label">Last Name *</label>
                                    <input type="text" class="form-control" id="lastName" required>
                                    <div class="invalid-feedback">
                                        Please enter your last name
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Row -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" class="form-control" id="email" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone">
                                </div>
                            </div>
                        </div>

                        <!-- Project Type -->
                        <div class="form-group mb-3">
                            <label for="projectType" class="form-label">Project Type *</label>
                            <select class="form-select" id="projectType" required>
                                <option value="">Select project type</option>
                                <option value="web">Web Development</option>
                                <option value="cloud">Cloud Architecture</option>
                                <option value="ai">AI Integration</option>
                                <option value="consulting">Technical Consulting</option>
                                <option value="other">Other</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a project type
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="form-group mb-3">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control" id="message" rows="4" maxlength="500" required></textarea>
                            <div class="invalid-feedback">
                                Please enter your message
                            </div>
                            <div class="form-text">
                                <span id="charCount">0</span>/500 characters
                            </div>
                        </div>

                        <!-- Captcha -->
                        <div class="form-group mb-4">
                            <div class="g-recaptcha" data-sitekey="your-site-key"></div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane me-2"></i>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Calendly Script -->
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>

<!-- Add Font Awesome and reCAPTCHA -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<!-- Simple Footer -->
<footer class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="mb-0">© 2024 Utsav Gohel. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="#" class="text-white text-decoration-none me-3">LinkedIn</a>
                <a href="#" class="text-white text-decoration-none me-3">GitHub</a>
                <a href="#" class="text-white text-decoration-none">Twitter</a>
            </div>
        </div>
    </div>
</footer>