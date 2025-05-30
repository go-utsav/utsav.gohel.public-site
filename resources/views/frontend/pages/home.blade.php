@extends('frontend.layout')

@section('content')
<!-- Hero Section -->
<div class="hero-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-4">I Help Businesses Build Secure, Scalable Solutions</h1>
                <p class="lead mb-4">Transforming ideas into high-performance web applications and cloud infrastructure
                    that drives real business growth.</p>
                <p class="lead mb-4">Your startup idea, live in days—not months. Precision-built, launch-ready.</p>
                <div class="d-flex gap-3">
                    <a href="#portfolio" class="btn btn-primary">See My Work</a>
                    <a href="#contact" class="btn btn-outline-primary">Contact Me</a>
                </div>
            </div>
            <div class="col-lg-4 text-center mt-4 mt-lg-0">
                <img src="https://media.licdn.com/dms/image/v2/D4E03AQE49Af6T7Wr-w/profile-displayphoto-shrink_200_200/B4EZZsIKS8HcAY-/0/1745570801305?e=1753920000&v=beta&t=qi_xq3MuDLvcOkAW1Qk3l0JIi-R4ExV6b14YQCeDUbE"
                    alt="Utsav Gohel" class="img-fluid"
                    style="width: 250px; height: 250px; object-fit: cover; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.15);">
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Case Studies -->
<section id="portfolio" class="py-5">
    <div class="container">
        <!-- Section Header with View All -->
        <div class="row align-items-center mb-4">
            <div class="col-lg-6">
                <h2 class="section-heading mb-0">Client Success Stories</h2>
                <p class="text-muted mt-2 mb-0">Transforming ideas into impactful solutions</p>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a href="{{ route('case-study-grid') }}" class="btn btn-outline-primary rounded-pill">
                    View All Case Studies <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>

        <!-- Case Study Cards - Only show 2 -->
        <div class="row g-4">
            @foreach ($caseStudies->take(2) as $caseStudy)
            <div class="col-md-6">
                <div class="case-study-card">
                    <div class="case-study-image">
                        @if($caseStudy->client_location)
                        <span class="client-location">
                            <i class="fas fa-globe"></i> {{ $caseStudy->client_location }}
                        </span>
                        @endif
                        <img src="{{ asset('storage/' . $caseStudy->cover_image) }}" alt="{{ $caseStudy->title }}"
                            class="img-fluid">
                    </div>
                    <div class="case-study-content">
                        <h3>{{ $caseStudy->title }}</h3>
                        <div class="tech-stack">
                            @php
                            $techStack = json_decode($caseStudy->tech_stack) ?? [];
                            if (!is_array($techStack)) {
                            $techStack = explode(',', $caseStudy->tech_stack);
                            }
                            @endphp
                            @foreach($techStack as $tech)
                            <span>{{ trim($tech) }}</span>
                            @endforeach
                        </div>
                        <ul class="case-study-points">
                            <li><strong>Challenge:</strong> {{ Str::limit($caseStudy->challenge, 100) }}</li>
                            <li><strong>Solution:</strong> {{ Str::limit($caseStudy->solution, 100) }}</li>
                            <li><strong>Role:</strong> {{ $caseStudy->role }}</li>
                            <li><strong>Impact:</strong> {{ Str::limit($caseStudy->impact, 100) }}</li>
                        </ul>
                        <a href="{{ route('case-study-detail', $caseStudy->slug) }}"
                            class="btn btn-outline-primary w-100">
                            View Case Study <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Mobile View All Button -->
        <div class="d-block d-lg-none text-center mt-4">
            <a href="{{ route('case-study-grid') }}" class="btn btn-primary rounded-pill">
                View All Case Studies <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Trust & Certification Section -->
