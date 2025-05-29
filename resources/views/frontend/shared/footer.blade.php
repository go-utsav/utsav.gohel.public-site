<section id="contact" class="py-5">
    <div class="container">

        <div class="row">
            <!-- Contact Information -->
            <div class="col-lg-5 d-flex flex-column justify-content-center">
                <h2 class="">Contact</h2>
                <p class="lead mb-4">Let's discuss your project. Drop me a message or reach out directly.</p>
                <div class="contact-info d-flex flex-column justify-content-between">
                    <div class="d-flex align-items-center  mb-4">
                        <div class="icon-box me-3">
                            <i class="fas fa-map-marker-alt fa-lg text-dark"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Location</h5>
                            <p class="mb-0">London Central, UK</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box me-3">
                            <i class="fas fa-envelope fa-lg text-dark"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Email</h5>
                            <p class="mb-0">utsavgohel.ug@outlook.com</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box me-3">
                            <i class="fas fa-phone-alt fa-lg text-dark"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Phone</h5>
                            <p class="mb-0">+44 777 460 8622</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="">
                    <div class="card-body p-4">
                        <h3 class="h4 mb-4">Send a Message</h3>
                        <form id="contactForm">
                            <!-- Name Row -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Row -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone">
                                    </div>
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="form-group mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="4" maxlength="250"
                                    required></textarea>
                                <small class="text-muted">Maximum 250 characters</small>
                            </div>

                            <!-- Captcha -->
                            <div class="form-group mb-4">
                                <div class="g-recaptcha" data-sitekey="your-site-key"></div>
                            </div>

                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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