<section class="py-4">
    <div class="container">
        <!-- Row 1: Heading -->
        <div class="text-center mb-4">
            <h2 class="h2 fw-bold">Industry Standards & Best Practices</h2>
            <p class="lead mb-0">Building with enterprise-grade security and scalability in mind</p>
        </div>

        <!-- Row 2: Trust Points -->
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="trust-item">
                    <i class="fas fa-shield-alt fa-2x text-primary"></i>
                    <div class="ms-3">
                        <h4 class="h5 mb-1">Security-First Approach</h4>
                        <p class="mb-0">OWASP guidelines & industry-standard encryption</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="trust-item">
                    <i class="fas fa-code-branch fa-2x text-primary"></i>
                    <div class="ms-3">
                        <h4 class="h5 mb-1">Clean Code Architecture</h4>
                        <p class="mb-0">SOLID principles & comprehensive testing</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="trust-item">
                    <i class="fas fa-tachometer-alt fa-2x text-primary"></i>
                    <div class="ms-3">
                        <h4 class="h5 mb-1">Performance Architect</h4>
                        <p class="mb-0">90+ PageSpeed & sub-second responses</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 3: Certifications Slider -->
        <div class="certification-section mb-5">
            <div class="row align-items-center mb-3">
                <div class="col">
                    <h3 class="h4 mb-0">Professional Certifications</h3>
                </div>
                <div class="col-auto">
                    <span class="badge rounded-pill" style="background-color: black;">{{ count($certifiates) }}+
                        Active</span>
                </div>
            </div>

            <!-- Certification Slider -->
            <div class="position-relative">
                <div class="certification-slider overflow-hidden">
                    <div class="row flex-nowrap g-3" id="certSlider" style="transition: transform 0.3s ease;">
                        @foreach ($certifiates as $certifiate)
                        <div class="col-md-3">
                            <div class="cert-card position-relative d-flex flex-column">
                                <img src="{{ asset('storage/' . $certifiate->image) }}" alt="{{ $certifiate->title }}"
                                    class="img-fluid mb-2" style="height: 150px; width: 100%; object-fit: contain;">
                                <div class="cert-info d-flex flex-column flex-grow-1">
                                    <div class="mb-auto">
                                        <h5 class="mb-2" style="font-size: 0.9rem;">{{ $certifiate->title }}</h5>
                                        @if($certifiate->credential_id)
                                        <small class="text-muted d-block mb-2">ID:
                                            {{ $certifiate->credential_id }}</small>
                                        @endif
                                    </div>
                                    <div class="d-flex gap-2 mt-2">
                                        <a href="{{ route('certifiate-detail', $certifiate->slug) }}"
                                            class="btn btn-sm cert-btn-outline">
                                            Details
                                        </a>
                                        @if($certifiate->link)
                                        <a href="{{ $certifiate->link }}" target="_blank" rel="noopener noreferrer"
                                            class="btn btn-sm cert-btn-solid">
                                            Verify
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Slider Controls -->
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div>
                        <button class="btn btn-sm me-2 cert-nav-btn" id="prevCert">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="btn btn-sm cert-nav-btn" id="nextCert">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    <a href="{{ route('certifiate-grid') }}" class="btn btn-sm cert-view-all">
                        View All Certifications →
                    </a>
                </div>
            </div>
        </div>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('certSlider');
            const prevBtn = document.getElementById('prevCert');
            const nextBtn = document.getElementById('nextCert');
            const slideWidth = 25; // Width of each slide (25% = 4 cards visible)
            const totalSlides = {
                {
                    count($certifiates)
                }
            }; // Get total number of certificates
            const visibleSlides = 4;
            let currentSlide = 0;
            const maxSlide = Math.max(0, totalSlides - visibleSlides);

            function updateSliderPosition() {
                slider.style.transform = `translateX(-${currentSlide * slideWidth}%)`;
            }

            function updateButtonStates() {
                prevBtn.disabled = currentSlide === 0;
                nextBtn.disabled = currentSlide >= maxSlide;
            }

            prevBtn.addEventListener('click', () => {
                if (currentSlide > 0) {
                    currentSlide--;
                    updateSliderPosition();
                    updateButtonStates();
                }
            });

            nextBtn.addEventListener('click', () => {
                if (currentSlide < maxSlide) {
                    currentSlide++;
                    updateSliderPosition();
                    updateButtonStates();
                }
            });

            // Initialize button states
            updateButtonStates();

            // Optional: Add touch support for mobile
            let touchStartX = 0;
            let touchEndX = 0;

            slider.addEventListener('touchstart', (e) => {
                touchStartX = e.touches[0].clientX;
            });

            slider.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].clientX;
                handleSwipe();
            });

            function handleSwipe() {
                const swipeThreshold = 50; // Minimum swipe distance
                const swipeDistance = touchStartX - touchEndX;

                if (Math.abs(swipeDistance) > swipeThreshold) {
                    if (swipeDistance > 0 && currentSlide < maxSlide) {
                        // Swipe left
                        nextBtn.click();
                    } else if (swipeDistance < 0 && currentSlide > 0) {
                        // Swipe right
                        prevBtn.click();
                    }
                }
            }
        });
        </script>

        <!-- Row 4: Standards Cards -->
        <div class="row g-3">
            <div class="col-md-3">
                <div class="standard-card">
                    <i class="fas fa-lock fa-lg text-primary"></i>
                    <h5>OWASP Top 10</h5>
                    <p>Security standards</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="standard-card">
                    <i class="fas fa-cloud fa-lg text-primary"></i>
                    <h5>Cloud Native</h5>
                    <p>CNCF practices</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="standard-card">
                    <i class="fas fa-code fa-lg text-primary"></i>
                    <h5>Clean Code</h5>
                    <p>SOLID & DRY</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="standard-card">
                    <i class="fas fa-tasks fa-lg text-primary"></i>
                    <h5>DevOps</h5>
                    <p>CI/CD pipeline</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About section -->
<section id="about" class="">
    <div class="container">
        <div class="about-wrapper p-4">
            <!-- Row 1: Header + CTA -->
            <div class="row align-items-center mb-4 ">
                <div class="col">
                    <h2 class="h2 fw-bold mb-0">About Me</h2>
                </div>
                <div class="col-auto">
                    <a href="{{ route('about') }}" class="btn btn-primary"
                        style="background-color: white; color: black; border-radius: 16px; padding: 10px 20px;">
                        📖 Read My Full Story
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- Row 2: Content -->
            <div class="row">
                <div class="col-lg-12">
                    <p class="lead mb-3">Cloud architect by day, bug hunter by night. I turn coffee ☕ into code and
                        complex problems into elegant solutions. Think of me as your tech-savvy friend who's always up
                        for a good coding adventure!</p>
                    <p class=" " style="color: white;">From debugging sessions that feel like detective work to
                        architecting systems that make businesses smile - I bring both technical expertise and a dash of
                        joy to every project. Want to know what makes a cloud architect tick? Click that story button up
                        there! 🚀</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-6">
                <h2 class="section-heading">Technical Expertise</h2>
            </div>
            <div class="col-lg-6">
                <p class="lead text-muted">From cloud architecture to AI solutions, here's my tech arsenal</p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Frontend Development -->
            <div class="col-md-6 col-lg-3">
                <div class="skill-card h-100">
                    <div class="skill-header mb-3">
                        <span class="skill-icon">🖥️</span>
                        <h3 class="h5">Frontend</h3>
                    </div>
                    <div class="skill-tags">
                        <span class="skill-tag">HTML5</span>
                        <span class="skill-tag">CSS3</span>
                        <span class="skill-tag">JavaScript</span>
                        <span class="skill-tag">Bootstrap</span>
                        <span class="skill-tag">jQuery</span>
                        <span class="skill-tag">SASS</span>
                    </div>
                </div>
            </div>

            <!-- Backend Development -->
            <div class="col-md-6 col-lg-3">
                <div class="skill-card h-100">
                    <div class="skill-header mb-3">
                        <span class="skill-icon">⚡</span>
                        <h3 class="h5">Backend</h3>
                    </div>
                    <div class="skill-tags">
                        <span class="skill-tag">Node.js</span>
                        <span class="skill-tag">Laravel</span>
                        <span class="skill-tag">PostgreSQL</span>
                        <span class="skill-tag">MongoDB</span>
                        <span class="skill-tag">Redis</span>
                        <span class="skill-tag">GraphQL</span>
                    </div>
                </div>
            </div>

            <!-- Cloud & Infrastructure -->
            <div class="col-md-6 col-lg-3">
                <div class="skill-card h-100">
                    <div class="skill-header mb-3">
                        <span class="skill-icon">☁️</span>
                        <h3 class="h5">Cloud</h3>
                    </div>
                    <div class="skill-tags">
                        <span class="skill-tag">AWS</span>
                        <span class="skill-tag">GCP</span>
                        <span class="skill-tag">Azure</span>
                        <span class="skill-tag">Terraform</span>
                        <span class="skill-tag">Docker</span>
                        <span class="skill-tag">Kubernetes</span>
                    </div>
                </div>
            </div>

            <!-- DevOps & Security -->
            <div class="col-md-6 col-lg-3">
                <div class="skill-card h-100">
                    <div class="skill-header mb-3">
                        <span class="skill-icon">🔐</span>
                        <h3 class="h5">DevOps</h3>
                    </div>
                    <div class="skill-tags">
                        <span class="skill-tag">CI/CD</span>
                        <span class="skill-tag">GitHub Actions</span>
                        <span class="skill-tag">Jenkins</span>
                        <span class="skill-tag">Security</span>
                        <span class="skill-tag">Monitoring</span>
                        <span class="skill-tag">Testing</span>
                    </div>
                </div>
            </div>

            <!-- Generative AI -->
            <div class="col-md-6 col-lg-3">
                <div class="skill-card h-100">
                    <div class="skill-header mb-3">
                        <span class="skill-icon">🤖</span>
                        <h3 class="h5">Gen AI</h3>
                    </div>
                    <div class="skill-tags">
                        <span class="skill-tag">AWS Bedrock</span>
                        <span class="skill-tag">OpenAI</span>
                        <span class="skill-tag">LLaMA</span>
                        <span class="skill-tag">RAG</span>
                        <span class="skill-tag">Token Control</span>
                        <span class="skill-tag">Prompt Eng.</span>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-3 ">
    <div class="container" style="background-color: #f8f9fa; border-radius: 16px; padding: 20px;">
        <!-- Section Header -->
        <div class="row align-items-center mb-4">
            <div class="col-lg-6">
                <h2 class="section-heading mb-2">Featured Projects</h2>
                <p class="text-muted">Explore some of my recent work and technical implementations</p>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a href="{{ route('projects-grid') }}" class="btn btn-dark rounded-pill">
                    View All Projects <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="row g-4">
            @foreach ($projects->take(3) as $project)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm project-card">
                    <!-- Project Image -->
                    <div class="position-relative">
                        <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top"
                            alt="{{ $project->title }}"
                            style="height: 200px; object-fit: contain; background-color: white;">
                        @if($project->featured)
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-dark">Featured</span>
                        </div>
                        @endif
                    </div>

                    <!-- Project Info -->
                    <div class="card-body d-flex flex-column">
                        <h3 class="h5 mb-3">{{ $project->title }}</h3>
                        <p class="card-text text-muted flex-grow-1">{{ Str::limit($project->excerpt, 100) }}</p>

                        @if($project->tech_stack)
                        <div class="tech-stack mb-3">
                            @foreach(array_slice(explode(',', $project->tech_stack), 0, 3) as $tech)
                            <span class="badge bg-light text-dark me-1">{{ trim($tech) }}</span>
                            @endforeach
                            @if(count(explode(',', $project->tech_stack)) > 3)
                            <span
                                class="badge bg-light text-dark">+{{ count(explode(',', $project->tech_stack)) - 3 }}</span>
                            @endif
                        </div>
                        @endif

                        <div class="mt-auto">
                            <a href="{{ route('project-detail', $project->slug) }}"
                                class="btn btn-link text-dark p-0 text-decoration-none">
                                View Project Details <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Call to Action -->

    </div>
</section>

<!-- Project CTA Section -->
<section id="testimonials" class="p-4">
    <div class="container" style="background-color: black; border-radius: 16px; padding: 40px;">
        <div class="row align-items-center">
            <!-- Left Column: Text -->
            <div class="col-lg-8">
                <h3 class="h3 mb-2 text-white">Have a project in mind?</h3>
                <p class="mb-0 text-white-50">Let's discuss how we can work together to create something amazing.</p>
            </div>
            <!-- Right Column: CTA Button -->
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="#contact" class="btn btn-light rounded-pill px-4 py-2">
                    Start a Conversation <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Client Testimonials Section -->
<section class="testimonials-section py-5">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center ">
            <h2 class="h2 fw-bold">Trusted by Industry Leaders</h2>
            <p class="lead text-muted">Feedback from C-level clients & startups who've worked with Utsav</p>
        </div>

        <!-- Stats Bar -->
        <!-- <div class="stats-bar mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="d-flex flex-wrap justify-content-between align-items-center text-center text-md-start">
                        <div class="stats-item">
                            <i class="fas fa-check-circle text-success"></i>
                            <span>100% Project Success</span>
                        </div>
                        <div class="stats-item">
                            <i class="fas fa-handshake text-primary"></i>
                            <span>50+ Happy Clients</span>
                        </div>
                        <div class="stats-item">
                            <i class="fas fa-star text-warning"></i>
                            <span>4.9 Rating</span>
                        </div>
                        <div class="stats-item">
                            <i class="fas fa-globe text-info"></i>
                            <span>Worldwide Clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Testimonial Grid -->
        <div class="row g-4">
            @foreach($testimonials as $testimonial)
            <div class="col-md-4">
                <div class="testimonial-card h-100">
                    <div class="client-identity mb-4">
                        <h5 class="client-name mb-1">{{ $testimonial->client_name }}</h5>
                        <p class="client-position mb-1">{{ $testimonial->position }}</p>
                        <small class="text-muted">{{ $testimonial->location }}</small>
                    </div>

                    <blockquote class="testimonial-quote mb-0">
                        {{ $testimonial->testimonial }}
                    </blockquote>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Google Reviews Link -->
        <div class="text-center mt-5">
            <a href="https://g.page/your-business" class="google-reviews-link" target="_blank">
                <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png"
                    alt="Google" height="20" class="me-2">
                <span>Read All Verified Google Reviews →</span>
            </a>
        </div>
    </div>
</section>

<!-- Quick Links Section -->
<section class="quick-links-section py-4">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-lg-6">
                <h2 class="section-heading mb-0">Production Links</h2>
                <p class="text-muted mt-2">Explore my live projects and implementations</p>
            </div>
        </div>

        <div class="row g-4">
            @foreach($quickLinks as $link)
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <a href="{{ $link->url }}" target="_blank" class="quick-link-card">
                    <div class="quick-link-image">
                        @if($link->image)
                            <img src="{{ asset('storage/' . $link->image) }}" alt="{{ $link->name }}">
                        @else
                            <div class="placeholder-image">
                                <i class="fas fa-link"></i>
                            </div>
                        @endif
                    </div>
                    <div class="quick-link-content">
                        <h3>{{ $link->name }}</h3>
                        <span class="explore-link">
                            Explore <i class="fas fa-arrow-right ms-1"></i>
                        </span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

<style>
.project-card {
    transition: transform 0.2s ease-in-out;
}

.project-card:hover {
    transform: translateY(-5px);
}

.tech-stack .badge {
    font-size: 0.75rem;
    font-weight: normal;
    padding: 0.4rem 0.8rem;
}

.btn-link:hover {
    text-decoration: underline !important;
}

@media (max-width: 991.98px) {
    .text-lg-end {
        text-align: left !important;
        margin-top: 1rem;
    }
}

.testimonial-card {
    background: white;
    border-radius: 16px;
    padding: 2rem;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    border: 1px solid rgba(255, 145, 77, 0.1);
}

.testimonial-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 24px rgba(255, 145, 77, 0.15);
    border-color: var(--brand-end);
}

.client-name {
    font-size: 1.1rem;
    font-weight: 600;
    color: #1a1a1a;
    background: var(--brand-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.testimonial-quote {
    font-size: 1rem;
    line-height: 1.6;
    color: #333;
    font-style: italic;
}

.quick-links-section {
    background: linear-gradient(to right, rgba(255, 222, 89, 0.05), rgba(255, 145, 77, 0.05));
    border-radius: 16px;
    
}

.quick-link-card {
    display: block;
    background: white;
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
    text-decoration: none;
    height: 100%;
    border: 1px solid rgba(255, 145, 77, 0.1);
}

.quick-link-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 24px rgba(255, 145, 77, 0.15);
    border-color: var(--brand-end);
}

.quick-link-image {
    position: relative;
    width: 100%;
    padding-top: 100%; /* 1:1 Aspect Ratio */
    background: #f8f9fa;
    overflow: hidden;
}

.quick-link-image img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.quick-link-card:hover .quick-link-image img {
    transform: scale(1.05);
}

.placeholder-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(45deg, rgba(255, 222, 89, 0.1), rgba(255, 145, 77, 0.1));
}

.placeholder-image i {
    font-size: 1.5rem;
    background: var(--brand-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.quick-link-content {
    padding: 1rem;
    text-align: center;
}

.quick-link-content h3 {
    font-size: 0.9rem;
    font-weight: 600;
    color: #1a1a1a;
    margin-bottom: 0.5rem;
    line-height: 1.3;
}

.explore-link {
    font-size: 0.8rem;
    color: var(--brand-end);
    display: inline-flex;
    align-items: center;
    transition: all 0.3s ease;
}

.quick-link-card:hover .explore-link {
    background: var(--brand-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

@media (max-width: 768px) {
    .quick-link-content {
        padding: 0.75rem;
    }
    
    .quick-link-content h3 {
        font-size: 0.8rem;
    }
    
    .explore-link {
        font-size: 0.75rem;
    }
}
</style>